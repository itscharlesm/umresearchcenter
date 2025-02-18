<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    public function home()
    {
        $logins = DB::table('logins')
            ->select(
                'users.usr_last_name',
                'users.usr_first_name',
                DB::raw('MAX(logins.log_date) as log_date_max'),
                'logins.usr_id'
            )
            ->join('users', 'users.usr_id', '=', 'logins.usr_id')
            ->groupBy('logins.usr_id', 'users.usr_last_name', 'users.usr_first_name')
            ->orderByDesc('log_date_max')
            ->limit(10)
            ->get();

        $announcements = DB::table('announcements')
            ->join('users', 'users.usr_id', 'announcements.ann_created_by')
            ->where('ann_active', '=', '1')
            ->orderBy('ann_date_created', 'DESC')
            ->get();

        return view('admin.home', compact('logins', 'announcements'));
    }

    public function users()
    {
        $users = DB::table('users')
            ->join('roles', 'roles.usr_type', '=', 'users.usr_type')
            ->select('users.usr_id', 'users.usr_last_name', 'users.usr_first_name', 'users.usr_middle_name', 'users.usr_type', 'roles.role_name', 'users.usr_email') // Added users.usr_type
            ->where('users.usr_active', 1)
            ->get();

        $roles = DB::table('roles')
            ->where('role_active', 1)
            ->select('usr_type', 'role_name')
            ->get();

        return view('admin.users.index', compact('users', 'roles'));
    }

    public function update_role(Request $request, $usr_id)
    {
        // Validate the request
        $request->validate([
            'usr_type' => 'required|exists:roles,usr_type', // Ensure the role exists in the roles table
        ]);

        // Update the user role in the database
        DB::table('users')
            ->where('usr_id', $usr_id)
            ->update([
                'usr_type' => $request->usr_type,
                'usr_date_modified' => Carbon::now(),
                'usr_modified_by' => session('usr_id'),
            ]);
    

        // Flash success message
        session()->flash('successMessage', 'User role has been updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}