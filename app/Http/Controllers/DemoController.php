<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\PartialTrait;

class DemoController extends Controller
{
    use PartialTrait;

    public function index()
    {
        return view('demo', [
            'details'    => $this->details,
            'footer'     => $this->footer,
            'newsletter' => $this->newsletter,
        ]);
    }
}
