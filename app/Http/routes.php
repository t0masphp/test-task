<?php

Route::get('/', 'HomeController@index' );

Route::get('/users', 'UserController@index' );
Route::get('/users/{id}', 'UserController@getById' );
Route::get('/users/{id}/grab', 'UserController@grabAnApple' );
Route::get('/basket', 'ApplesController@getFree' );
Route::get('/apples/free', 'ApplesController@makeFree' );

