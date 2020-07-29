<?php

Route::get('/', 'WelcomeController@index');
    
Route::get('admin/product', 'AdminProductController@index');

Route::get('admin/product/destroy/{id}', 'AdminProductController@destroy');

Route::get('admin/product/create', 'AdminProductController@create');

Route::post('admin/product/store', 'AdminProductController@store');

Route::get('admin/product/edit/{id}', 'AdminProductController@edit');

Route::post('admin/product/update/{id}', 'AdminProductController@update');

Auth::routes();
