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
    
    public function update(SettingRequest $request)
    {     
        $data = $request->validated();
        $setting = Setting::all();
        $setting->phone = $data['phone'];
        $setting->email = $data['email'];
        $setting->address = $data['address'];
        $setting->facebook = $data['facebook'];
        $setting->instagram = $data['instagram'];
        $setting->youtube = $data['youtube'];
        $setting->linkedin = $data['linkedin'];
       

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $setting->logo = $filename;
        }
        if ($request->hasfile('fevicon')) {
            $file = $request->file('fevicon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $setting->fevicon = $filename;
        }
        
        $setting->update();   
 
        return redirect('admin/settings')->with('success', 'Updated Successfully.');

    }
}
