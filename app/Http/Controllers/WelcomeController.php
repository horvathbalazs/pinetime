<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;
use App\Http\Traits\WelcomeTrait;

class WelcomeController extends Controller
{
    use GlobalTrait, WelcomeTrait;

    public function index()
    {
        return view('laravel.welcome', [
            'global'     => static::global(),
            'navigation' => static::navigation(),
            'theme'      => 'welcome',
        ]);
    }
}
