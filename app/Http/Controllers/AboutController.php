<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class AboutController extends Controller
{
    public function about_us()
    {
        return view('main.about.about', );
    }

    public function meet_our_team()
    {
        return view('main.about.team', );
    }

    public function contact_us()
    {
        return view('main.about.contact', );
    }

    public function admin_rpc()
    {
        $rpc_description = DB::table('rpc')
            ->where('rpc_active', 1)
            ->get();

        return view('admin.about.rpc', compact('rpc_description'));
    }

    public function admin_rpc_update(Request $request, $rpc_id)
    {
        // Validate the request
        $request->validate([
            'rpc_description' => 'required|string',
        ]);

        // Update the user role in the database
        DB::table('rpc')
            ->where('rpc_id', $rpc_id)
            ->update([
                'rpc_description' => $request->rpc_description,
                'rpc_date_modified' => Carbon::now(),
                'rpc_modified_by' => session('usr_id'),
            ]);


        // Flash success message
        session()->flash('successMessage', 'RPC description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_vmgo()
    {
        $vmgo_descriptions = DB::table('vmgo')
            ->where('vmgo_active', 1)
            ->get();

        return view('admin.about.vmgo', compact('vmgo_descriptions'));
    }
}