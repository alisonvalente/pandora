<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Main\Http\Controllers'], function()
{
    Route::get('/main', 'MainController@index');
});


