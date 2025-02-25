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

    public function admin_policy_update(Request $request, $ppc_id)
    {
        // Validate the request
        $request->validate([
            'ppc_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('conference_policy')
            ->where('ppc_id', $ppc_id)
            ->update([
                'ppc_description' => $request->ppc_description,
                'ppc_date_modified' => Carbon::now(),
                'ppc_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_ietgi()
    {
        $ietgi_description = DB::table('conference_ietgi')
            ->where('ietgi_active', 1)
            ->get();

        return view('admin.conference.ietgi', compact('ietgi_description'));
    }

    public function admin_ietgi_update(Request $request, $ietgi_id)
    {
        // Validate the request
        $request->validate([
            'ietgi_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('conference_ietgi')
            ->where('ietgi_id', $ietgi_id)
            ->update([
                'ietgi_description' => $request->ietgi_description,
                'ietgi_date_modified' => Carbon::now(),
                'ietgi_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_ibe()
    {
        $ibe_description = DB::table('conference_ibe')
            ->where('ibe_active', 1)
            ->get();

        return view('admin.conference.ibe', compact('ibe_description'));
    }

    public function admin_ibe_update(Request $request, $ibe_id)
    {
        // Validate the request
        $request->validate([
            'ibe_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('conference_ibe')
            ->where('ibe_id', $ibe_id)
            ->update([
                'ibe_description' => $request->ibe_description,
                'ibe_date_modified' => Carbon::now(),
                'ibe_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_economy()
    {
        $economy = DB::table('conference_economy')
            ->where('eco_active', 1)
            ->get();

        return view('admin.conference.economy', compact('economy'));
    }

    public function admin_economy_update(Request $request, $eco_id)
    {
        // Validate the request
        $request->validate([
            'eco_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('conference_economy')
            ->where('eco_id', $eco_id)
            ->update([
                'eco_description' => $request->eco_description,
                'eco_date_modified' => Carbon::now(),
                'eco_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_social()
    {
        $social = DB::table('conference_social')
            ->where('soc_active', 1)
            ->get();

        return view('admin.conference.social', compact('social'));
    }
}
