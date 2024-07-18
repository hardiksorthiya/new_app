<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Admin\IconBox;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\IconBoxRequest;

class IconBoxController extends Controller
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function index()
    {
       
        $page = IconBox::paginate(10);
        return view('admin.pages.iconbox.index',compact('page'));
    }
    public function create()
    {
        return view('admin.pages.iconbox.create');
    }
    public function store(IconBoxRequest $request)
    {
        if($request){
            $data = $request->validated();
            $page = new IconBox;
            $page->box_text = $data['box_text'];
            $page->box_description	 = $data['box_description'];
            if($request->hasfile('box_image')){
                $file = $request->file('box_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $path = 'uploads/icon/';
                $file->move($path, $filename);
                $page->box_image = $filename;
            }
            $page->save(); 
            
            return redirect('admin/iconbox')->with('message','iconbox Added Successfully.');
        }
        else{
            return redirect('admin/iconbox')->with('error','Somthing Error.');
        }
        
    }
    public function edit($page_id)
    {
        $page = IconBox::find($page_id);
       
        return view('admin.pages.iconbox.edit', compact('page'));
    }
    public function update(IconBoxRequest $request, $page)
    {
        if($page){
            $data = $request->validated();
            $page = IconBox::findOrFail($page);
            $page->box_text = $data['box_text'];
            $page->box_description	 = $data['box_description'];
            if($request->hasfile('box_image')){
                $file = $request->file('box_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $path = 'uploads/icon/';
                $file->move($path, $filename);
                $page->box_image = $filename;
            }
            
            $page->update(); 
            
            return redirect('admin/iconbox')->with('message','iconbox Added Successfully.');
        }else{
            return redirect('admin/iconbox')->with('error','Somthing Error.');
        }
        
    }
    public function delete($page_id)
    {
        $page = IconBox::find($page_id);
        if($page){
            $page->delete();
            return redirect('admin/iconbox')->with('message','Page Deleted Successfully.');
        }
        else{
            return redirect('admin/iconbox')->with('message','No Page ID Found.');
        }
        
    }
}
