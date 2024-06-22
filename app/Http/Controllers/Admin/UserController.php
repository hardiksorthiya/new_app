<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if($user)
        {
           
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = Hash::make($request->new_password);
            $user->role_as = $request->role_as;
            $user->update();
            return redirect('admin/user')->with('message','Update Data Successfully.');
        }
        return view('admin.user.edit', compact('user'));
    }
    public function delete($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect('admin/user')->with('message','Data Deleted.');
        
    }
}
