<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserManagemetController extends Controller
{
    function all_users() {
        $users = User::all();

        return view('admin.users',['users' => $users]);
    }

    function add_user() {
        return view('admin.add_user');
    }

    function create_user(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'contact' => 'required',
        ]);
        
        $user = new User;
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->password = bcrypt($request->password);
        $isAdmin = 0;
        
        if($request->isAdmin == 'on'){
            $isAdmin = 1;
        }
        
        $user->isAdmin = $isAdmin;
        $user->save();

        if($user){
            return redirect('/all_users');
        }

        return redirect()->back();
    }

    function update_user($id) {
        $user = User::find($id);
        return view('admin.update_user', ['user' => $user]);
    }

    function edit_user(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
        ]);
        
        $user = User::find($request->id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $isAdmin = 0;
        
        if($request->isAdmin == 'on'){
            $isAdmin = 1;
        }
        
        $user->isAdmin = $isAdmin;
        $user->save();

        return redirect('/all_users');

    }

    function delete_user($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}