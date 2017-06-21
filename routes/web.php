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

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::get('/logon', 'HomeController@index')->name('logon.index');

Route::resource('/posts', 'PostsController', ['only' => ['index', 'show']]);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/posts', 'PostsController', ['only' => ['store', 'create', 'update', 'destroy', 'delete', 'edit']]);
    Route::get('/posts/{post}/delete', 'PostsController@delete')->name('posts.delete');
});

Auth::routes();
