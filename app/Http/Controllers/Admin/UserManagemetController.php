<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserManagemetController extends Controller
{
    function all_users() {
        $users = User::all();

        return response()->json($users);
    }

    function create_user(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
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
            return response()->json([
                "data" => $user,
                "success" => "User added successfully"
            ]);
        }

        return response()->json([
            "error" => "Something went wrong"
        ]);
    }

    function edit_user(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
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
            return response()->json([
                "data" => $user,
                "success" => "User updated successfully"
            ]);
        }
    }

    function delete_user($id) {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            "success" => "User deleted successfully"
        ]);
    }
}
