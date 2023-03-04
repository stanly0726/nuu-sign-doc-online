<?php

use App\Http\Controllers\testController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [testController::class, 'test']);
Route::get('/logout', [testController::class, 'logout']);
Route::get('/login', function (Request $req) {
    // return view('login', ['sso_url' => 'https://sso.nuu.edu.tw/preLogin.php']);
    return view('login', ['sso_url' => 'http://' . $req->getHttpHost() . '/api/sso']);
});


Route::get('/cookie/set/{value}', function ($value) {
    $minutes = 10;
    $response = new Illuminate\Http\Response('Set cookie');
    $response->withCookie(cookie('token', $value, $minutes));
    return $response;
});
