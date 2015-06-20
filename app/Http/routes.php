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
    // INDEX
    get('/', [
        'uses' => 'DashboardController@index',
        'as' => 'dashboard',
    ]);

    // FIND
    get('find', [
        'uses' => 'DashboardController@find',
        'as' => 'dashboard.find',
    ]);
    get('find/projects', [
        'uses' => 'FindController@projects',
        'as' => 'dashboard.find.projects',
    ]);
    put('find/projects/{id}/accept', [
        'uses' => 'FindController@acceptProject',
        'as' => 'dashboard.find.projects.accept',
    ]);
    put('find/projects/{id}/deny', [
        'uses' => 'FindController@denyProject',
        'as' => 'dashboard.find.projects.deny',
    ]);
    get('find/freelancers', [
        'uses' => 'FindController@freelancers',
        'as' => 'dashboard.find.freelancers',
    ]);
    put('find/freelancers/{id}/accept', [
        'uses' => 'FindController@acceptFreelancer',
        'as' => 'dashboard.find.freelancers.accept',
    ]);
    put('find/freelancers/{id}/deny', [
        'uses' => 'FindController@denyFreelancer',
        'as' => 'dashboard.find.freelancers.deny',
    ]);

    // PROFILE
    get('profile', [
        'uses' => 'DashboardController@profile',
        'as' => 'dashboard.profile',
    ]);
    get('profile/edit', [
        'uses' => 'FreelancerController@edit',
        'as' => 'dashboard.profile.edit',
    ]);
    post('profile/edit', [
        'uses' => 'FreelancerController@update',
        'as' => 'dashboard.profile.update',
    ]);
    get('profile/{id}', [
        'uses' => 'FreelancerController@show',
        'as' => 'dashboard.profile.show',
    ]);
    get('profile/{id}/portfolio', [
        'uses' => 'FreelancerController@showPortfolio',
        'as' => 'dashboard.profile.portfolio',
    ]);
    get('profile/{id}/portfolio/add', [
        'uses' => 'FreelancerController@add',
        'as' => 'dashboard.profile.portfolio.add',
    ]);
    post('profile/{id}/portfolio/add', [
        'uses' => 'FreelancerController@addItem',
        'as' => 'dashboard.profile.portfolio.addItem',
    ]);

    // PROJECT
    get('projects', [
        'uses' => 'DashboardController@projects',
        'as' => 'dashboard.projects'
    ]);
    get('projects/create', [
        'uses' => 'ProjectController@create',
        'as' => 'dashboard.projects.create',
    ]);
    post('projects/create', [
        'uses' => 'ProjectController@store',
        'as' => 'dashboard.projects.store',
    ]);
    get('projects/{id}', [
        'uses' => 'ProjectController@show',
        'as' => 'dashboard.projects.show',
    ]);
    get('projects/{id}/edit', [
        'uses' => 'ProjectController@edit',
        'as' => 'dashboard.projects.edit',
    ]);
    put('projects/{id}/edit', [
        'uses' => 'ProjectController@update',
        'as' => 'dashboard.projects.update',
    ]);

    // MATCHES
    get('matches', [
        'uses' => 'DashboardController@matches',
        'as' => 'dashboard.matches',
    ]);
});

Route::group(['prefix' => 'auth'], function()
{
    get('login', [
        'uses' => 'Auth\AuthController@getLogin',
        'as' => 'auth.login',
    ]);
    post('login', [
        'uses' => 'Auth\AuthController@postLogin',
        'as' => 'auth.postLogin',
    ]);
    get('logout', [
        'uses' => 'Auth\AuthController@getLogout',
        'as' => 'auth.logout',
    ]);
    get('register', [
        'uses' => 'Auth\AuthController@getRegister',
        'as' => 'auth.register',
    ]);
    post('register', [
        'uses' => 'Auth\AuthController@postRegister',
        'as' => 'auth.postRegister',
    ]);
});