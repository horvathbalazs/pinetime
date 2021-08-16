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
                        'title'  => 'Partials/Collection',
                        'url'    => url('partials/collection'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Partials/Cookies',
                        'url'    => url('partials/cookies'),
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
                    [
                        'target' => '_self',
                        'title'  => 'Partials/Instagram',
                        'url'    => url('partials/instagram'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Partials/Recommendation',
                        'url'    => url('partials/recommendation'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Partials/Showcase',
                        'url'    => url('partials/showcase'),
                    ],
                ],
            ],
        ]);
    }
}
