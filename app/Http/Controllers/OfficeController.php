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
}
