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

Route::get('/movies', 'MoviesController@index');

Route::get('/movies/{movie}', 'MoviesController@show');

Route::get('/create', 'MoviesController@create');

Route::post('/create', 'MoviesController@store');

Route::post('/comment/{movie}/add', 'CommentsController@store');

Route::get('/genres/{genre}', 'GenresController@show');