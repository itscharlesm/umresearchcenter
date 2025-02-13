<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about_us()
    {
        return view('main.about.about', );
    }

    public function meet_our_team()
    {
        return view('main.about.team', );
    }
}
