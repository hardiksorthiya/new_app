<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Pages;
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
            return view('frontend.solution.administration', compact('sol_page'));
        }
        else
        {
            return redirect('/');
        }
        
    }
}
