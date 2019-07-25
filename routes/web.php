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
//     return view('backend/home');
// });

Route::group(['namespace' => 'admin'], function () {
    Route::group(['prefix' => 'login','middleware'=>'CheckLogin'], function () {
        Route::get('/','LogInController@getLogIn')->name('login');
        Route::post('/','LogInController@postLogIn')->name('postLogin');
    });
    Route::get('/','HomeController@logout')->name('logout');

    Route::group(['prefix' => 'admin','middleware'=>'CheckLogout'], function () {
        Route::get('/home','HomeController@getHome')->name('home');
       
    });
});
