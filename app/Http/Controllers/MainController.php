<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function main()
    {
        // setTestUserSessionVariables();

        // $banners = DB::table('banners')
        // ->where('branch_id', '=', 'UM-MAIN')
        // ->where('ban_active', '=', '1')
        // ->orderBy('ban_order','ASC')
        // ->get();

        // $news = DB::table('news')
        // ->where('branch_id', '=', 'UM-MAIN')
        // ->where('news_active', '=', 1)
        // ->orderby('news_date','DESC')
        // ->limit('6')
        // ->get();

        return view('index', );
    }
}
