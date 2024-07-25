<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        return view('admin.setting.index', compact('setting'));
    }
  
    public function edit()
    {
        $setting = Setting::all();
        return view('admin.setting.edit', compact('setting'));
    }
    
    public function update(Request $request,$setting)
    {     
        $setting = $request->validated();
        $setting = Setting::findOrFail($setting);
        $page->phone = $data['phone'];
        $page->email = $data['email'];
        $page->address = $data['address'];
        $page->facebook = $data['facebook'];
        $page->instagram = $data['instagram'];
        $page->youtube = $data['youtube'];
        $page->linkedin = $data['linkedin'];
       

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->logo = $filename;
        }
        if ($request->hasfile('fevicon')) {
            $file = $request->file('fevicon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $page->fevicon = $filename;
        }
        
        $page->update();   
 
        return redirect('admin/settings')->compact('setting')->with('success', 'Updated Successfully.');

    }
}
