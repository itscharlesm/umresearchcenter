<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class StudentOrganizationController extends Controller
{
    //

    public function osa()
    {
        $contents = DB::table('student_affairs')
            ->get();
        return view('services.student-organization.office-student-affairs', compact('contents'));
    }

    public function index()
    {
        $contents = DB::table('student_affairs')
            ->get();

        return view('admin.modules.student-affairs.index', compact('contents'));
    }

    public function student_org()
    {
        // Fetch active departments
        $departments = DB::table('academic_departments')
            ->where('status', '=', '1')
            ->select('dept_id', 'dept_name')
            ->get();

        // Fetch non-departmental organizations
        $nonDepartmentalOrgs = DB::table('non_departmental_organizations')
            ->select('non_dept_org_id', 'non_dept_org_name')
            ->get();

        $contents = DB::table('student_affairs_organizations')
            ->get();

        return view('admin.modules.student-affairs.student-org', compact('departments', 'nonDepartmentalOrgs', 'contents'));
    }

    public function create_osas_content(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'cnt_atch' => 'nullable|',
            'content_title' => 'required|string',
            'content' => 'required|string',
        ]);
        DB::beginTransaction();
        try {

            $attachment = null;
            if ($request->hasFile('cnt_atch')) {
                $attachment = time() . '.' . $request->file('cnt_atch')->getClientOriginalExtension();
                $request->file('cnt_atch')->move(public_path('images/osa'), $attachment);
            }

            DB::table('student_affairs')->insert([
                'std_title' => $request->content_title,
                'std_content' => $request->content,
                'std_attachment' => $attachment,
                'std_created_by' => session('usr_id'),
                'std_created_at' => Carbon::now(),
                'std_active' => '0',
            ]);
            DB::commit();
            return redirect("admin/student-affairs")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("admin/student-affairs")
                ->with('error', 'Something went wrong');
        }
    }

    public function create_org_content(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'content_img' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'org_name' => 'required|string',
            'org_desc' => 'required|string',
            'established_date' => 'required',
            'dept_id' => 'nullable',
            'non_dept_id' => 'nullable',

        ]);
        DB::beginTransaction();
        try {

            $attachment = $request->file('content_img');
            $imageName = time() . '.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('images/student-org'), $imageName);

            DB::table('student_affairs_organizations')->insert([
                'dept_id' => $request->dept_id,
                'non_dept_id' => $request->non_dept_id,
                'std_org_name' => $request->org_name,
                'std_org_description' => $request->org_desc,
                'std_org_image' => $imageName,
                'std_org_establish' => $request->established_date,
                'std_created_by' => session('usr_id'),
                'std_created_at' => Carbon::now(),
                'std_active' => '1',
            ]);
            DB::commit();
            return redirect("admin/student-affairs/student-org")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("admin/student-affairs/student-org")
                ->with('error', 'Something went wrong');
        }
    }
}
