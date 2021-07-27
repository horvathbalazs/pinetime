<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\PartialTrait;

class PartialController extends Controller
{
    use PartialTrait;

    public function accordion()
    {
        return view('partials', ['template' => 'accordion']);
    }

    public function footer()
    {
        return view('partials', [
            'footer'   => $this->footer,
            'template' => 'footer',
        ]);
    }

    public function newsletter()
    {
        return view('partials', [
            'newsletter' => $this->newsletter,
            'template'   => 'newsletter',
        ]);
    }
}
