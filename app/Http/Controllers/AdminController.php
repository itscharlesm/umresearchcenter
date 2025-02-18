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
}