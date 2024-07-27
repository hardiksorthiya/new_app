<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(BannerRequest $request)
    {
        $data = $request->validated();
        $banner = new Banner;
        $banner->title = $data['title'];
        $banner->description = $data['description'];
        $banner->small_text = $data['small_text'];
        if ($request->hasfile('bg_image')) {
            $file = $request->file('bg_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $path = 'uploads/images/banner/';
            $file->move($path, $filename);
            $banner->bg_image = $filename;
        }
        if ($request->hasfile('main_image')) {
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/images/banner/';
            $file->move($path, $filename);
            $banner->main_image = $filename;
        }
        $banner->save();
        return redirect('admin/banner')->with('message', 'Banner Added Successfully.');
    }
    public function edit($banner_id)
    {
        $banner = Banner::find($banner_id);

        return view('admin.banner.edit', compact('banner'));
    }
    public function update(BannerRequest $request, $banner_id)
    {
        $data = $request->validated();
        $banner= Banner::findOrFail($banner_id);
        $banner->title = $data['title'];
        $banner->description = $data['description'];
        $banner->small_text = $data['small_text'];
        if ($request->hasfile('bg_image')) {
            $file = $request->file('bg_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-bg.'. $extension;
            $path = 'uploads/images/banner/';
            $file->move($path, $filename);
            $banner->bg_image = $filename;
        }
        if ($request->hasfile('main_image')) {
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/images/banner/';
            $file->move($path, $filename);
            $banner->main_image = $filename;
        }
       
        $banner->update();
        return redirect('admin/banner')->with('message', 'Banner Updated Successfully.');
    }

}
