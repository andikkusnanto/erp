<?php
Auth::routes();
Route::resource('ProductServices','ProductServiceController');

Route::resource('DeliveryOrders','DeliveryOrderController');

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::resource('ExternalProviders', 'ExternalProviderController');
//Route::controller('ExternalProviders', 'ExternalProviderController');
Route::post('ExternalProviders', 'ExternalProviderController@getSave');

