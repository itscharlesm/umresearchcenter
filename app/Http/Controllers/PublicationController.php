<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;

class PublicationController extends Controller
{
    public function news()
    {
        $news_descriptions = DB::table('publication_news')
            ->where('news_active', 1)
            ->orderBy('news_date_created', 'DESC')
            ->paginate(20);

        return view('main.publication.news', compact('news_descriptions'));
    }

    public function admin_news()
    {
        $news_descriptions = DB::table('publication_news')
            ->where('news_active', 1)
            ->orderBy('news_date_created', 'DESC')
            ->get();

        return view('admin.publication.news', compact('news_descriptions'));
    }

    public function admin_news_create(Request $request)
    {
        $news_image = $request->file('news_image');

        if (isset($news_image)) {
            $validator = Validator::make($request->all(), [
                'news_image' => 'required|image|mimes:jpeg,jpg,png|max:3072',
            ]);

            if ($validator->fails()) {
                session()->flash('errorMessage', 'Invalid image attachment. Attached image is either more than 3MB or does not conform with allowed file types.');
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Generate unique file name
            $file_uuid = generateuuid();
            $fileName = $file_uuid . '.' . $request->news_image->getClientOriginalExtension();

            // Handle the image upload and move it to the 'images/news' folder
            $news_image->move(public_path('images/news'), $fileName);

            // Insert the announcement data into the database
            DB::table('publication_news')
                ->insert([
                    'news_uuid' => $file_uuid,
                    'news_title' => $request->news_title,
                    'news_content' => $request->news_content,
                    'news_image' => $fileName,
                    'news_date_created' => Carbon::now(),
                    'news_created_by' => session('usr_id'),
                    'news_active' => 1
                ]);
        } else {
            DB::table('publication_news')
                ->insert([
                    'news_uuid' => generateuuid(),
                    'news_title' => $request->news_title,
                    'news_content' => $request->news_content,
                    'news_image' => null, // Assuming no image is uploaded
                    'news_date_created' => Carbon::now(),
                    'news_created_by' => session('usr_id'),
                    'news_active' => 1
                ]);
        }

        session()->flash('successMessage', 'News has been successfully posted.');
        return redirect()->back();
    }

    public function admin_news_update(Request $request, $news_id)
    {
        $news = DB::table('publication_news')->where('news_id', $news_id)->first();

        if (!$news) {
            session()->flash('errorMessage', 'News not found.');
            return redirect()->back();
        }

        $news_image = $request->file('news_image');
        $fileName = $news->news_image; // Keep the existing image by default

        if (isset($news_image)) {
            $validator = Validator::make($request->all(), [
                'news_image' => 'image|mimes:jpeg,jpg,png|max:3072',
            ]);

            if ($validator->fails()) {
                session()->flash('errorMessage', 'Invalid image attachment. Attached image is either more than 3MB or does not conform with allowed file types.');
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Generate unique file name
            $file_uuid = generateuuid();
            $fileName = $file_uuid . '.' . $news_image->getClientOriginalExtension();

            // Move new image to the 'images/news' folder
            $news_image->move(public_path('images/news'), $fileName);
        }

        // Update news entry
        DB::table('publication_news')
            ->where('news_id', $news_id)
            ->update([
                'news_title' => $request->news_title,
                'news_content' => $request->news_content,
                'news_image' => $fileName, // Only update if a new image is uploaded
                'news_date_modified' => Carbon::now(),
                'news_modified_by' => session('usr_id')
            ]);

        session()->flash('successMessage', 'News has been successfully updated.');
        return redirect()->back();
    }

    public function admin_news_delete($news_id)
    {
        DB::table('publication_news')
            ->where('news_id', '=', $news_id)
            ->update([
                'news_active' => '0',
                'news_date_modified' => Carbon::now(),
                'news_modified_by' => session('usr_id')
            ]);

        session()->flash('successMessage', 'News has been successfully deleted.');
        return redirect()->back();
    }
}