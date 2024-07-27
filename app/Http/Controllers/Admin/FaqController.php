<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Faq;
use App\Models\Admin\SolutionPages;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // $page = Faq::get()->pluck('solution_page_id')->toArray();
        $solutionpages = SolutionPages::get();
        return view('admin.pages.faq.index', compact('solutionpages'));
    }
    public function create()
    {
        $solutionpages = SolutionPages::get();
        return view('admin.pages.faq.create', compact('solutionpages'));
    }
    public function store(Request $request)
    {
        if ($request) {
            $faq = new Faq;
            $faq->solution_page_id = $request->solution_id;
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();

            return redirect('admin/faq')->with('message', 'faq Added Successfully.');
        } else {
            return redirect('admin/faq')->with('error', 'Somthing Error.');
        }

    } 
    public function edit($name, $id)
    {
        $solution_page_name = $name;
        $solution_id = $id;
        $page = Faq::where('solution_page_id', $id)->get()->toArray();
        // dd($page);
        return view('admin.pages.faq.edit', compact('page', 'solution_page_name', 'solution_id'));
    }
    public function update( $id)
    {
        if ($id) {
            $page = IconBox::findOrFail($page);
            $page->box_text = $data['box_text'];
            $page->box_description = $data['box_description'];
            if ($request->hasfile('box_image')) {
                $file = $request->file('box_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'uploads/icon/';
                $file->move($path, $filename);
                $page->box_image = $filename;
            }

            $page->update();

            return redirect('admin/iconbox')->with('message', 'iconbox Added Successfully.');
        } else {
            return redirect('admin/iconbox')->with('error', 'Somthing Error.');
        }

    }
    public function delete($page_id)
    {
        $page = IconBox::find($page_id);
        if ($page) {
            $page->delete();
            return redirect('admin/iconbox')->with('message', 'Page Deleted Successfully.');
        } else {
            return redirect('admin/iconbox')->with('message', 'No Page ID Found.');
        }

    }
}
