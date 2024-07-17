<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;

class FrontendPageController extends Controller
{
    public function administration()
    {
        $page = Pages::all();       
        return view('frontend.solution.administration',compact('page'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
