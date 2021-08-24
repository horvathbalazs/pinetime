<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeController@index')
    ->name('welcome');

Route::group([
    'as'     => 'home.',
    'prefix' => 'home',
], function (): void {
    $controller = 'HomeController';

    Route::get('demo', $controller . '@demo')
        ->name('demo');

    Route::get('partials/{partial}', $controller)
        ->name('partials');
});

Route::group([
    'as'     => 'product.',
    'prefix' => 'product',
], function (): void {
    $controller = 'ProductController';

    Route::get('demo', $controller . '@demo')
        ->name('demo');

    Route::get('partials/{partial}', $controller)
        ->name('partials');
});
