<?php

Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::post('/register','UserController@create');
    Route::post('/login','UserController@login');
    Route::post('/logout','UserController@logout');
    Route::get('/fb-login','UserController@fbCallback');
});
