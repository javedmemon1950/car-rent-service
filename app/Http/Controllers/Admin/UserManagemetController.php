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
            'email' => 'required|email',
            'contact' => 'required',
        ]);
        
        $user = User::find($request->id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        // $user->password = bcrypt($request->password);
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


// let dummyData = {
//     name: 'Test',
//     contact: '03311331133',
//     email: 'test@email.com',
//     password: 'Admin123',
//     password_confirmation: 'Admin123',
//     isAdmin: 1,
//   };

//   $.ajax({
//     url: "http://127.0.0.1:8000/create_user", // Your API endpoint URL
//     method: "POST",
//     headers: {
//         "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content') // Include the CSRF token in the request headers
//     },
//     data: dummyData, // Data to be sent in the request body
//     dataType: "json", // Expected data type of the response
//     success: function(response) {
//         // Handle successful response
//         console.log('POST request successful:', response);
//         // You can process the response data here
//     },
//     error: function(xhr, status, error) {
//         // Handle errors
//         console.error('Error making POST request:', error);
//     }
// });