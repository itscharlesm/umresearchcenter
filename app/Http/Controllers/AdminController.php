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
            'usr_type' => 'required|exists:roles,usr_type',
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

    public function reset_password(Request $request, $usr_id)
    {
        // Define the new password
        $newPassword = '123456';

        // Update the usr_password field for the given user
        DB::table('users')
            ->where('usr_id', $usr_id)
            ->update([
                'usr_password' => md5($newPassword),
                'usr_date_modified' => Carbon::now(),
                'usr_modified_by' => session('usr_id'),
            ]);

        // Show success message
        session()->flash('successMessage', 'Password reset successfully, Kindly message the user for the default password: 123456.');

        // Redirect back to the page
        return redirect()->back();
    }

    public function messages()
    {
        $messages = DB::table('contact')
            ->leftJoin('users', 'contact.con_modified_by', '=', 'users.usr_id') // Join users table
            ->where('contact.con_active', 1)
            ->select(
                'contact.*',
                'users.usr_last_name',
                'users.usr_first_name',
                'users.usr_middle_name'
            ) // Select required columns
            ->get();

        return view('admin.messages', compact('messages'));
    }

    public function messages_update(Request $request, $con_id)
    {
        // Validate the request
        $request->validate([
            'con_status' => 'required|in:Pending,Ongoing,Completed',
        ]);

        // Update the status of the concern in the database
        DB::table('contact')
            ->where('con_id', $con_id)
            ->update([
                'con_status' => $request->con_status,
                'con_date_modified' => Carbon::now(),
                'con_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Concern status updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function carousel()
    {
        $carousel = DB::table('carousel')
            ->where('cour_active', 1)
            ->get();

        return view('admin.carousel', compact('carousel'));
    }

    public function carousel_update(Request $request, $cour_id)
    {
        $request->validate([
            'cour_image' => 'required|image|mimes:jpeg,jpg,png',
        ]);        

        $cour_image = $request->file('cour_image');

        if ($cour_image) {
            // Generate unique file name
            $file_uuid = generateuuid();
            $fileName = $file_uuid . '.' . $cour_image->getClientOriginalExtension();

            // Define upload path
            $uploadPath = public_path('images/carousel');

            // Move the new file to the designated folder
            $cour_image->move($uploadPath, $fileName);

            // Update the database with the new image name
            $updateStatus = DB::table('carousel')->where('cour_id', $cour_id)->update([
                'cour_image' => $fileName,
                'cour_date_modified' => Carbon::now(),
                'cour_modified_by' => session('usr_id'),
            ]);

            // Debugging: Check if update query actually runs
            if (!$updateStatus) {
                session()->flash('errorMessage', 'Failed to update image in database.');
                return redirect()->back();
            }
        }

        session()->flash('successMessage', 'Image updated successfully.');
        return redirect()->back();
    }
}