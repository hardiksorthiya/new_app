<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Pages;
use App\Models\Admin\Faq;

use Illuminate\Http\Request;
use App\Models\Admin\IconBox;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\SolutionPages;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;

class FrontendPageController extends Controller
{

    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function solution_slug(string $solution_slug)
    {   
        $sol_page = SolutionPages::where('slug',$solution_slug)->where('status','0')->first();
        
        if($sol_page)
        {
            $solution_pages = DB::table('icon_box_solution_page')->where('solution_page_id',$sol_page->id)->get()->pluck('icon_box_id')->toarray();
            $iconbox = IconBox::whereIn('id', $solution_pages)->get();
            $faq = Faq::where('solution_page_id', $sol_page->id)->get();

            $iconboxData = $iconbox->map(function ($item) {
                return $item->only(['id', 'box_image', 'box_text', 'box_description']);
            })->toArray();

            // dd($iconboxData);
            // print_r($iconbox[0]);
            // die;
            return view('frontend.solution.administration', compact('sol_page', 'iconboxData', 'faq'));
        }
        else
        {
            return redirect('/');
        }
        
    }
}
