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

// Route::get('/', function () {
//     return view('Login/login-page');
// });

Route::get('/', function () {
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

Route::get('/MainPage_SiteMap', function () {
    return response()->view('MainPage/sitemap')->header('Content-Type', 'text/xml');
});

Route::get('/MainPage_Company', function () {
    return view('MainPage/company');
});

Route::get('/MainPage_Service', function () {
    return view('MainPage/service');
});

Route::get('/MainPage_Service2', function () {
    return view('MainPage/service2');
});

Route::get('/MainPage_DriedPotato', function () {
    return view('MainPage/driedPotato');
});

Route::get('/MainPage_Link', function () {
    return view('MainPage/link');
});

Route::get('/MainPage_Contact', function () {
    return view('MainPage/contact');
});

Route::get('/MainPage_C2', function () {
    return view('MainPage/c2');
});

//--------------------------------------------------------------------------
// ブログページルート
//--------------------------------------------------------------------------
// Route::get('/MainPage_C2', function () {
//     return view('MainPage/c2');
// });
