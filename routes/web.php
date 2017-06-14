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
    return view('welcome');
});

//Route::resource('blog', 'BlogController');

Route::get('blog/', 'BlogController@index')->name('blog.index');
Route::post('blog/', 'BlogController@store')->name('blog.store');
Route::get('blog/create', 'BlogController@create')->name('blog.create');
Route::get('blog/{id}', 'BlogController@show')->name('blog.show');
Route::put('blog/{id}', 'BlogController@update')->name('blog.update');
Route::delete('blog/{id}', 'BlogController@destroy')->name('blog.destroy');
Route::get('blog/{id}/confirm', 'BlogController@confirm')->name('blog.confirm');
Route::get('blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
