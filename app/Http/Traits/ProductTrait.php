<?php

namespace App\Http\Traits;

trait ProductTrait
{
    private static function accordion(): array
    {
        return [
            'cards' => [
                [
                    'body'     => [],
                    'header'   => [
                        'title' => 'Technical Details',
                    ],
                    'modifier' => 'details',
                ],
                [
                    'body'     => [],
                    'header'   => [
                        'title' => 'Sustainability',
                    ],
                    'modifier' => 'sustainability',
                ],
                [
                    'body'     => [
                        'list'  => [
                            [
                                'description' => 'Machine wash max. ' .
                                                 '30°C/86°F delicate cycle',
                                'icon'        => 'machine-wash',
                            ],
                            [
                                'description' => 'Do not use bleach/whitener',
                                'icon'        => 'do-not-bleach',
                            ],
                            [
                                'description' => 'Iron maximum 110°C/230°F',
                                'icon'        => 'iron-low-temperature',
                            ],
                            [
                                'description' => 'Do not dry clean',
                                'icon'        => 'do-not-dry-clean',
                            ],
                            [
                                'description' => 'Low temperature dryer may ' .
                                                 'be used',
                                'icon'        => 'dryer-low-temperature',
                            ],
                        ],
                        'title' => 'Caring for your hoodie is caring for the ' .
                                   'planet',
                    ],
                    'header'   => [
                        'title' => 'Product Care',
                    ],
                    'modifier' => 'care',
                ],
            ],
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

    private static function hero(): array
    {
        return [
            'cart'        => 'Add to Cart',
            'colors'      => [
                [
                    'active'    => false,
                    'disabled'  => true,
                    'name'      => 'Yellow',
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-1.png'),
                        'width'  => 1920,
                    ],
                ],
                [
                    'active'    => true,
                    'disabled'  => false,
                    'name'      => 'Black',
                    'thumbnail' => [
                        'height' => 1080,
                        'title'  => '',
                        'url'    => url('png/placeholder-2.png'),
                        'width'  => 1080,
                    ],
                ],
                [
                    'active'    => false,
                    'disabled'  => false,
                    'name'      => 'White',
                    'thumbnail' => [
                        'height' => 1920,
                        'title'  => '',
                        'url'    => url('png/placeholder-3.png'),
                        'width'  => 1080,
                    ],
                ],
            ],
            'details'     => [
                '️Free shipping above 130 EUR',
                'Free returns for 15 days',
                'Delivery in 3-5 business days',
            ],
            'price'       => [
                'amount'   => 139,
                'currency' => '€',
            ],
            'sizes'       => [
                [
                    'abbreviation' => 'XS',
                    'active'       => false,
                    'disabled'     => true,
                    'name'         => 'Extra small',
                ],
                [
                    'abbreviation' => 'S',
                    'active'       => false,
                    'disabled'     => true,
                    'name'         => 'Small',
                ],
                [
                    'abbreviation' => 'M',
                    'active'       => false,
                    'disabled'     => false,
                    'name'         => 'Medium',
                ],
                [
                    'abbreviation' => 'L',
                    'active'       => false,
                    'disabled'     => false,
                    'name'         => 'Large',
                ],
                [
                    'abbreviation' => 'XL',
                    'active'       => true,
                    'disabled'     => false,
                    'name'         => 'Extra large',
                ],
                [
                    'abbreviation' => 'XXL',
                    'active'       => false,
                    'disabled'     => false,
                    'name'         => 'Extra extra large',
                ],
            ],
            'sizing'      => [
                'active'      => true,
                'close'       => 'Close',
                'fit'         => [
                    'description' => 'Hi-Rise is a bit longer than a regular ' .
                                     'crewneck to cover your back when riding.',
                    'title'       => 'Relaxed fit',
                ],
                'measurement' => [
                    'description' => 'Measure a piece from your wardrobe as ' .
                                     'comparison.',
                    'table'       => [
                        [
                            'cell'   => 'Horizontally edge-to-edge chest',
                            'header' => 'Chest',
                        ],
                        [
                            'cell'   => 'Horizontally edge-to-edge waist',
                            'header' => 'Waist',
                        ],
                        [
                            'cell'   => 'From neck seam to end of sleeve',
                            'header' => 'Sleeve',
                        ],
                        [
                            'cell'   => 'From collar to end of garment',
                            'header' => 'Length',
                        ],
                    ],
                    'title'       => 'Measurement',
                ],
                'open'        => 'Sizing Guide',
                'sizes'       => [
                    [
                        'abbreviation' => 'XS',
                        'active'       => false,
                        'chest'        => 88,
                        'key'          => 'xs',
                        'length'       => 90,
                        'name'         => 'Extra small',
                        'sleeve'       => 117,
                        'waist'        => 119,
                    ],
                    [
                        'abbreviation' => 'S',
                        'active'       => false,
                        'chest'        => 64,
                        'key'          => 's',
                        'length'       => 88,
                        'name'         => 'Small',
                        'sleeve'       => 102,
                        'waist'        => 106,
                    ],
                    [
                        'abbreviation' => 'M',
                        'active'       => false,
                        'chest'        => 119,
                        'key'          => 'm',
                        'length'       => 116,
                        'name'         => 'Medium',
                        'sleeve'       => 91,
                        'waist'        => 100,
                    ],
                    [
                        'abbreviation' => 'L',
                        'active'       => false,
                        'chest'        => 112,
                        'key'          => 'l',
                        'length'       => 90,
                        'name'         => 'Large',
                        'sleeve'       => 100,
                        'waist'        => 55,
                    ],
                    [
                        'abbreviation' => 'XL',
                        'active'       => true,
                        'chest'        => 106,
                        'key'          => 'xl',
                        'length'       => 66,
                        'name'         => 'Extra large',
                        'sleeve'       => 40,
                        'waist'        => 45,
                    ],
                    [
                        'abbreviation' => 'XXL',
                        'active'       => false,
                        'chest'        => 41,
                        'key'          => 'xxl',
                        'length'       => 114,
                        'name'         => 'Extra extra large',
                        'sleeve'       => 87,
                        'waist'        => 118,
                    ],
                ],
                'title'       => 'HiRise Sizing Guide',
            ],
            'slider'      => [
                'close'  => 'Close',
                'slides' => [
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
            ],
            'sustainable' => [
                'active' => true,
                'title'  => 'Sustainable materials',
            ],
            'title'       => 'HiRise Men Hoodie',
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
