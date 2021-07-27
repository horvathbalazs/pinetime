<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    ->name('home');

Route::group([
    'as'     => 'partials.',
    'prefix' => 'partials',
], function (): void {
    Route::get('newsletter', 'PartialController@newsletter')
        ->name('newsletter');
});
