<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class AcademicProgramController extends Controller
{
    //


    // add programs
    public function colleges()
    {
        $colleges = DB::table('academic_colleges')
            ->get();
        return view('admin.modules.academic.colleges', compact('colleges'));
    }
    public function create_colleges(Request $request)
    {
        // Validate inputs
        $request->validate([
            'content_img' => 'required|image|mimes:jpeg,png,jpg,gif',
            'college_name' => 'required',
            'college_description' => 'required',
            'college_acrnonym' => 'required',
            'college_objective' => 'required',
            'stud_objective' => 'required',
            'career_path' => 'required',
        ]);

        dd($request->all());
        // // Start a transaction
        // DB::beginTransaction();
        // try {

        //     $attachment = $request->file('content_img');
        //     $imageName = time() . '.' . $attachment->getClientOriginalExtension();
        //     $attachment->move(public_path('images/college-programs'), $imageName);
        //     $loggedInUserId = session('usr_id');
        //     DB::table('academic_colleges')->insert([
        //         'college_name' => $request->college_name,
        //         'college_description' => $request->college_description,
        //         'college_acrnonym' => $request->college_acrnonym,
        //         'college_objective' => $request->college_objective,
        //         'stud_objective' => $request->stud_objective,
        //         'career_path' => $request->stud_objective,
        //         'college_promo_image' => $imageName,
        //         'created_by' => $loggedInUserId,
        //         'created_at' => Carbon::now(),
        //         'status' => '0',
        //     ]);
        //     DB::commit();
        //     return redirect("/admin/admin/academic-programs/colleges")
        //         ->with('success', 'Content created successfully.');
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     DB::rollBack();
        //     dd($th);
        //     return redirect("/admin/admin/academic-programs/colleges")
        //         ->with('error', 'Something went wrong');
        // }
    }

}
