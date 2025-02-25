<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class PublicationController extends Controller
{
    public function admin_news()
    {
        $news_description = DB::table('publication_news')
            ->where('news_active', 1)
            ->orderBy('news_date_created', 'DESC')
            ->get();

        return view('admin.publication.news', compact('news_description'));
    }
}
