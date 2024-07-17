<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
    public function edit($user_id)
    {
        $user = User::find($user_id);
       
        return view('admin.user.edit', compact('user'));
    }

    public function add_user(Request $request)
    {       
        return view('admin.user.add') ;
    }

    public function insert_user(Request $request)
    {       
       $user = new User;
       $user->name = trim($request->name);
       $user->email = trim($request->email);
       $user->mobile = trim($request->mobile);
       $user->password = Hash::make($request->password);
       $user->role_as = trim($request->role_as);

       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = 'assets/images/admin/';
        $file->move($path, $filename);
        $user->image = $filename;
    } $user->save();

       return redirect('admin/user')->with('success', 'User Added Successfully.');

    }
    public function update(Request $request,$user_id)
    {       
        $user = User::find($user_id);
       $user->name = trim($request->name);
    //    $user->email = trim($request->email);
       $user->mobile = trim($request->mobile);
       $user->password = Hash::make($request->password);
       $user->role_as = trim($request->role_as);

       if($request->hasfile('image')){
        $destination = 'assets/images/admin/'.$user->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = 'assets/images/admin/';
        $file->move($path, $filename);
        $user->image = $filename;
    } 
    $user->update();
    return redirect('admin/user')->with('success', 'User Added Successfully.');


    }
    
    public function delete($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect('admin/user')->with('message','Data Deleted.');
        
    }
}
