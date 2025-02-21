<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function main()
    {
        $carousel = DB::table('carousel')
            ->where('cour_active', 1)
            ->get();

        return view('index', compact('carousel'));
    }
}