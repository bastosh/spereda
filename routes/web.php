<?php

Route::get('/', 'PageController@home')->name('home');
Route::get('cv', 'PageController@cv');
Route::get('coordonnees', 'PageController@coordonnees');
Route::get('contact', 'PageController@contact');

Route::get('portfolio', 'PortfolioController@index');
Route::get('projets/{project}', 'PortfolioController@show');

Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::get('posts/{post}', 'PostController@show');
Route::post('posts', 'PostController@store');

Route::post('posts/{post}/comments', 'CommentController@store');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/logout', 'SessionController@destroy');