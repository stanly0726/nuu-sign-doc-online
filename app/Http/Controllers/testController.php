<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class testController extends Controller {
    public function test(Request $req) {
        return view("test");
    }
    public function logout() {
        Cookie::queue(Cookie::forget('token'));
        return redirect('/test');
    }
}
