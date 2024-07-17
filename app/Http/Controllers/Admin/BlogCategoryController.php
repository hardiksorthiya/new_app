<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\BlogCategoryFormRequest;

class BlogCategoryController extends Controller
{
    
    public function categoryindex()
    {
        return view('admin.blog.category.index');
    }
    public function categorycreate()
    {
        return view('admin.blog.category.index');
    }
    public function categorystore(BlogCategoryFormRequest $request)
    {
        $data = $request->validated();
        $blogcategory = new BlogCategory;
        $blogcategory->name = $data['name'];
        $blogcategory->slug = $data['slug'];
        $blogcategory->description = $data['description'];
        $blogcategory->meta_title = $data['meta_title'];
        $blogcategory->meta_description = $data['meta_description'];
        $blogcategory->meta_keyword = $data['meta_keyword'];
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/blog/category';
            $file->move($path, $filename);
            $blogcategory->image = $filename;
    }
    $blogcategory->created_by = Auth::user()->id;
    $blogcategory->save();

    return redirect('admin/category')->with('message','Category Added Successfully.');
    }
    public function categoryview()
    {
        $blog = BlogCategory::all();
        return view('admin.blog.category.index', compact('blog'));
    }
    public function categoryedit($category_id)
    {
        $blogcategory = BlogCategory::find($category_id);
    return view('admin.blog.category.edit' , compact('blogcategory'));
    }
    public function categoryupdate(BlogCategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();
        $blogcategory = BlogCategory::find($category_id);
        $blogcategory->name = $data['name'];
        $blogcategory->slug = $data['slug'];
        $blogcategory->description = $data['description'];
        $blogcategory->meta_title = $data['meta_title'];
        $blogcategory->meta_description = $data['meta_description'];
        $blogcategory->meta_keyword = $data['meta_keyword'];
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'assets/images/admin/blog/category';
            $file->move($path, $filename);
            $blogcategory->image = $filename;
    }
    $blogcategory->created_by = Auth::user()->id;
    $blogcategory->update();

    return redirect('admin/category')->with('message','Category Updated Successfully.');
    }
    public function categorydelete($category_id)
    {
        
        $blogcategory = BlogCategory::find($category_id);
        if($blogcategory)
        {
            $blogcategory->delete();
            return redirect('admin/category')->with('message','Category Deleted.');
        }
        else{
            return redirect('admin/category')->with('message','No Category Deleted.');

        }
        
        
    }
    

}
