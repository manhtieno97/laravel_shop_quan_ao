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
       

      //Category
        Route::group(['prefix' => 'category'], function () {
             Route::get('/','CategoryController@getCategory')->name('category_index');

             Route::get('/add','CategoryController@getCategoryAdd')->name('get_category_add');
             Route::post('/add','CategoryController@postCategoryAdd')->name('post_category_add');

             Route::get('/edit/{id}','CategoryController@getCategoryEdit')->name('get_category_edit');
             Route::post('/edit/{id}','CategoryController@postCategoryEdit');
             
             Route::post('/delete/{id}','CategoryController@getCategoryDelete')->name('post_category_delete');

             Route::get('/search','CategoryController@searchCategory')->name('search_category');
        });

        //Users
        Route::group(['prefix' => 'user'], function () {
            Route::get('','UserController@getUserList')->name('user_list');

            Route::get('/add','UserController@getUserAdd')->name('get_user_add');
            Route::post('/add','UserController@postUserAdd')->name('post_user_add');

            Route::get('/edit/{id}','UserController@getUserEdit')->name('get_user_edit');
            Route::post('/edit/{id}','UserController@postUserEdit');
             
            Route::post('/delete/{id}','UserController@getUserDelete')->name('post_user_delete');

            Route::get('/search','UserController@searchUser')->name('search_user');
        });
    });
});
