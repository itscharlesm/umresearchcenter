<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Session;
use DB;

class AnnouncementController extends Controller
{
    public function save(Request $request)
    {
        $ann_image = $request->file('ann_image');

        if (isset($ann_image)) {
            $validator = Validator::make($request->all(), [
                'ann_image' => 'required|image|mimes:jpeg,jpg,png|max:3072',
            ]);

            if ($validator->fails()) {
                session()->flash('errorMessage', 'Invalid image attachment. Attached image is either more than 3MB or does not conform with allowed file types.');
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Generate unique file name
            $file_uuid = generateuuid();
            $fileName = $file_uuid . '.' . $request->ann_image->getClientOriginalExtension();

            // Handle the image upload and move it to the 'images/announcements' folder
            $ann_image->move(public_path('images/announcements'), $fileName);

            // Insert the announcement data into the database
            DB::table('announcements')
                ->insert([
                        'ann_uuid' => $file_uuid,
                        'ann_title' => $request->ann_title,
                        'ann_content' => $request->ann_content,
                        'ann_image' => $fileName,
                        'ann_date_created' => \Carbon\Carbon::now(),
                        'ann_created_by' => session('usr_id'),
                        'ann_active' => 1
                    ]);
        } else {
            DB::table('announcements')
                ->insert([
                        'ann_uuid' => generateuuid(),
                        'ann_title' => $request->ann_title,
                        'ann_content' => $request->ann_content,
                        'ann_image' => null, // Assuming no image is uploaded
                        'ann_date_created' => \Carbon\Carbon::now(),
                        'ann_created_by' => session('usr_id'),
                        'ann_active' => 1
                    ]);
        }

        session()->flash('successMessage', 'Announcement has been successfully posted.');
        return redirect()->action([AdminController::class, 'home']);
    }

    public function delete($ann_uuid)
    {
        DB::table('announcements')
            ->where('ann_uuid', '=', $ann_uuid)
            ->update([
                    'ann_active' => '0'
                ]);

        session()->flash('successMessage', 'Announcement has been successfully deleted.');
        return redirect()->action([AdminController::class, 'home']);
    }
}