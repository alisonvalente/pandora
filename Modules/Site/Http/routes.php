<?php

Route::group(['middleware' => 'web', 'prefix' => 'site', 'namespace' => 'Modules\Site\Http\Controllers'], function()
{
    Route::get('/', 'SiteController@index');
});

Route::group(['middleware' => 'api', 'prefix' => 'api', 'namespace' => 'Modules\Site\Http\Api'], function()
{
	Route::get('site/{id}', 'SiteApi@get');
	Route::post('site', 'SiteApi@post');
	Route::put('site/{id}', 'SiteApi@put');
	Route::delete('site/{id}', 'SiteApi@delete');
});