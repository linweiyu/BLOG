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

Route::get('/', 'ArticleController@index');
Route::get('/contact','HomeController@contact');
Route::get('/about','HomeController@about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/write', 'HomeController@write')->name('write');
Route::get('/admin/manage', 'HomeController@manage')->name('manage');
Route::get('/admin/articles/{id}','HomeController@showarticle')->name('home.show');
Route::get('tags/{tags}','TagController@show');
Route::post('/replies','RepliesController@store');

Route::resources([
    'articles' => 'ArticleController',
]);
