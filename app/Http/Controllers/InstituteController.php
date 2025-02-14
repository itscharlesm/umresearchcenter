<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function popular()
    {
        return view('main.institute.popular', );
    }

    public function emerging()
    {
        return view('main.institute.emerging', );
    }

    public function biodiversity()
    {
        return view('main.institute.biodiversity', );
    }
}
