<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('main.about.about', );
    }

    public function agenda()
    {
        return view('main.about.agenda', );
    }

    public function cmcPresident()
    {
        return view('services.about.president', );

    }

    public function history()
    {
        return view('services.about.history', );
    }

    public function schoolOrgStructure()
    {
        return view('services.about.org', );

    }

    public function boardOfDirectors()
    {
        return view('services.about.board', );

    }

    public function learningOutcomes()
    {
        return view('services.about.outcomes', );

    }

    public function vmc()
    {
        return view('services.about.vmc', );
    }

    public function abouts()
    {
        return view('services.about.about-cmc', );
    }
}
