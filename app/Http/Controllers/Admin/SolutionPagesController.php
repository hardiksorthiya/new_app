<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SolutionPageRequest;
use App\Models\Admin\IconBox;
use App\Models\Admin\SolutionPages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class SolutionPagesController extends Controller
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function index()
    {

        $page = SolutionPages::orderBy('id', 'DESC')->paginate(10);
        $icon_box = IconBox::all();
        return view('admin.pages.solution.index', compact('page', 'icon_box'));
    }
    public function create()
    {
        $icon_box = IconBox::all();
        return view('admin.pages.solution.create', compact('icon_box'));
    }
    public function store(SolutionPageRequest $request)
    {
        // dd($request->all());
        // die;
        $data = $request->validated();
        $page = new SolutionPages;
        $page->name = $data['name'];
        $page->slug = Str::slug($data['slug']);
        $page->titletext = $data['titletext'];
        $page->description = $data['description'];
        $page->descriptiontwo = $data['descriptiontwo'];
        $page->titletextsecond = $data['titletextsecond'];
        $page->descriptionsecond = $data['descriptionsecond'];
        $page->meta_title = $data['meta_title'];
        $page->meta_description = $data['meta_description'];
        $page->meta_keyword = $data['meta_keyword'];

        //    $page->iconBox()->create([
        //     'icon_box_id'=>$page->id,
        //    ]);

        if ($request->hasfile('breadcumimage')) {
            $file = $request->file('breadcumimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->breadcumimage = $filename;
        }
        if ($request->hasfile('imageone')) {
            $file = $request->file('imageone');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imageone = $filename;
        }
        if ($request->hasfile('imagesecond')) {
            $file = $request->file('imagesecond');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imagesecond = $filename;
        }

        $page->save();

        $solutionPage = $page->id;
        $district_id = $request->iconbox_id;
        if (isset($solutionPage)) {
            if (count($district_id) > 0) {

                foreach ($district_id as $data) {
                    DB::table('icon_box_solution_page')->insert([
                        'icon_box_id' => $data,
                        'solution_page_id' => $solutionPage,
                        // 'created_at' => now(),
                        // 'updated_at' => now(),
                    ]);
                }
            }
        }

        return redirect()->route('solutionback')->with('message', 'Page Added Successfully.');
    }
    public function edit($page_id)
    {
        $page = SolutionPages::find($page_id);
        $icon_box = IconBox::all();
        $slected_iconbox = DB::table('icon_box_solution_page')->where('solution_page_id', $page_id)->get()->pluck('icon_box_id')->toArray();
        // dd($slected_iconbox);
        return view('admin.pages.solution.edit', compact('page', 'icon_box', 'slected_iconbox'));
    }
    public function update(SolutionPageRequest $request, $page)
    {
        $data = $request->validated();
        $page = SolutionPages::findOrFail($page);
        $page->name = $data['name'];
        $page->slug = Str::slug($data['slug']);
        $page->titletext = $data['titletext'];
        $page->description = $data['description'];
        $page->descriptiontwo = $data['descriptiontwo'];
        $page->titletextsecond = $data['titletextsecond'];
        $page->descriptionsecond = $data['descriptionsecond'];
        $page->meta_title = $data['meta_title'];
        $page->meta_description = $data['meta_description'];
        $page->meta_keyword = $data['meta_keyword'];

        if ($request->hasfile('breadcumimage')) {
            $file = $request->file('breadcumimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->breadcumimage = $filename;
        }
        if ($request->hasfile('imageone')) {
            $file = $request->file('imageone');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imageone = $filename;
        }
        if ($request->hasfile('imagesecond')) {
            $file = $request->file('imagesecond');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imagesecond = $filename;
        }
        $page->update();

        $solutionPage = $page->id;
        $district_id = $request->iconbox_id;
        if (isset($solutionPage)) {
            DB::table('icon_box_solution_page')->where('solution_page_id', $solutionPage)->delete();
            if ($district_id&&count($district_id) > 0) {
                foreach ($district_id as $data) {
                    DB::table('icon_box_solution_page')->insert([
                        'icon_box_id' => $data,
                        'solution_page_id' => $solutionPage,
                        // 'created_at' => now(),
                        // 'updated_at' => now(),
                    ]);
                }
            }
        }
        return redirect('admin/solution')->with('message', 'Page Updated Successfully.');
    }

    public function delete($page_id)
    {
        $page = SolutionPages::find($page_id);
        if ($page) {
            $page->delete();
            return redirect('admin/solution')->with('message', 'Page Deleted Successfully.');
        } else {
            return redirect('admin/solution')->with('message', 'No Page ID Found.');
        }

    }

}
