<?php

use Illuminate\Http\Request;

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

Route::get('hello', function () {
    return 'Hello EV-Tracking';
});

// List all
Route::get('backend/tracking', 'BackendController@index');

// List specific
Route::get('backend/tracking/{tracking_code}', 'BackendController@show');

// Create
Route::put('backend/tracking', 'BackendController@store');

// Import
Route::get('backend/import', 'BackendController@import');