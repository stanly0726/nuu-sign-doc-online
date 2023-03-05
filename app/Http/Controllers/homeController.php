<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class homeController extends Controller {
    public function home(Request $req) {
        // if current session don't contain user field
        if (Session::missing('user')) {
            // if 'token' is not in cookie, redirect to sso
            if (!Cookie::has('token'))
                return redirect('/login');

            // validate token with sso server
            $sso_url_token_validate = 'https://sso.nuu.edu.tw/api/checkToken.php';
            // $sso_url_token_validate = 'http://' . $req->getHttpHost() . '/api/checkToken';

            $sso_res = Http::post($sso_url_token_validate, [
                'token' => Cookie::get('token'),
                'system_name' => "test",
            ]);
            Session(["user" => $sso_res->json()]);
        }
        return view("home", ["user_json" => Session::get('user')]);
    }
    public function logout() {
        Cookie::queue(Cookie::forget('token'));
        Session::flush();
        return redirect('/home');
    }
}
