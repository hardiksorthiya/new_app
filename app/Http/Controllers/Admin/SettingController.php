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
        return view('admin.setting.index');
    }
    public function create()
    {
        return view('admin.setting.create');
    }
    public function edit()
    {
        $setting = Setting::all();
        return view('admin.setting.edit', compact('setting'));
    }
    public function store(SettingRequest $request)
    {
        $setting = new Setting;

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $setting->image = $filename;
        }

        $setting->favicon = $request->favicon;
        $setting->instagram = $request->instagram;
        $setting->youtube = $request->youtube;
        $setting->linkedin = $request->linkedin;
        $user->save();

        return redirect('admin/settings')->with('success', 'Updated Successfully.');

    }
    public function update(Request $request, $setting_id)
    {

        $setting = Setting::find($setting_id);

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/admin/';
            $file->move($path, $filename);
            $setting->image = $filename;
        }
        $setting->favicon = $request->favicon;
        $setting->instagram = $request->instagram;
        $setting->youtube = $request->youtube;
        $setting->linkedin = $request->linkedin;
        $user->update();

        return redirect('admin/settings')->with('success', 'Updated Successfully.');

    }
}
