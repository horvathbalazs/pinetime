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
            'close'   => 'Close',
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
            'logo'       => [
                'target' => '_self',
                'title'  => 'Pinetime Clothing',
                'url'    => url(''),
            ],
            'navigation' => [
                'primary'   => [
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
        ];
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

    private static function showcase(): array
    {
        return [
            'features' => [
                [
                    'description' => 'to keep your face warm',
                    'thumbnail'   => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-1.png'),
                        'width'  => 640,
                    ],
                    'title'       => 'Built in mask',
                ],
                [
                    'description' => 'Inside brushed cosy fabric to keep ' .
                                     'your face warm, with elastic tape',
                    'thumbnail'   => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-4.png'),
                        'width'  => 640,
                    ],
                    'title'       => 'Armpit Ventillation System',
                ],
                [
                    'description' => 'to keep your everyday stash',
                    'thumbnail'   => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-2.png'),
                        'width'  => 640,
                    ],
                    'title'       => 'Huge Chest Pocket',
                ],
                [
                    'description' => 'placed on the left sleeve for easy ' .
                                     'access at the gates.',
                    'thumbnail'   => [
                        'height' => 640,
                        'title'  => '',
                        'url'    => url('png/placeholder-5.png'),
                        'width'  => 640,
                    ],
                    'title'       => 'List pass pocket',
                ],
            ],
            'slider'   => [
                'image' => url('png/interactive.png'),
            ],
            'title'    => 'Our ultimate ninja-hoodie is part of the Pinetime ' .
                          'collection since 2012 and we improve it year by ' .
                          'year',
        ];
    }
}
