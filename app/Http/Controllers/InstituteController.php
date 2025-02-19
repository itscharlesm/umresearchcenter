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
}
