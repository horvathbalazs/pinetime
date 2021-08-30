<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;
use App\Http\Traits\HomeTrait;

class HomeController extends Controller
{
    use GlobalTrait, HomeTrait;

    public function __invoke($partial)
    {
        if (method_exists($this, $partial)) {
            return view('laravel/home-partials', [
                'global'  => static::global(),
                'partial' => $partial,
                'theme'   => 'home',
                $partial  => static::$partial(),
            ]);
        }

        abort(404);
    }

    public function demo()
    {
        return view('templates/index', [
            'global'  => static::global(),
            'section' => static::section(),
            'theme'   => 'home',
        ]);
    }
}
