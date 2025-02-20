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

    public function economy()
    {
        return view('main.institute.economy', );
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
}
