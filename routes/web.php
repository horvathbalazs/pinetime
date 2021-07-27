<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('demo', 'DemoController@index')
    ->name('demo');

Route::group([
    'as'     => 'partials.',
    'prefix' => 'partials',
], function (): void {
    Route::get('footer', 'PartialController@footer')
        ->name('footer');

    Route::get('newsletter', 'PartialController@newsletter')
        ->name('newsletter');
});
