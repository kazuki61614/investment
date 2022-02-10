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
Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@show');
Route::get('/posts/create', 'PostController@create');
Route::get('/users', 'UserController@index');
Route::get('/posts', 'CommentController@index');
Route::get('/posts', 'LikeController@index');