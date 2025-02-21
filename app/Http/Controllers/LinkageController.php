<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LinkageController extends Controller
{
    public function linkages()
    {
        return view('main.linkage.linkages', );
    }

    public function admin_linkages()
    {
        $linkages_description = DB::table('linkages')
            ->where('link_active', 1)
            ->get();

        return view('admin.linkage.linkages', compact('linkages_description'));
    }
}