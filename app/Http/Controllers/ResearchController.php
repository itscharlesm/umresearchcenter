<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ResearchController extends Controller
{
    //
    public function about()
    {
        return view('services.research.about', );
    }
    public function research_publication()
    {
        return view('services.research.research-publication-updates', );
    }

    public function compendium_abstract()
    {
        return view('services.research.compedium-abstract', );
    }

    public function international_journal()
    {
        return view('services.research.international-journal', );
    }


    public function faculty_research()
    {
        return view('services.research.faculty-research', );
    }
    public function student_research()
    {
        return view('services.research.student-research', );
    }
    public function criminal_justice()
    {
        return view('services.research.journal-criminal-studies', );
    }
    public function business_management()
    {
        return view('services.research.journal-business-management', );
    }

    public function index()
    {
        $publishers = DB::table('publishers')
            ->where('pub_active', '=', '1')
            ->get();

        $researches = DB::table('researches')
            ->leftJoin('publishers', 'researches.pub_id', '=', 'publishers.pub_id')
            ->leftJoin('research_authors', 'researches.res_id', '=', 'research_authors.res_id')
            ->leftJoin('authors', 'research_authors.aut_id', '=', 'authors.aut_id')
            ->leftJoin('research_tags', 'researches.res_id', '=', 'research_tags.res_id')
            ->leftJoin('tags', 'research_tags.tag_id', '=', 'tags.tag_id')
            ->select(
                'researches.*',
                'publishers.pub_name as publisher_name',
                DB::raw("GROUP_CONCAT(DISTINCT CONCAT(authors.aut_first_name, ' ', authors.aut_last_name) SEPARATOR ', ') as authors"),
                DB::raw("GROUP_CONCAT(DISTINCT tags.tag_name SEPARATOR ', ') as tags")
            )
            ->groupBy('researches.res_id')
            ->get();

        return view('admin.modules.research.index', compact('publishers', 'researches'));

    }

    public function publishers()
    {
        $publishers = DB::table('publishers')
            ->get();

        return view('admin.modules.research.publisher', compact('publishers'));

    }

    public function create_publisher(Request $request)
    {
        // Validate inputs
        $request->validate([
            'pubImg' => 'required|image|mimes:jpeg,png,jpg,webp',
            'pubName' => 'required|string',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {
            $attachment = $request->file('pubImg');
            $imageName = time() . '.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('images/research'), $imageName);
            DB::table('publishers')->insert([
                'pub_uuid' => generateuuid(),
                'pub_name' => $request->pubName,
                'pub_image' => $imageName,
                'pub_active' => '0',
            ]);
            DB::commit();
            return redirect("admin/publishers")
                ->with('success', 'Publishers created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect("admin/publishers")
                ->with('error', 'Something went wrong');
        }
    }

    public function change_status(Request $request, $id, $status)
    {
        try {
            $publisher = DB::table('publishers')->where('pub_id', '=', $id)->first();

            if ($publisher) {
                DB::table('publishers')->where('pub_id', $id)->update([
                    'pub_active' => $status,
                ]);
                return redirect("/admin/publishers")->with('success', 'Publisher status updated successfully.');
            }

            return redirect("/admin/publishers")->with('error', 'Publisher not found.');

        } catch (\Throwable $th) {
            dd($th);
            return redirect("/admin/publishers")->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pubImg' => 'nullable|image|mimes:jpeg,png,jpg,webp', // Make the image optional
            'pubName' => 'required|string',
        ]);

        // Start a transaction
        DB::beginTransaction();
        try {
            $publisher = DB::table('publishers')->where('pub_id', '=', $id)->first();

            if (!$publisher) {
                return redirect("/admin/dashboard")->with('error', 'Publisher not found.');
            }

            // Prepare data for update
            $data = ['pub_name' => $request->pubName];

            if ($request->hasFile('pubImg')) {
                // Handle image upload
                $attachment = $request->file('pubImg');
                $imageName = time() . '.' . $attachment->getClientOriginalExtension();
                $attachment->move(public_path('images/research'), $imageName);

                // Add the image name to the update data
                $data['pub_image'] = $imageName;

                // Optionally, delete the old image file
                if ($publisher->pub_image && file_exists(public_path('images/research/' . $publisher->pub_image))) {
                    unlink(public_path('images/research/' . $publisher->pub_image));
                }
            }

            // Update the database
            DB::table('publishers')->where('pub_id', $id)->update($data);
            DB::commit();

            return redirect("/admin/publishers")->with('success', 'Publisher updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect("/admin/publishers")->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    public function publish_research(Request $request)
    {
        $request->validate([
            'res_image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'res_title' => 'required|string',
            'res_abstract' => 'required|string',
            'res_date_publish' => 'required|date',
            'res_file_attachment' => 'required|file|mimes:pdf',
            'authors' => 'required|array',
            'tags' => 'nullable|array',
            'tags.*' => 'nullable|string',
            'pub_id' => 'nullable|integer',
        ]);
        DB::beginTransaction();
        try {
            $imageName = null;
            if ($request->hasFile('res_image')) {
                $imageName = time() . '.' . $request->file('res_image')->getClientOriginalExtension();
                $request->file('res_image')->move(public_path('images/research'), $imageName);
            }
            $attachmentName = time() . '_manuscript.' . $request->file('res_file_attachment')->getClientOriginalExtension();
            $request->file('res_file_attachment')->move(public_path('files/research'), $attachmentName);
            $loggedInUserId = session('usr_id');
            $research = DB::table('researches')->insertGetId([
                'res_uuid' => generateuuid(),
                'res_title' => $request->res_title,
                'res_abstract' => $request->res_abstract,
                'res_thumbnail' => $imageName,
                'res_file_attachment' => $attachmentName,
                'res_published_date' => $request->res_date_publish,
                'res_institution' => null,
                'pub_id' => $request->pub_id,
                'res_created_by' => $loggedInUserId,
                'res_active' => 0,
                'res_date_created' => Carbon::now(),
            ]);
            foreach ($request->authors as $author) {
                $authorId = DB::table('authors')->insertGetId([
                    'aut_uuid' => generateuuid(),
                    'aut_first_name' => $author['first_name'] ?? null,
                    'aut_middle_name' => $author['middle_name'] ?? null,
                    'aut_last_name' => $author['last_name'] ?? null,
                    'aut_created_by' => $loggedInUserId,
                    'aut_active' => 1,
                    'aut_date_created' => now(),
                ]);
                DB::table('research_authors')->insert([
                    'res_id' => $research,
                    'aut_id' => $authorId,
                    'rau_active' => 1,
                ]);
            }
            foreach ($request->tags as $tag) {
                $tagID = DB::table('tags')->insertGetId([
                    'tag_uuid' => generateuuid(),
                    'tag_name' => $tag,
                    'tag_active' => 1,

                ]);

                // Link author to research
                DB::table('research_tags')->insert([
                    'res_id' => $research,
                    'tag_id' => $tagID,
                    'rtg_active' => 1,
                ]);
            }
            DB::commit();
            return redirect("admin/researches")->with('success', 'Research published successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect("admin/researches")->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }
}
