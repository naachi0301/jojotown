<?php

Route::get('/', 'WelcomeController@index');
    
Route::get('admin/product', 'AdminProductController@index');

Route::get('admin/product/destroy/{id}', 'AdminProductController@destroy');

Route::get('admin/product/create', 'AdminProductController@create');

Route::post('admin/product/store', 'AdminProductController@store');

Route::get('admin/product/edit/{id}', 'AdminProductController@edit');

Route::post('admin/product/update/{id}', 'AdminProductController@update');


Route::get('admin/trend', 'AdminTrendController@index');

Route::get('admin/trend/destroy/{id}', 'AdminTrendController@destroy');

Route::get('admin/trend/create', 'AdminTrendController@create');

Route::post('admin/trend/store', 'AdminTrendController@store');

Route::get('admin/trend/edit/{id}', 'AdminTrendController@edit');

Route::post('admin/trend/update/{id}', 'AdminTrendController@update');


Route::get('admin/brand', 'AdminBrandController@index');

Route::get('admin/brand/destroy/{id}', 'AdminBrandController@destroy');

Route::get('admin/brand/create', 'AdminBrandController@create');

Route::post('admin/brand/store', 'AdminBrandController@store');

Route::get('admin/brand/edit/{id}', 'AdminBrandController@edit');

Route::post('admin/brand/update/{id}', 'AdminBrandController@update');

Auth::routes();
