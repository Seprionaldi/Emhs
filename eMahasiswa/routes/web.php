<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::group(['middleware' => ['auth']], function () {
    //

route::get('/home', 'PageController@home');
route::get('/profile', 'PageController@profile');
route::get('/mahasiswa', 'PageController@mahasiswa');
route::get('/contact', 'PageController@contact');

route::get('/mahasiswa/pencarian', 'PageController@pencarian');
route::get('/mahasiswa/formtambah', 'PageController@tambah');
route::post('/mahasiswa/simpan', 'PageController@simpan');
route::get('/mahasiswa/formedit/{nim}', 'PageController@edit');
route::put('/mahasiswa/update/{id}', 'PageController@update');
route::get('/mahasiswa/delete/{id}', 'PageController@delete');
route::get('/logout', 'AuthController@logout');
});
Route::group(['middleware' => ['guest']], function () {
route::get('/register', 'AuthController@register');
route::post('/simpan', 'AuthController@simpan');
route::get('/', 'AuthController@login')->middleware('guest')->name('login');
route::post('/ceklogin', 'AuthController@ceklogin');
});
route::get('/index',function (){
    return view('index')->middleware('guest');
});



