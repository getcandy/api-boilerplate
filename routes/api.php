<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function (Request $request) {
    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {
        return response()->json('', 204);
    }
    return response()->json([
        'error' => 'invalid_credentials'
    ], 403);
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    return response()->json('', 204);
});
