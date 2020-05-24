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
//     return view('Welcome/welcome');
// });

Route::get('/', function () {
    return view('Login/login-page');
});

// Route::get('/Login', function () {
//     return view('Login/login-page');
// });

Route::post('/LoginForm','LoginController@InputLogin');

Route::get('/CacheFlush','CacheController@flush');

Route::post('/CacheFlush','CacheController@flush');