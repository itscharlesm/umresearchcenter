<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

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

    public function policy()
    {
        return view('main.center.policy', );
    }

    public function admin_nanotechnology()
    {
        $nanotechnology = DB::table('center_nanotechnology')
            ->where('nan_active', 1)
            ->get();
        return view('admin.center.nanotechnology', compact('nanotechnology'));
    }
}