<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ContentController extends Controller
{
    //
    public function index()
    {
        //join the news and news category
        // Join contents with content_types to get the type name
        $contents = DB::table('contents')
            ->join('content_types', 'contents.contr_type_id', '=', 'content_types.contr_id')
            ->select('contents.*', 'content_types.contr_type')
            ->get();
        $contentTypes = DB::table('content_types')
            ->get();
        return view('admin.modules.events.index', compact('contents', 'contentTypes'));
    }

    public function create_content(Request $request)
    {
        // Validate inputs
        $request->validate([
            'contentImg' => 'required|image|mimes:jpeg,png,jpg,gif',
            'contentTitle' => 'required|string',
            'contentDescription' => 'required|string',
            'contentCategory' => 'nullable',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {

            $attachment = $request->file('contentImg');
            $imageName = time() . '.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('images/contents'), $imageName);
            $loggedInUserId = session('usr_id');
            DB::table('contents')->insert([
                'contr_type_id' => $request->contentCategory,
                'contr_title' => $request->contentTitle,
                'contr_desc' => $request->contentDescription,
                'contr_img' => $imageName,
                'created_at' => Carbon::now(),
                'created_by' => $loggedInUserId,
                'status' => '0',
            ]);
            DB::commit();
            return redirect("/admin/dashboard")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/dashboard")
                ->with('error', 'Something went wrong');
        }
    }

    //create a guidance contents
    public function guidance_index()
    {
        $contents = DB::table('content_guidance')
            ->get();
        return view('admin.modules.contents.guidance-index', compact('contents'));
    }
    //create a health contents
    public function health_index()
    {
        $contents = DB::table('content_health')
            ->get();
        return view('admin.modules.contents.health-index', compact('contents'));
    }
    //create a facilities contents
    public function facilities_index()
    {
        $contents = DB::table('content_facilities')
            ->get();
        return view('admin.modules.contents.facilities-index', compact('contents'));
    }
    //create a library service contents
    public function library_index()
    {
        $contents = DB::table('content_library')
            ->get();
        return view('admin.modules.contents.library-index', compact('contents'));
    }
    //create a homepage service contents
    public function homepage_index()
    {
        return view('admin.modules.contents.homepage-index');
    }

    public function scholarship_index()
    {
        $contents = DB::table('scholarships')
            ->get();
        return view('admin.modules.contents.scholarship-index', compact('contents'));

    }

    public function create_scholarship_content(Request $request)
    {
        // Validate inputs
        $request->validate([
            'contentTitle' => 'required|string',
            'contentDescription' => 'required|string',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {


            DB::table('scholarships')->insert([
                'scho_title' => $request->contentTitle,
                'scho_desc' => $request->contentDescription,
                'scho_date_created' => Carbon::now(),
                'scho_created_by' => session('usr_id'),
                'scho_active' => '1',
            ]);
            DB::commit();
            return redirect("/admin/scholarship-service")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/scholarship-service")
                ->with('error', 'Something went wrong');
        }
    }

    public function create_guidance_content(Request $request)
    {
        // Validate inputs
        $request->validate([
            'contentTitle' => 'required|string',
            'contentDescription' => 'required|string',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {


            DB::table('content_guidance')->insert([
                'gui_uuid' => generateuuid(),
                'gui_title' => $request->contentTitle,
                'gui_desc' => $request->contentDescription,
                'gui_date_created' => Carbon::now(),
                'gui_created_by' => session('usr_id'),
                'gui_active' => '1',
            ]);
            DB::commit();
            return redirect("/admin/guidance-service")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/guidance-service")
                ->with('error', 'Something went wrong');
        }
    }

    public function create_library_content(Request $request)
    {
        // Validate inputs
        $request->validate([
            'contentTitle' => 'required|string',
            'contentDescription' => 'required|string',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {


            DB::table('content_library')->insert([
                'lib_uuid' => generateuuid(),
                'lib_title' => $request->contentTitle,
                'lib_desc' => $request->contentDescription,
                'lib_date_created' => Carbon::now(),
                'lib_created_by' => session('usr_id'),
                'lib_active' => '1',
            ]);
            DB::commit();
            return redirect("/admin/library-service")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/library-service")
                ->with('error', 'Something went wrong');
        }
    }

    public function create_health_content(Request $request)
    {
        // Validate inputs
        $request->validate([
            'contentTitle' => 'required|string',
            'contentDescription' => 'required|string',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {
            DB::table('content_health')->insert([
                'hlt_uuid' => generateuuid(),
                'hlt_title' => $request->contentTitle,
                'hlt_desc' => $request->contentDescription,
                'hlt_date_created' => Carbon::now(),
                'hlt_created_by' => session('usr_id'),
                'hlt_active' => '1',
            ]);
            DB::commit();
            return redirect("/admin/health-service")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/health-service")
                ->with('error', 'Something went wrong');
        }
    }

    public function create_facility_content(Request $request)
    {
        // Validate inputs
        $request->validate([
            'facName' => 'required|string',
            'facLoc' => 'required|string',
            'content_img' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {

            $attachment = $request->file('content_img');
            $imageName = time() . '.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('images/contents'), $imageName);
            DB::table('content_facilities')->insert([
                'fcl_uuid' => generateuuid(),
                'fcl_location' => $request->facName,
                'fcl_details' => $request->facLoc,
                'fcl_image' => $imageName,
                'fcl_date_created' => Carbon::now(),
                'fcl_created_by' => session('usr_id'),
                'fcl_active' => '1',
            ]);
            DB::commit();
            return redirect("/admin/facilities-service")
                ->with('success', 'Facility Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/facilities-service")
                ->with('error', 'Something went wrong');
        }
    }

    public function cmc_cial()
    {
        $contents = DB::table('content_cial')
            ->get();

        return view('admin.modules.contents.cmc-cial', compact('contents'));
    }

    public function create_cial_content(Request $request)
    {
        // Validate inputs
        $request->validate([
            'cial_title' => 'required|string',
            'cial_description' => 'required|string',
            'content_img' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {

            $attachment = $request->file('content_img');
            $imageName = time() . '.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('images/cial'), $imageName);
            DB::table('content_cial')->insert([
                'cial_uuid' => generateuuid(),
                'cial_title' => $request->cial_title,
                'cial_description' => $request->cial_description,
                'cial_image' => $imageName,
                'cial_date_created' => Carbon::now(),
                'cial_created_by' => session('usr_id'),
                'cial_active' => '1',
            ]);
            DB::commit();
            return redirect("/admin/international-affairs")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/international-affairs")
                ->with('error', 'Something went wrong');
        }
    }

    public function alumni_affairs()
    {
        $contents = DB::table('content_alumni')
            ->get();
        return view('admin.modules.contents.alumni-affairs', compact('contents'));
    }

    public function create_alumni_content(Request $request)
    {
        // dd($request->all());
        // Validate inputs
        $request->validate([
            'cnt_title' => 'required|string',
            'cnt_desc' => 'required|string',
            'content_img' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {

            $attachment = $request->file('content_img');
            $imageName = time() . '.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('images/alumni'), $imageName);
            DB::table('content_alumni')->insert([
                'alm_uuid' => generateuuid(),
                'alm_title' => $request->cnt_title,
                'alm_description' => $request->cnt_desc,
                'alm_image' => $imageName,
                'alm_date_created' => Carbon::now(),
                'alm_created_by' => session('usr_id'),
                'alm_active' => '1',
            ]);
            DB::commit();
            return redirect("/admin/alumni-affairs")
                ->with('success', 'Content created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("/admin/alumni-affairs")
                ->with('error', 'Something went wrong');
        }
    }
}
