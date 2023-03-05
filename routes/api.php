<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api entry for emulating sso server
Route::match(['get', 'post'], '/sso', function (Request $req) {
    // random generate a token
    if ($req->filled("token")) {
        $token = $req->input("token");
    } else {
        $token = bin2hex(random_bytes(32));
    }
    return redirect('/home')->withCookie(Cookie::make('token', $token, 3));
});

// api entry for emulating sso server
Route::post('/checkToken', function (Request $req) {
    $token = $req->get("token");

    if ($token == "1234") {
        // hard coded user1
        $res_json = [
            "status" => "true",
            "account" => "student1@o365.nuu.edu.tw",
            "name" => "student1",
            "department" => "csie",
            "positoin" => "S"
        ];
    } else if ($token == "asdf") {
        // hard coded user2
        $res_json = [
            "status" => "true",
            "account" => "teacher2@o365.nuu.edu.tw",
            "name" => "teacher2",
            "department" => "csie",
            "positoin" => "T"
        ];
    } else {
        // no user match
        $res_json = [
            "status" => "false",
        ];
    }

    return response()->json($res_json);
});
