<?php

namespace App\Http\Traits;

trait PartialTrait
{
    private $footer = [
        'navigation' => [
            [
                [
                    'target' => '_self',
                    'title'  => 'About',
                    'url'    => '//localhost/about',
                ],
                [
                    'target' => '_self',
                    'title'  => 'PineTeam',
                    'url'    => '//localhost/pineteam',
                ],
                [
                    'target' => '_self',
                    'title'  => 'Sustainability',
                    'url'    => '//localhost/sustainability',
                ],
            ],
            [
                [
                    'target' => '_self',
                    'title'  => 'Shipping & Delivery',
                    'url'    => '//localhost/shipping-and-delivery',
                ],
                [
                    'target' => '_self',
                    'title'  => 'Return Policy',
                    'url'    => '//localhost/shipping-and-delivery',
                ],
                [
                    'target' => '_self',
                    'title'  => 'Careers',
                    'url'    => '//localhost/careers',
                ],
                [
                    'target' => '_self',
                    'title'  => 'Contact',
                    'url'    => '//localhost/contact',
                ],
            ],
        ],
    ];

    private $newsletter = [
        'description' => '<strong>Get 15% off</strong> your first order ' .
                         'and don\'t miss a new campaign or product release',
        'email'       => [
            'placeholder' => 'Your e-mail address',
            'title'       => 'Your e-mail address',
        ],
        'subscribe'   => 'Subscribe',
        'title'       => 'Subscribe to our Newsletter',
    ];
}
