<?php

namespace App\Http\Traits;

trait WelcomeTrait
{
    private static function navigation(): array
    {
        return [
            [
                'target' => '_self',
                'title'  => 'Home demo (HomeController@demo)',
                'url'    => url('home/demo'),
            ],
            [
                'target' => '_self',
                'title'  => 'Home partials / Section (HomeController)',
                'url'    => url('home/partials/section'),
            ],
            [
                'target' => '_self',
                'title'  => 'Product demo (ProductController@demo)',
                'url'    => url('product/demo'),
            ],
        ];
    }
}
