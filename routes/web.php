<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('demo', 'DemoController@index')
    ->name('demo');

Route::get('partials/{template}', 'PartialController')
    ->name('partials');
