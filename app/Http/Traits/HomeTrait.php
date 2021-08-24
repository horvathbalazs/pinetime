<?php

namespace App\Http\Traits;

trait HomeTrait
{
    private static function section(): array
    {
        return [
            'description' => 'Duis fermentum finibus dui, a elementum metus ' .
                             'lacinia eu. Suspendisse potenti. Pellentesque ' .
                             'habitant morbi tristique senectus et netus et ' .
                             'malesuada fames ac turpis egestas. Vestibulum ' .
                             'justo mi, tincidunt ac magna sed, euismod ' .
                             'feugiat eros. Sed interdum urna odio, id ' .
                             'imperdiet purus maximus non.',
            'title'       => 'Lorem ipsum dolor sit amet',
        ];
    }
}
