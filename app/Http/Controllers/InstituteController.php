<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class InstituteController extends Controller
{
    public function popular()
    {
        $popular = DB::table('institute_popular')
            ->where('pop_active', 1)
            ->first();

        return view('main.institute.popular', [
            'pop_description' => $popular->pop_description ?? ''
        ]);
    }

    public function emerging()
    {
        $emerging = DB::table('institute_emerging')
            ->where('eme_active', 1)
            ->first();
        return view('main.institute.emerging', [
            'eme_description' => $emerging->eme_description ?? ''
        ]);
    }

    public function biodiversity()
    {
        $biodiversity = DB::table('institute_biodiversity')
            ->where('bio_active', 1)
            ->first();

        return view('main.institute.biodiversity', [
            'bio_description' => $biodiversity->bio_description ?? ''
        ]);
    }

    public function economy()
    {
        $economy = DB::table('institute_economy')
            ->where('eco_active', 1)
            ->first();

        return view('main.institute.economy', [
            'eco_description' => $economy->eco_description ?? ''
        ]);
    }

    public function social()
    {
        return view('main.institute.social', );
    }

    public function admin_popular()
    {
        $pop_description = DB::table('institute_popular')
            ->where('pop_active', 1)
            ->get();

        return view('admin.institute.popular', compact('pop_description'));
    }

    public function admin_popular_update(Request $request, $pop_id)
    {
        // Validate the request
        $request->validate([
            'pop_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('institute_popular')
            ->where('pop_id', $pop_id)
            ->update([
                'pop_description' => $request->pop_description,
                'pop_date_modified' => Carbon::now(),
                'pop_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_emerging()
    {
        $eme_description = DB::table('institute_emerging')
            ->where('eme_active', 1)
            ->get();

        return view('admin.institute.emerging', compact('eme_description'));
    }

    public function admin_emerging_update(Request $request, $eme_id)
    {
        // Validate the request
        $request->validate([
            'eme_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('institute_emerging')
            ->where('eme_id', $eme_id)
            ->update([
                'eme_description' => $request->eme_description,
                'eme_date_modified' => Carbon::now(),
                'eme_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_biodiversity()
    {
        $bio_description = DB::table('institute_biodiversity')
            ->where('bio_active', 1)
            ->get();

        return view('admin.institute.biodiversity', compact('bio_description'));
    }

    public function admin_biodiversity_update(Request $request, $bio_id)
    {
        // Validate the request
        $request->validate([
            'bio_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('institute_biodiversity')
            ->where('bio_id', $bio_id)
            ->update([
                'bio_description' => $request->bio_description,
                'bio_date_modified' => Carbon::now(),
                'bio_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_economy()
    {
        $eco_description = DB::table('institute_economy')
            ->where('eco_active', 1)
            ->get();

        return view('admin.institute.economy', compact('eco_description'));
    }

    public function admin_economy_update(Request $request, $eco_id)
    {
        // Validate the request
        $request->validate([
            'eco_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('institute_economy')
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
        $soc_description = DB::table('institute_social')
            ->where('soc_active', 1)
            ->get();

        return view('admin.institute.social', compact('soc_description'));
    }

    public function admin_social_update(Request $request, $soc_id)
    {
        // Validate the request
        $request->validate([
            'soc_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('institute_social')
            ->where('soc_id', $soc_id)
            ->update([
                'soc_description' => $request->soc_description,
                'soc_date_modified' => Carbon::now(),
                'soc_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}