<?php

namespace App\Http\Traits;

trait PartialTrait
{
    private $cookies = [
        'message' => 'We use cookies to improve this website and customize ' .
                     'ads.',
    ];

    private $details = [
        'cards' => [
            [
                'description' => 'Made from 2-Layer fleece to keep you warm ' .
                                 'in the on the slopes and the streets',
                'range'       => [
                    'maximum' => 7,
                    'minimum' => 4,
                ],
                'title'       => 'Warmth',
            ],
            [
                'description' => 'Made from 2-Layer fleece to keep you warm ' .
                                 'in the on the slopes and the streets',
                'range'       => [
                    'maximum' => 9,
                    'minimum' => 6,
                ],
                'title'       => 'Waterproofing',
            ],
            [
                'description' => 'Longer than a regular crewneck to protect ' .
                                 'your back when riding.',
                'range'       => [
                    'maximum' => 4,
                    'minimum' => 1,
                ],
                'title'       => 'Loose Fit',
            ],
        ],
    ];

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

    private $hero = [
        'cart'   => 'Add to Cart',
        'colors' => [
            [
                'active' => false,
                'name'   => 'Yellow',
            ],
            [
                'active' => true,
                'name'   => 'Black',
            ],
            [
                'active' => true,
                'name'   => 'White',
            ],
        ],
        'price'  => [
            'amount'   => 139,
            'currency' => '€',
        ],
        'sizes'  => [
            [
                'abbreviation' => 'XS',
                'active'       => false,
                'name'         => 'Extra small',
            ],
            [
                'abbreviation' => 'S',
                'active'       => false,
                'name'         => 'Small',
            ],
            [
                'abbreviation' => 'M',
                'active'       => true,
                'name'         => 'Medium',
            ],
            [
                'abbreviation' => 'L',
                'active'       => true,
                'name'         => 'Large',
            ],
            [
                'abbreviation' => 'XL',
                'active'       => true,
                'name'         => 'Extra large',
            ],
            [
                'abbreviation' => 'XXL',
                'active'       => true,
                'name'         => 'Extra extra large',
            ],
        ],
        'slider' => [
            [
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=696004399',
                    'width'  => 640,
                ],
            ],
            [
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=624870811',
                    'width'  => 640,
                ],
            ],
            [
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=468172304',
                    'width'  => 640,
                ],
            ],
            [
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=782938967',
                    'width'  => 640,
                ],
            ],
            [
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=626250645',
                    'width'  => 640,
                ],
            ],
        ],
        'title'  => 'HiRise Men Hoodie',
    ];

    private $instagram = [
        'cards' => [
            [
                'product'   => [],
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=355214985',
                    'width'  => 640,
                ],
                'username'  => 'viktorszigeti',
            ],
            [
                'product'   => [],
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=677518963',
                    'width'  => 640,
                ],
                'username'  => 'leftiz',
            ],
            [
                'product'   => [],
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=544489323',
                    'width'  => 640,
                ],
                'username'  => 'leftiz',
            ],
            [
                'product'   => [],
                'thumbnail' => [
                    'height' => 640,
                    'title'  => '',
                    'url'    => '//lorempixel.com/640/640?t=710410408',
                    'width'  => 640,
                ],
                'username'  => 'leftiz',
            ],
        ],
        'title' => 'Show your <strong>#pinetimeclothing</strong>',
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

    private $recommendation = [
        'name'      => 'Fritz Boti',
        'quote'     => 'I love the simplicity of this hoodie',
        'thumbnail' => [
            'height' => 640,
            'title'  => 'Fritz Boti',
            'url'    => '//lorempixel.com/640/640?t=568351371',
            'width'  => 640,
        ],
    ];
}
