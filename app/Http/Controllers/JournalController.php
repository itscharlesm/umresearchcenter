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
        $multidisciplinary = DB::table('journal_multidisciplinary')
            ->where('mul_active', 1)
            ->first();

        return view('main.journal.multidisciplinary', [
            'mul_description' => $multidisciplinary->mul_description ?? ''
        ]);
    }

    public function emerging()
    {
        $emerging = DB::table('journal_emerging')
            ->where('eme_active', 1)
            ->first();

        return view('main.journal.emerging', [
            'eme_description' => $emerging->eme_description ?? ''
        ]);
    }

    public function economy()
    {
        $economy = DB::table('journal_economy')
            ->where('eco_active', 1)
            ->first();

        return view('main.journal.economy', [
            'eco_description' => $economy->eco_description ?? ''
        ]);
    }

    public function tropical()
    {
        $tropical = DB::table('journal_tropical')
            ->where('tro_active', 1)
            ->first();

        return view('main.journal.tropical', [
            'tro_description' => $tropical->tro_description ?? ''
        ]);
    }

    public function social()
    {
        $social = DB::table('journal_social')
            ->where('soc_active', 1)
            ->first();

        return view('main.journal.social', [
            'soc_description' => $social->soc_description ?? ''
        ]);
    }

    public function journals()
    {
        return view('main.journal.journals');
    }

    public function admin_multidisciplinary()
    {
        $multidisciplinary = DB::table('journal_multidisciplinary')
            ->where('mul_active', 1)
            ->get();

        return view('admin.journal.multidisciplinary', compact('multidisciplinary'));
    }

    public function admin_multidisciplinary_update(Request $request, $mul_id)
    {
        // Validate the request
        $request->validate([
            'mul_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('journal_multidisciplinary')
            ->where('mul_id', $mul_id)
            ->update([
                'mul_description' => $request->mul_description,
                'mul_date_modified' => Carbon::now(),
                'mul_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_emerging()
    {
        $emerging = DB::table('journal_emerging')
            ->where('eme_active', 1)
            ->get();

        return view('admin.journal.emerging', compact('emerging'));
    }

    public function admin_emerging_update(Request $request, $eme_id)
    {
        // Validate the request
        $request->validate([
            'eme_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('journal_emerging')
            ->where('eme_id', $eme_id)
            ->update([
                'eme_description' => $request->eme_description,
                'eme_date_modified' => Carbon::now(),
                'eme_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_economy()
    {
        $economy = DB::table('journal_economy')
            ->where('eco_active', 1)
            ->get();

        return view('admin.journal.economy', compact('economy'));
    }

    public function admin_economy_update(Request $request, $eco_id)
    {
        // Validate the request
        $request->validate([
            'eco_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('journal_economy')
            ->where('eco_id', $eco_id)
            ->update([
                'eco_description' => $request->eco_description,
                'eco_date_modified' => Carbon::now(),
                'eco_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_tropical()
    {
        $tropical = DB::table('journal_tropical')
            ->where('tro_active', 1)
            ->get();

        return view('admin.journal.tropical', compact('tropical'));
    }

    public function admin_tropical_update(Request $request, $tro_id)
    {
        // Validate the request
        $request->validate([
            'tro_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('journal_tropical')
            ->where('tro_id', $tro_id)
            ->update([
                'tro_description' => $request->tro_description,
                'tro_date_modified' => Carbon::now(),
                'tro_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }

    public function admin_social()
    {
        $social = DB::table('journal_social')
            ->where('soc_active', 1)
            ->get();

        return view('admin.journal.social', compact('social'));
    }

    public function admin_social_update(Request $request, $soc_id)
    {
        // Validate the request
        $request->validate([
            'soc_description' => 'required|string',
        ]);

        // Update the data in the database
        DB::table('journal_social')
            ->where('soc_id', $soc_id)
            ->update([
                'soc_description' => $request->soc_description,
                'soc_date_modified' => Carbon::now(),
                'soc_modified_by' => session('usr_id'),
            ]);

        // Flash success message
        session()->flash('successMessage', 'Description updated successfully.');

        // Redirect back
        return redirect()->back();
    }
}
