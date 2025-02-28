<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;


class OfficeController extends Controller
{
    public function technology()
    {
        return view('main.office.technology');
    }

    public function innovation()
    {
        return view('main.office.innovation');
    }

    public function umasenso()
    {
        return view('main.office.umasenso');
    }

    public function admin_technology()
    {
        $technology = DB::table('office_technology')
            ->where('tech_active', 1)
            ->get();

        return view('admin.office.technology', compact('technology'));
    }

    public function admin_technology_update(Request $request, $tech_id)
    {
        // Validate the request
        $request->validate([
            'tech_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('office_technology')
            ->where('tech_id', $tech_id)
            ->update([
                'tech_description' => $request->tech_description,
                'tech_date_modified' => Carbon::now(),
                'tech_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_innovation()
    {
        $innovation = DB::table('office_innovation')
            ->where('inno_active', 1)
            ->get();

        return view('admin.office.innovation', compact('innovation'));
    }

    public function admin_innovation_update(Request $request, $inno_id)
    {
        // Validate the request
        $request->validate([
            'inno_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('office_innovation')
            ->where('inno_id', $inno_id)
            ->update([
                'inno_description' => $request->inno_description,
                'inno_date_modified' => Carbon::now(),
                'inno_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_umasenso()
    {
        $umasenso = DB::table('office_umasenso')
            ->where('inno_active', 1)
            ->get();

        return view('admin.office.umasenso', compact('umasenso'));
    }

    public function admin_umasenso_update(Request $request, $umas_id)
    {
        // Validate the request
        $request->validate([
            'umas_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('office_umasenso')
            ->where('umas_id', $umas_id)
            ->update([
                'umas_description' => $request->umas_description,
                'umas_date_modified' => Carbon::now(),
                'umas_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}
