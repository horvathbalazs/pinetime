<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;
use App\Http\Traits\HomeTrait;
use App\Http\Traits\LayoutTrait;

class HomeController extends Controller
{
    use GlobalTrait, HomeTrait, LayoutTrait;

    public function __invoke($partial)
    {
        if (method_exists($this, $partial)) {
            return view('laravel/home-partials', [
                'global'  => static::global(),
                'partial' => $partial,
                'themes'  => ['home', 'partial'],
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
            'themes'  => ['home'],
        ]);
    }
}
