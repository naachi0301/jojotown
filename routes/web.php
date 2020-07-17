<?php

Route::get('/', 'WelcomeController@index');
    

Route::get('product/create', 'AdminProductController@index');