<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

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

    public function contact_us()
    {
        return view('main.about.contact', );
    }

    public function admin_rpc()
{
    $rpc_description = DB::table('rpc')
        ->where('rpc_active', 1)
        ->get();

    return view('admin.about.rpc', compact('rpc_description'));
}
}
