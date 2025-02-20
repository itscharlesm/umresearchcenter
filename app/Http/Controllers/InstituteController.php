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
        $po_description = DB::table('popular_opinion')
            ->where('po_active', 1)
            ->get();

        return view('admin.institute.popular', compact('po_description'));
    }

    public function admin_popular_update(Request $request, $po_id)
    {
        // Validate the request
        $request->validate([
            'po_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('popular_opinion')
            ->where('po_id', $po_id)
            ->update([
                'po_description' => $request->po_description,
                'po_date_modified' => Carbon::now(),
                'po_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_emerging()
    {
        $etgis_description = DB::table('emerging_technologies')
            ->where('etgis_active', 1)
            ->get();

        return view('admin.institute.emerging', compact('etgis_description'));
    }

    public function admin_emerging_update(Request $request, $etgis_id)
    {
        // Validate the request
        $request->validate([
            'etgis_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('emerging_technologies')
            ->where('etgis_id', $etgis_id)
            ->update([
                'etgis_description' => $request->etgis_description,
                'etgis_date_modified' => Carbon::now(),
                'etgis_modified_by' => session('usr_id'),
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
