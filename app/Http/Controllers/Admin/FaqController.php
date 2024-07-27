<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Faq;
use App\Models\Admin\SolutionPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $page = Faq::get()->pluck('solution_page_id')->toArray();
        $solutionpages = SolutionPages::whereIn('id', $page)->get();
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
    public function update(Request $request, $id)
    {
        if ($id) {
            // $faq = Faq::where('solution_page_id', $id)->first();
            // $faq->solution_page_id = $id;
            // $faq->question = $request->question;
            // $faq->answer = $request->answer;

            // $faq->save();

            $question = $request->question;
            $answer = $request->answer;
            $array = [];

            Faq::where('solution_page_id', $id)->delete();
            
            for ($k = 0; $k < count($question); $k++) {
                $data = array(
                    'solution_page_id' => $id,
                    'question' => $question[$k],
                    'answer' => $answer[$k],
                );

                $array[] = $data;
            }

            Faq::insert($array);

            return redirect('admin/faq')->with('message', 'Faq Updated Successfully.');
        } else {
            return redirect('admin/faq')->with('error', 'Somthing Error.');
        }

    }
    public function delete($id)
    {
        $page = Faq::where('id',$id)->first();
        if ($page) {
            $page->delete();
            return redirect('admin/faq')->with('message', 'Faq Deleted Successfully.');
        } else {
            return redirect('admin/faq')->with('message', 'No Faq ID Found.');
        }

    }
}
