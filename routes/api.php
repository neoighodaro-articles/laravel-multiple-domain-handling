<?php

Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@create');
