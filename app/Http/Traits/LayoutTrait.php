<?php

namespace App\Http\Traits;

trait LayoutTrait
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
            'close'   => 'Close',
            'message' => 'We use cookies to improve this website and ' .
                         'customize ads.',
        ];
    }

    private static function footer(): array
    {
        return [
            'copyright'  => [
                'Copyright Pinetime Clothing 2010-2021',
                '<a href="https://example.com/" target="_self" title="Terms ' .
                'and Conditions">Terms and Conditions</a>',
            ],
            'investor'   => [
                'thumbnail' => [
                    'height' => 160,
                    'title'  => 'Hiventures',
                    'url'    => url('png/investor.png'),
                    'width'  => 728,
                ],
            ],
            'logo'       => [
                'symbol' => 'pinetime',
                'target' => '_self',
                'title'  => 'Pinetime Clothing',
                'url'    => url(''),
            ],
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
            'socials'    => [
                [
                    'symbol' => 'instagram',
                    'target' => '_blank',
                    'title'  => 'Follow Us on Instagram',
                    'url'    => 'https://instagram.com/pinetimeclothing',
                ],
                [
                    'symbol' => 'facebook',
                    'target' => '_blank',
                    'title'  => 'Follow Us on Facebook',
                    'url'    => 'https://facebook.com/PinetimeClothing',
                ],
            ],
            'sponsors'   => [
                [
                    'thumbnail' => [
                        'title'  => 'Visa',
                        'url'    => url('svg/visa.svg'),
                    ],
                ],
                [
                    'thumbnail' => [
                        'title'  => 'American Express',
                        'url'    => url('svg/amex.svg'),
                    ],
                ],
                [
                    'thumbnail' => [
                        'title'  => 'MasterCard',
                        'url'    => url('svg/mastercard.svg'),
                    ],
                ],
                [
                    'thumbnail' => [
                        'title'  => 'PayPal',
                        'url'    => url('svg/paypal.svg'),
                    ],
                ],
            ],
        ];
    }

    private static function header(): array
    {
        return [
            'drawer' => [
                'logo'   => [
                    'symbol' => 'pinetime',
                    'target' => '_self',
                    'title'  => 'Pinetime Clothing',
                    'url'    => url(''),
                ],
                'navigation' => [
                    'primary'   => [
                        [
                            [
                                'active' => false,
                                'target' => '_self',
                                'title'  => 'Men',
                                'url'    => url('men'),
                            ],
                            [
                                'active' => true,
                                'target' => '_self',
                                'title'  => 'Women',
                                'url'    => url('women'),
                            ],
                            [
                                'active' => false,
                                'target' => '_self',
                                'title'  => 'Accessories',
                                'url'    => url('accessories'),
                            ],
                        ],
                    ],
                    'secondary' => [
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
                ],
                'thumbnail' => [
                    'height' => 132,
                    'title'  => '',
                    'url'    => url('png/drawer.png'),
                    'width'  => 143,
                ],
            ],
            'logo'   => [
                'symbol' => 'pinetime-text',
                'target' => '_self',
                'title'  => 'Pinetime Clothing',
                'url'    => url(''),
            ],
            'navigation' => [
                [
                    [
                        'active' => false,
                        'target' => '_self',
                        'title'  => 'Men',
                        'url'    => url('men'),
                    ],
                    [
                        'active' => true,
                        'target' => '_self',
                        'title'  => 'Women',
                        'url'    => url('women'),
                    ],
                    [
                        'active' => false,
                        'target' => '_self',
                        'title'  => 'Accessories',
                        'url'    => url('accessories'),
                    ],
                ],
            ],
        ];
    }

    private static function instagram(): array
    {
        return [
            'slider' => [
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-1.png'),
                        'width'  => 1920,
                    ],
                    'username'  => 'viktorszigeti',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-4.png'),
                        'width'  => 1920,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-2.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-5.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1920,
                        'title'  => '',
                        'url'    => url('png/placeholder-3.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1920,
                        'title'  => '',
                        'url'    => url('png/placeholder-6.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-1.png'),
                        'width'  => 1920,
                    ],
                    'username'  => 'viktorszigeti',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-4.png'),
                        'width'  => 1920,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-2.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-5.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1920,
                        'title'  => '',
                        'url'    => url('png/placeholder-3.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1920,
                        'title'  => '',
                        'url'    => url('png/placeholder-6.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-1.png'),
                        'width'  => 1920,
                    ],
                    'username'  => 'viktorszigeti',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-4.png'),
                        'width'  => 1920,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-2.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-5.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1920,
                        'title'  => '',
                        'url'    => url('png/placeholder-3.png'),
                        'width'  => 1080,
                    ],
                    'username'  => 'leftiz',
                ],
                [
                    'product'   => [],
                    'thumbnail' => [
                        'height' => 1920,
                        'title'  => '',
                        'url'    => url('png/placeholder-6.png'),
                        'width'  => 1080,
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
            'description' => 'The men\'s Pinetime Multipath Grid Fleece is ' .
                             'a faithful traveling partner. It\'s your ' .
                             'hangout at camp, brave the commute, and chill ' .
                             'on the deck layer. It has the familiar comfort ' .
                             'of a hoodie and the technical versatility of ' .
                             'quick-drying, breathable fleece. A small zip ' .
                             'pocket secures a key, card or cash for ' .
                             'whatever comes next.',
            'quote'       => 'I love the simplicity of this hoodie',
            'thumbnail'   => [
                'height' => 1080,
                'title'  => 'Fritz Boti',
                'url'    => url('png/placeholder-1.png'),
                'width'  => 1920,
            ],
        ];
    }
}
