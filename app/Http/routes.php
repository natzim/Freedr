<?php

get('/', function()
{
    return view('welcome');
});

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
], function()
{
    get('/', 'DashboardController@index');
    get('find', 'DashboardController@find');
    get('profile', 'DashboardController@profile');
    get('projects', 'DashboardController@projects');
    get('matches', 'DashboardController@matches');
});

Route::group(['prefix' => 'auth'], function()
{
    get('login', 'Auth\AuthController@getLogin');
    post('login', 'Auth\AuthController@postLogin');
    get('logout', 'Auth\AuthController@getLogout');
    get('register', 'Auth\AuthController@getRegister');
    post('register', 'Auth\AuthController@postRegister');
});