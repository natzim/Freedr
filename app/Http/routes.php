<?php

Route::group(['prefix' => 'dashboard'], function()
{
    get('/', 'DashboardController@index');
    get('find', 'DashboardController@find');
    get('profile', 'DashboardController@profile');
    get('projects', 'DashboardController@projects');
    get('matches', 'DashboardController@matches');
});