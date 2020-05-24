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

//--------------------------------------------------------------------------
// デフォルトルート
//--------------------------------------------------------------------------

// Route::get('/', function () {
//     return view('Welcome/welcome');
// });

Route::get('/', function () {
    return view('Login/login-page');
});

Route::get('/MainPage', function () {
    return view('MainPage/index');
});

Route::get('/CacheFlush','CacheController@flush');

//--------------------------------------------------------------------------
// ログインページルート
//--------------------------------------------------------------------------

Route::post('/LoginForm','LoginController@InputLogin');

Route::post('/CacheFlush','CacheController@flush');

//--------------------------------------------------------------------------
// メインページルート
//--------------------------------------------------------------------------

Route::get('/MainPage_Company', function () {
    return view('MainPage/company');
});
