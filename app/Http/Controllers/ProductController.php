<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;
use App\Http\Traits\ProductTrait;

class ProductController extends Controller
{
    use GlobalTrait, ProductTrait;

    public function __invoke($partial)
    {
        if (method_exists($this, $partial)) {
            return view('product/partials', [
                'global'  => static::global(),
                'partial' => $partial,
                'theme'   => 'product',
                $partial  => static::$partial(),
            ]);
        }

        abort(404);
    }

    public function demo()
    {
        return view('product/demo', [
            'collection'     => static::collection(),
            'cookies'        => static::cookies(),
            'details'        => static::details(),
            'footer'         => static::footer(),
            'global'         => static::global(),
            'header'         => static::header(),
            'hero'           => static::hero(),
            'instagram'      => static::instagram(),
            'newsletter'     => static::newsletter(),
            'recommendation' => static::recommendation(),
            'showcase'       => static::showcase(),
            'theme'          => 'product',
        ]);
    }
}
