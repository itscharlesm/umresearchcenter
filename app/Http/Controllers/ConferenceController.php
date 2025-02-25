<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ConferenceController extends Controller
{
    public function policy()
    {
        $policy = DB::table('conference_policy')
            ->where('ppc_active', 1)
            ->first();

        return view('main.conference.policy', [
            'ppc_description' => $policy->ppc_description ?? ''
        ]);
    }

    public function ietgi()
    {
        $ietgi = DB::table('conference_ietgi')
            ->where('ietgi_active', 1)
            ->first();

        return view('main.conference.ietgi', [
            'ietgi_description' => $ietgi->ietgi_description ?? ''
        ]);
    }

    public function ibe()
    {
        $ibe = DB::table('conference_ibe')
            ->where('ibe_active', 1)
            ->first();

        return view('main.conference.ibe', [
            'ibe_description' => $ibe->ibe_description ?? ''
        ]);
    }

    public function economy()
    {
        $economy = DB::table('conference_economy')
            ->where('eco_active', 1)
            ->first();

        return view('main.conference.economy', [
            'eco_description' => $economy->eco_description ?? ''
        ]);
    }

    public function social()
    {
        $social = DB::table('conference_social')
            ->where('soc_active', 1)
            ->first();

        return view('main.conference.social', [
            'soc_description' => $social->soc_description ?? ''
        ]);
    }

    public function admin_policy()
    {
        $policy = DB::table('conference_policy')
            ->where('ppc_active', 1)
            ->get();

        return view('admin.conference.policy', compact('policy'));
    }
}
