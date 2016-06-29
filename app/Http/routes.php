<?php

/*
 * Home
 */
Route::get('/', [
   'uses' => '\socnetwork\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

/*
 * Authentication
 * */

Route::get('/signup', [
    'uses' => '\socnetwork\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);
Route::post('/signup', [
    'uses' => '\socnetwork\Http\Controllers\AuthController@postSignup',
    'middleware' => ['guest'],
]);
Route::get('/signin', [
    'uses' => '\socnetwork\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);

Route::post('/signin', [
    'uses' => '\socnetwork\Http\Controllers\AuthController@postSignin',
    'middleware' => ['guest'],
]);
Route::get('/signout', [
    'uses' => '\socnetwork\Http\Controllers\AuthController@getSignout',
    'as' => 'auth.signout'
]);


/*
 * Search
 * */
Route::get('/search', [
    'uses' => '\socnetwork\Http\Controllers\SearchController@getResult',
    'as' => 'search.results',
]);

/*
 * User profile
 * */
Route::get('/user/{username}', [
    'uses' => '\socnetwork\Http\Controllers\ProfileController@getProfile',
    'as' => 'profile.index',
]);

Route::get('/profile/edit', [
    'uses' => '\socnetwork\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware' => ['auth'],
]);
Route::post('/profile/edit', [
    'uses' => '\socnetwork\Http\Controllers\ProfileController@postEdit',
    'middleware' => ['auth'],
]);



