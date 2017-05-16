<?php

Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::post('/register','UserController@create');
    Route::post('/login','UserController@login');
    Route::post('/logout','UserController@logout');
    Route::get('/fb-login','UserController@fbCallback');

    //Các request liên quan đến xử lý thông tin giảng viên.
    Route::get('/register-as-trainer','TrainerController@create');//Chuyển tới form đăng kí.
    Route::post('/teacher/register','TrainerController@store');//Xử lý request lưu thông tin tạo mới giảng viên.

});
