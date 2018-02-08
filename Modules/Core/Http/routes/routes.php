<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{
    Route::view('/', 'core::index');
});
