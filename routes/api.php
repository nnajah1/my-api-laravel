<?php

use Illuminate\Http\Request;
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

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/beh', function () {
    return 'Hello beh';
});

Route::match(['put', 'patch', 'post'], '/match', function() {
    return 'This route is for put, patch, and post http verb only';
});

Route::any('updateUserInfo', function() {
    return 'route accepts any http verb';
});

route::get('/users', function(request $request) {
    return $request->email . ' - '.  $request->name;
});

