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

    public function admin_nanotechnology_update(Request $request, $nan_id)
    {
        // Validate the request
        $request->validate([
            'nan_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('center_nanotechnology')
            ->where('nan_id', $nan_id)
            ->update([
                'nan_description' => $request->nan_description,
                'nan_date_modified' => Carbon::now(),
                'nan_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_coleoptera()
    {
        $coleoptera = DB::table('center_coleoptera')
            ->where('col_active', 1)
            ->get();
            
        return view('admin.center.coleoptera', compact('coleoptera'));
    }

    public function admin_coleoptera_update(Request $request, $col_id)
    {
        // Validate the request
        $request->validate([
            'col_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('center_coleoptera')
            ->where('col_id', $col_id)
            ->update([
                'col_description' => $request->col_description,
                'col_date_modified' => Carbon::now(),
                'col_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}