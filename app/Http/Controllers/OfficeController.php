<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;


class OfficeController extends Controller
{
    public function technology()
    {
        return view('main.office.technology');
    }
}
