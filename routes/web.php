<?php

Route::get('/product', 'WelcomeController@index');
    

Route::get('product/create', 'AdminProductController@create');

Route::post('product/store', 'AdminProductController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
