<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function nanotechnology()
    {
        return view('main.center.nanotechnology', );
    }

    public function coleoptera()
    {
        return view('main.center.coleoptera', );
    }
}
