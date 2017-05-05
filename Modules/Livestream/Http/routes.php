<?php

Route::group(['middleware' => 'web', 'prefix' => 'livestream', 'namespace' => 'Modules\Livestream\Http\Controllers'], function()
{
    Route::get('/', 'LivestreamController@index');
    Route::get('/home', 'LivestreamController@home');

    Route::get('/ccc',function(){
      event(new Modules\Livestream\Events\ChatEvent());
    });
});
