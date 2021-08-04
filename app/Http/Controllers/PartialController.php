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

    public function collection()
    {
        return view('partials', [
            'collection' => $this->collection,
            'template'   => 'collection',
        ]);
    }

    public function cookies()
    {
        return view('partials', [
            'cookies'  => $this->cookies,
            'template' => 'cookies',
        ]);
    }

    public function details()
    {
        return view('partials', [
            'details'  => $this->details,
            'template' => 'details',
        ]);
    }

    public function footer()
    {
        return view('partials', [
            'footer'   => $this->footer,
            'template' => 'footer',
        ]);
    }

    public function hero()
    {
        return view('partials', [
            'hero'     => $this->hero,
            'template' => 'hero',
        ]);
    }

    public function instagram()
    {
        return view('partials', [
            'instagram' => $this->instagram,
            'template'  => 'instagram',
        ]);
    }

    public function newsletter()
    {
        return view('partials', [
            'newsletter' => $this->newsletter,
            'template'   => 'newsletter',
        ]);
    }

    public function recommendation()
    {
        return view('partials', [
            'recommendation' => $this->recommendation,
            'template'       => 'recommendation',
        ]);
    }
}
