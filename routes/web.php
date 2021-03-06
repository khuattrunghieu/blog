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
Route::get('/home', 'HomeController@index')-> name('home');
Route::get('/about', 'HomeController@about')-> name('about');
Route::get('/post', 'PostController@post')-> name('post');
Route::get('/post/show/{id}', 'PostController@show')-> name('post.show');
Route::get('/contact', 'HomeController@contact')-> name('contact');
Route::get('/', function () {
    return view('welcome');
});
