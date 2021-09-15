<?php

namespace App\Http\Traits;

trait GlobalTrait
{
    private static function global(): array
    {
        return [
            'app'     => [
                'name' => config('app.name'),
                'url'  => url(''),
            ],
        ];
    }
}
