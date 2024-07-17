<?php

namespace App\Http\Controllers\Admin;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\Admin\BlogCategory;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function dashboard()
    {
        $blog = post::all();
        return view('admin.blog.dashboard');
    }
    public function create()
    {
       $category = BlogCategory::where('status','0')->get();
        return view('admin.blog.create',compact('category')) ;
    }
}
