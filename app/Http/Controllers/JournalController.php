<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class JournalController extends Controller
{
    public function multidisciplinary()
    {
        return view('main.journal.multidisciplinary');
    }

    public function emerging()
    {
        return view('main.journal.emerging');
    }

    public function economy()
    {
        return view('main.journal.economy');
    }
}
