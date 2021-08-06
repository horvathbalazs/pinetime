<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;

class HomeController extends Controller
{
    use GlobalTrait;

    public function index()
    {
        return view('home', [
            'global' => static::global(),
            'home'   => [
                'navigation' => [
                    [
                        'target' => '_self',
                        'title'  => 'Demo',
                        'url'    => url('demo'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Partials/Details',
                        'url'    => url('partials/details'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Partials/Footer',
                        'url'    => url('partials/footer'),
                    ],
                ],
            ],
        ]);
    }
}
