<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class EventsController extends Controller
{
    //
    public function events()
    {
        //join the news and news category

        return view('admin.modules.events.events', );
    }

    public function announcements()
    {

        return view('admin.modules.events.announcement', );
    }
}
