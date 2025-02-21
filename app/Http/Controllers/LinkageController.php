<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class LinkageController extends Controller
{
    public function linkages()
    {
        return view('main.linkage.linkages', );
    }

    public function admin_linkages()
    {
        $linkages_description = DB::table('linkages')
            ->where('link_active', 1)
            ->get();

        return view('admin.linkage.linkages', compact('linkages_description'));
    }

    public function admin_linkages_local(Request $request, $link_id)
    {
        // Validate the request
        $request->validate([
            'link_local' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('linkages')
            ->where('link_id', $link_id)
            ->update([
                'link_local' => $request->link_local,
                'link_local_date_modified' => Carbon::now(),
                'link_local_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Local Linkages updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_linkages_international(Request $request, $link_id)
    {
        // Validate the request
        $request->validate([
            'link_international' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('linkages')
            ->where('link_id', $link_id)
            ->update([
                'link_international' => $request->link_international,
                'link_international_date_modified' => Carbon::now(),
                'link_international_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'International Linkages updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}