<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\User;
use App\URole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index()
    {
        $roles = URole::all();
        $users = User::all();
        // return $roles;
        return view('pages.user.create',compact('roles','users'));
    }
    public function createUser(Request $request)
    {

    //    return  $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users|email|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('User')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message', 'Successfully added one record !');
    }
    public function manageUser($id)
    {
//        return $id;
        $roles = URole::all();
        $users = User::all();
        $update_user = User::find($id);
        // return $roles;
        return view('pages.user.create',compact('roles','users','update_user'));
    }
    public function removeUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('remove_message', 'Deleted one record successfully!');
    }
    public function updateUser(Request $request)
    {
        
    }
}
