<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;
use App\Http\Traits\PartialTrait;

class PartialController extends Controller
{
    use GlobalTrait, PartialTrait;

    public function __invoke($template)
    {
        if (method_exists($this, $template)) {
            return view('partials', [
                'global'   => static::global(),
                'template' => $template,
                $template  => static::$template(),
            ]);
        }

        abort(404);
    }
}
