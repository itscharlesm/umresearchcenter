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
        $nanotechnology = DB::table('center_nanotechnology')
            ->where('nan_active', 1)
            ->first();

        return view('main.center.nanotechnology', [
            'nan_description' => $nanotechnology->nan_description ?? ''
        ]);
    }

    public function coleoptera()
    {
        $coleoptera = DB::table('center_coleoptera')
            ->where('col_active', 1)
            ->first();

        return view('main.center.coleoptera', [
            'col_description' => $coleoptera->col_description ?? ''
        ]);
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

    public function admin_policy()
    {
        $policy = DB::table('center_policy')
            ->where('pol_active', 1)
            ->get();

        return view('admin.center.policy', compact('policy'));
    }

    public function admin_policy_update(Request $request, $pol_id)
    {
        // Validate the request
        $request->validate([
            'pol_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('center_policy')
            ->where('pol_id', $pol_id)
            ->update([
                'pol_description' => $request->pol_description,
                'pol_date_modified' => Carbon::now(),
                'pol_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}