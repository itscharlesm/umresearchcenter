<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class AdmissionController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $filterType = $request->input('filterType');
        $ractypes = DB::table('admission_type')
            ->get();
        $content = DB::table('admission')
            ->join('admission_type', 'admission.rac_type_id', '=', 'admission_type.rac_type_id')
            ->join('users', 'admission.rac_created_by', '=', 'users.usr_id')
            ->select(
                'admission.*',
                'admission_type.rac_type_name',
                'admission_type.rac_type_description',
                'users.usr_first_name',
                'users.usr_last_name',
                'users.usr_email'
            )
            ->get();

        // Apply search filter if a search term is provided
        if ($search) {
            $content->where(function ($query) use ($search) {
                $query->where('admission.rac_title', 'LIKE', "%{$search}%")
                    ->orWhere('admission.rac_content', 'LIKE', "%{$search}%");
            });
        }

        // Apply type filter if a filter type is selected
        if ($filterType) {
            $content->where('admission.rac_type_id', $filterType);
        }

        // Execute the query
        $contents = $content;

        return view('admin.modules.admission.index', compact('ractypes', 'contents'));
    }

    public function create(Request $request)
    {

        $request->validate([
            'rac_title' => 'required|string',
            'rac_content' => 'required|string',
            'rac_type_id' => 'nullable|integer',
        ]);
        DB::beginTransaction();
        try {
            DB::table('admission')->insert([
                'rac_type_id' => $request->rac_type_id,
                'rac_title' => $request->rac_title,
                'rac_content' => $request->rac_content,
                'rac_created_by' => session('usr_id'),
                'rac_created_at' => Carbon::now(),
                'rac_status' => '0',
            ]);
            DB::commit();
            return redirect("admin/admissions")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("admin/admissions")
                ->with('error', 'Something went wrong');
        }
    }

    public function admission_index()
    {
        $contents = DB::table('admission')
            ->where('rac_type_id', '=', '1')
            ->get();
        return view('services.admission.admission-index', compact('contents'));
    }

    public function admission_guidelines()
    {
        $contents = DB::table('admission')
            ->where('rac_type_id', '=', '2')
            ->get();
        return view('services.admission.admission-guidelines', compact('contents'));
    }


    public function admission_grading()
    {
        $contents = DB::table('admission')
            ->where('rac_type_id', '=', '3')
            ->get();
        return view('services.admission.admission-grading', compact('contents'));
    }

    public function admission_online_enrollment()
    {
        $contents = DB::table('admission')
            ->where('rac_type_id', '=', '4')
            ->get();
        return view('services.admission.admission-online-enrollment', compact('contents'));
    }
}
