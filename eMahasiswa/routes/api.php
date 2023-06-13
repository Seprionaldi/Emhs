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
 route::get('/mahasiswa/read', 'MhsAPIController@read');
 route::post('/mahasiswa/create', 'MhsAPIController@create');
 route::post('/mahasiswa/update/{id}', 'MhsAPIController@update');
 route::delete('/mahasiswa/delete/{id}', 'MhsAPIController@delete');
