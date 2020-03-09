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
        // return $roles;
        return view('pages.user.create',compact('roles'));
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
        
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return $request;
    }
    public function manageUser()
    {
        
    }
    public function removeUser($id)
    {
        
    }
    public function updateUser(Request $request)
    {
        
    }
}
