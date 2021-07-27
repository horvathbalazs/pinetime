<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PartialController extends Controller
{
    public function footer()
    {
        return view('partials/footer');
    }

    public function newsletter()
    {
        return view('partials/newsletter', [
            'description' => '<strong>Get 15% off</strong> your first order ' .
                          'and don\'t miss a new campaign or product release',
            'title'       => 'Subscribe to our Newsletter',
        ]);
    }
}
