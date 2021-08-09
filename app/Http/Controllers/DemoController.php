<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;
use App\Http\Traits\PartialTrait;

class DemoController extends Controller
{
    use GlobalTrait, PartialTrait;

    public function index()
    {
        return view('demo', [
            'details'    => static::details(),
            'footer'     => static::footer(),
            'global'     => static::global (),
            'header'     => static::header(),
            'instagram'  => static::instagram(),
            'newsletter' => static::newsletter(),
        ]);
    }
}
