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
    Route::get('details', 'PartialController@details')
        ->name('details');

    Route::get('footer', 'PartialController@footer')
        ->name('footer');

    Route::get('hero', 'PartialController@hero')
        ->name('hero');

    Route::get('instagram', 'PartialController@instagram')
        ->name('instagram');

    Route::get('newsletter', 'PartialController@newsletter')
        ->name('newsletter');

    Route::get('recommendation', 'PartialController@recommendation')
        ->name('recommendation');
});
