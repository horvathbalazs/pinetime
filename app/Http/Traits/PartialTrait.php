<?php

namespace App\Http\Traits;

trait PartialTrait
{
    private static function collection(): array
    {
        return [
            'description' => 'Kodma are spirits in Japanese folklore what ' .
                             'live inside the tree. There can be one in each ' .
                             'tree. They say the form of these spirits can’t ' .
                             'be seen but one can feel the existance',
            'label'       => 'This item is part of the',
            'link'        => [
                'target' => '_self',
                'title'  => 'Explore Collection',
                'url'    => 'https://example.com/',
            ],
            'thumbnail'   => [
                'height' => 1080,
                'title'  => 'Kodama Collection',
                'url'    => url('png/placeholder-1.png'),
                'width'  => 1920,
            ],
            'title'       => 'Kodama Collection',
        ];
    }

    private static function cookies(): array
    {
        return [
            'message' => 'We use cookies to improve this website and ' .
                         'customize ads.',
        ];
    }

    private static function details(): array
    {
        return [
            'cards' => [
                [
                    'description' => 'Made from 2-Layer fleece to keep you ' .
                                     'warm in the on the slopes and the ' .
                                     'streets',
                    'labels'      => [
                        [
                            'active' => true,
                            'name'   => 'Light',
                        ],
                        [
                            'active' => false,
                            'name'   => 'Mid',
                        ],
                        [
                            'active' => false,
                            'name'   => 'Heavy',
                        ],
                    ],
                    'range'       => 0,
                    'title'       => 'Warmth',
                ],
                [
                    'description' => 'Made from 2-Layer fleece to keep you ' .
                                     'warm in the on the slopes and the ' .
                                     'streets',
                    'labels'      => [
                        [
                            'active' => false,
                            'name'   => 'None',
                        ],
                        [
                            'active' => true,
                            'name'   => 'Medium',
                        ],
                        [
                            'active' => false,
                            'name'   => 'High',
                        ],
                    ],
                    'range'       => 1,
                    'title'       => 'Waterproofing',
                ],
                [
                    'description' => 'Longer than a regular crewneck to ' .
                                     'protect your back when riding.',
                    'labels'      => [
                        [
                            'active' => false,
                            'name'   => 'Slim',
                        ],
                        [
                            'active' => false,
                            'name'   => 'Regular',
                        ],
                        [
                            'active' => true,
                            'name'   => 'Loose',
                        ],
                    ],
                    'range'       => 2,
                    'title'       => 'Loose Fit',
                ],
            ],
        ];
    }

    private static function footer(): array
    {
        return [
            'navigation' => [
                [
                    [
                        'target' => '_self',
                        'title'  => 'About',
                        'url'    => url('about'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'PineTeam',
                        'url'    => url('pineteam'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Sustainability',
                        'url'    => url('sustainability'),
                    ],
                ],
                [
                    [
                        'target' => '_self',
                        'title'  => 'Shipping & Delivery',
                        'url'    => url('shipping-and-delivery'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Return Policy',
                        'url'    => url('shipping-and-delivery'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Careers',
                        'url'    => url('careers'),
                    ],
                    [
                        'target' => '_self',
                        'title'  => 'Contact',
                        'url'    => url('contact'),
                    ],
                ],
            ],
        ];
    }

    private static function header(): array
    {
        return [];
    }

    private static function hero(): array
    {
        return [
            'cart'        => 'Add to Cart',
            'colors'      => [
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
            'details'     => '️Free shipping above 130 EUR<br>' .
                             'Free returns for 15 days<br>' .
                             'Delivery in 3-5 business days',
            'price'       => [
                'amount'   => 139,
                'currency' => '€',
            ],
            'sizes'       => [
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
            'slider'      => [
                [
                    'thumbnail' => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-1.png'),
                        'width'  => 640,
                    ],
                ],
                [
                    'thumbnail' => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-4.png'),
                        'width'  => 640,
                    ],
                ],
                [
                    'thumbnail' => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-2.png'),
                        'width'  => 640,
                    ],
                ],
                [
                    'thumbnail' => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-5.png'),
                        'width'  => 640,
                    ],
                ],
                [
                    'thumbnail' => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-3.png'),
                        'width'  => 640,
                    ],
                ],
            ],
            'sustainable' => [
                'active' => true,
                'title'  => 'Sustainable materials',
            ],
            'title'       => 'HiRise Men Hoodie',
        ];
    }

    private static function instagram(): array
    {
        return [
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
    }

    private static function newsletter(): array
    {
        return [
            'description' => '<strong>Get 15% off</strong> your first order ' .
                             'and don\'t miss a new campaign or product ' .
                             'release',
            'email'       => [
                'placeholder' => 'Your e-mail address',
                'title'       => 'Your e-mail address',
            ],
            'subscribe'   => 'Subscribe',
            'title'       => 'Subscribe to our Newsletter',
        ];
    }

    private static function recommendation(): array
    {
        return [
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
}
