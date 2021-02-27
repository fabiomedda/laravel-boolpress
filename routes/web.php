<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@about')->name('about');
Route::get('blog', 'PageController@blog')->name('blog');

Route::resource('posts', 'PostController');
Route::resource('categories', 'CategorytwoController');

Route::get('articles_api', 'PageController@articles_api')->name('articles_api');
Route::get('categories_api', 'PageController@categories_api')->name('categories_api');
Route::get('tags_api', 'PageController@tags_api')->name('tags_api');
