<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;

class PagesController extends Controller
{
    public function index()
    {
        $page = Pages::all();
        return view('admin.pages.index' , compact('page'));
    }
    public function create()
    {
        return view('admin.pages.create');
    }
    public function store(PageRequest $request)
    {
        $data = $request->validated();
        $page = new Pages;
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
        $page->status = $request->status == true ? '1':'0';

        if($request->hasfile('breadcumimage')){
            $file = $request->file('breadcumimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->breadcumimage = $filename;
        }
        if($request->hasfile('imageone')){
            $file = $request->file('imageone');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imageone = $filename;
        }
        if($request->hasfile('imagesecond')){
            $file = $request->file('imagesecond');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imagesecond = $filename;
        }
        $page->save();   
        return redirect('admin/pages')->with('message','Page Added Successfully.');
    }
    public function edit($page_id)
    {
        $page = Pages::find($page_id);
        return view('admin.pages.edit' , compact('page'));
    }
    public function update(PageRequest $request,$page_id)
    {
        $data = $request->validated();
        $page = Pages::find($page_id);
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

        if($request->hasfile('breadcumimage')){
            $file = $request->file('breadcumimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->breadcumimage = $filename;
        }
        if($request->hasfile('imageone')){
            $file = $request->file('imageone');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imageone = $filename;
        }
        if($request->hasfile('imagesecond')){
            $file = $request->file('imagesecond');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->imagesecond = $filename;
        }
        $page->update();   
        return redirect('admin/pages')->with('message','Page Added Successfully.');
    }
}
