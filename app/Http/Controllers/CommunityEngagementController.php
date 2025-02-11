<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunityEngagementController extends Controller
{
    //
    public function about_school_action()
    {
        return view('services.community-engagement.about-center-social-action', );
    }

    public function social_action_updates()
    {
        return view('services.community-engagement.center-for-social-action-updates', );
    }
    public function extension_program()
    {
        return view('services.community-engagement.extension-program', );
    }
    public function project_implemented()
    {
        return view('services.community-engagement.project-implemented', );
    }
    public function partners()
    {
        return view('services.community-engagement.partners', );
    }
    public function publication()
    {
        return view('services.community-engagement.publication', );
    }
}
