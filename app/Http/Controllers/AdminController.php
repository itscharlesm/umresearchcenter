<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
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
            ->select('users.usr_id', 'users.usr_last_name', 'users.usr_first_name', 'users.usr_middle_name', 'roles.role_name', 'users.usr_email') // Select role_name instead of usr_type
            ->where('users.usr_active', 1)
            ->get();

        return view('admin.users.index', compact('users'));
    }
}