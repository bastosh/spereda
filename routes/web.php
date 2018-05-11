<?php

Route::get('/', 'PageController@home')->name('home');
Route::get('cv', 'PageController@cv');
Route::get('contact', 'PageController@contact');
Route::get('about', 'PageController@about');

Route::get('portfolio', 'PortfolioController@index');
Route::get('projets/{project}', 'PortfolioController@show');

Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::get('posts/{post}', 'PostController@show');
Route::post('posts', 'PostController@store');

Route::get('posts/tags/{tag}', 'TagController@index');

Route::post('posts/{post}/comments', 'CommentController@store');
Route::post('posts/{post}/guest', 'CommentController@guest');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/logout', 'SessionController@destroy');

Route::post('/subscribe', 'SubscriberController@store');