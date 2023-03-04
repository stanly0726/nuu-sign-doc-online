<?php

use App\Http\Controllers\testController;
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

Route::get('/cookie/set/{value}', function ($value) {
    $minutes = 10;
    $response = new Illuminate\Http\Response('Set cookie');
    $response->withCookie(cookie('token', $value, $minutes));
    return $response;
});
