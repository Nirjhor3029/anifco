<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::all();
        return view('pages.company.create',compact('companies'));
    }
    public function createCompany(Request $request)
    {

            return  $request->file('image')->getClientOriginalName();
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



        return redirect()->back()->with('message', 'Successfully added one record !');
    }
    public function manageCompany($id)
    {
//        return $id;
        
        $companies = Company::all();
        $update_company = Company::find($id);
        // return $roles;
        return view('pages.company.create',compact('companies','update_company'));
    }
    public function removeCompany($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->back()->with('remove_message', 'Deleted one record successfully!');
    }

    public function updateCompany(Request $request,$id)
    {
//        return $id;
        $update_company = Company::find($id);

        if(isset($request->password)){
//            return "pas";
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|unique:users|email|string',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $update_company->name = $request->name;
            $update_company->email = $request->email;
            $update_company->role = $request->role;
        }else{
//            return "no";
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|unique:users|email|string',
            ]);

            $update_company->name = $request->name;
            $update_company->email = $request->email;
            $update_company->role = $request->role;

        }

        if ($validator->fails()) {
            return redirect()->route('User')
                ->withErrors($validator)
                ->withInput();
        }

        $update_company->save();

        return redirect()->back()->with('update_message', 'Update one record successfully!');


//        return $request;
    }
}
