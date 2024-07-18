<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Admin\IconBox;
use App\Models\Admin\SolutionPages;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SolutionPageRequest;

class SolutionPagesController extends Controller
{ 

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function index()
    {
       
        $page = SolutionPages::orderBy('id','DESC')->paginate(10);
        $icon_box = IconBox::all();
        return view('admin.pages.solution.index',compact('page','icon_box'));
    }
    public function create()
    {
        $icon_box = IconBox::all();
        return view('admin.pages.solution.create',compact('icon_box'));
    }
    public function store(SolutionPageRequest $request)
    {
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

       $page->iconBox()->create([
        'icon_box_id'=>$page->id,
       ]);
      
        
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
        
        return redirect('admin/solution')->with('message','Page Added Successfully.')->compact('icon_box');
    }
    public function edit($page_id)
    {
        $page = SolutionPages::find($page_id);
        $icon_box = IconBox::all();
        return view('admin.pages.solution.edit', compact('page','icon_box'));
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
        return redirect('admin/solution')->with('message','Page Updated Successfully.');
    }
   
    public function delete($page_id)
    {
        $page = SolutionPages::find($page_id);
        if($page){
            $page->delete();
            return redirect('admin/solution')->with('message','Page Deleted Successfully.');
        }
        else{
            return redirect('admin/solution')->with('message','No Page ID Found.');
        }
        
    }


}
