<?php

Route::group(['middleware' => 'web', 'prefix' => 'site', 'namespace' => 'Modules\Site\Http\Controllers'], function()
{
    Route::get('/', 'SiteController@index');
});

Route::group(['middleware' => 'web', 'prefix' => 'api', 'namespace' => 'Modules\Site\Http\Api'], function()
{
	Route::get('site', 'SiteApi@get');
	Route::put('site/{id}', 'SiteApi@put');
	//Route::post('site', 'SiteApi@post');
	//Route::delete('site/{id}', 'SiteApi@delete');
});