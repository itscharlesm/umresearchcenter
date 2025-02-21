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
        // Fetch the single active row from the rpc table
        $rpc = DB::table('about_rpc')->where('rpc_active', 1)->first();

        // Fetch the single active row from the vmgo table
        $vmgo = DB::table('about_vmgo')->where('vmgo_active', 1)->first();

        // Fetch the single active row from the agenda_priority table
        $agpr = DB::table('about_agenda_priority')->where('agpr_active', 1)->first();

        // Fetch the single active row from the program_funding table
        $prfu = DB::table('about_program_funding')->where('prfu_active', 1)->first();

        // Pass the rpc_description, vmgo_vision, and vmgo_mission to the view
        return view('main.about.about', [
            'rpc_description' => $rpc->rpc_description ?? '',
            'vmgo_vision' => $vmgo->vmgo_vision ?? '',
            'vmgo_mission' => $vmgo->vmgo_mission ?? '',
            'vmgo_goals' => $vmgo->vmgo_goals ?? '',
            'vmgo_objectives' => $vmgo->vmgo_objectives ?? '',
            'agpr_agenda' => $agpr->agpr_agenda ?? '',
            'agpr_priority' => $agpr->agpr_priority ?? '',
            'prfu_program' => $prfu->prfu_program ?? '',
            'prfu_funding' => $prfu->prfu_funding ?? ''
        ]);
    }

    public function meet_our_team()
    {
        return view('main.about.team', );
    }

    public function contact_us()
    {
        return view('main.about.contact', );
    }

    public function contact_us_message(Request $request)
    {
        // Validate request data
        $request->validate([
            'con_name' => 'required|string|max:255',
            'con_number' => 'required|numeric',
            'con_email' => 'required|email|max:255',
            'con_message' => 'required|string|max:1000',
        ]);

        // Insert data into the database
        DB::table('contact')->insert([
            'con_name' => ucwords(strtolower($request->con_name)),
            'con_number' => $request->con_number,
            'con_email' => $request->con_email,
            'con_message' => $request->con_message,
            'con_status' => 'Pending',
            'con_date_created' => Carbon::now(),
            'con_active' => 1,
        ]);

        // Redirect with success message
        session()->flash('successMessage', 'Message sent successfully.');
        return redirect()->action([MainController::class, 'main']);
    }

    public function admin_rpc()
    {
        $rpc_description = DB::table('about_rpc')
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

        // Update the data in the database
        DB::table('about_rpc')
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
        $vmgo_descriptions = DB::table('about_vmgo')
            ->where('vmgo_active', 1)
            ->get();

        return view('admin.about.vmgo', compact('vmgo_descriptions'));
    }

    public function admin_vmgo_update(Request $request, $vmgo_id)
    {
        // Validate the request
        $request->validate([
            'vmgo_vision' => 'nullable|string',
            'vmgo_mission' => 'nullable|string',
            'vmgo_goals' => 'nullable|string',
            'vmgo_objectives' => 'nullable|string'
        ]);

        // Update the data in the database
        DB::table('about_vmgo')
            ->where('vmgo_id', $vmgo_id)
            ->update([
                'vmgo_vision' => $request->vmgo_vision,
                'vmgo_mission' => $request->vmgo_mission,
                'vmgo_goals' => $request->vmgo_goals,
                'vmgo_objectives' => $request->vmgo_objectives,
                'vmgo_date_modified' => Carbon::now(),
                'vmgo_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'VGMO descriptions updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_agenda_priority()
    {
        $agpr_descriptions = DB::table('about_agenda_priority')
            ->where('agpr_active', 1)
            ->get();

        return view('admin.about.agenda_priority', compact('agpr_descriptions'));
    }

    public function admin_agenda_priority_update(Request $request, $agpr_id)
    {
        // Validate the request
        $request->validate([
            'agpr_agenda' => 'nullable|string',
            'agpr_priority' => 'nullable|string'
        ]);

        // Update the data in the database
        DB::table('about_agenda_priority')
            ->where('agpr_id', $agpr_id)
            ->update([
                'agpr_agenda' => $request->agpr_agenda,
                'agpr_priority' => $request->agpr_priority,
                'agpr_date_modified' => Carbon::now(),
                'agpr_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Agenda and Priority descriptions updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_program_funding()
    {
        $prfu_descriptions = DB::table('about_program_funding')
            ->where('prfu_active', 1)
            ->get();

        return view('admin.about.program_funding', compact('prfu_descriptions'));
    }

    public function admin_program_funding_update(Request $request, $prfu_id)
    {
        // Validate the request
        $request->validate([
            'prfu_program' => 'nullable|string',
            'prfu_funding' => 'nullable|string'
        ]);

        // Update the data in the database
        DB::table('about_program_funding')
            ->where('prfu_id', $prfu_id)
            ->update([
                'prfu_program' => $request->prfu_program,
                'prfu_funding' => $request->prfu_funding,
                'prfu_date_modified' => Carbon::now(),
                'prfu_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Agenda and Priority descriptions updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}