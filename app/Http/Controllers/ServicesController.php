<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ServicesController extends Controller
{
    //
    public function guidance_service()
    {
        $contents = DB::table('content_guidance')
            ->get();

        return view('services.online-services.guidance-index', compact('contents'));

    }

    public function health_service()
    {
        $contents = DB::table('content_health')
            ->get();

        return view('services.online-services.health-index', compact('contents'));

    }

    public function library_service()
    {
        $contents = DB::table('content_library')
            ->get();

        return view('services.online-services.library-index', compact('contents'));

    }

    public function scholarship_service()
    {
        $contents = DB::table('scholarships')
            ->get();

        return view('services.online-services.scholarship-index', compact('contents'));
    }

    public function campus_tour()
    {
        $contents = DB::table('content_facilities')
            ->get();

        return view('services.online-services.campus-tour', compact('contents'));
    }

    public function cmc_cial()
    {
        $contents = DB::table('content_cial')
            ->get();

        return view('services.online-services.cmc-cial-index', compact('contents'));
    }


}
