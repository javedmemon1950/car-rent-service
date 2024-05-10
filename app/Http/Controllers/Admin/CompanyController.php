<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    function all_companies() {
        $companies = Company::all();

        return view('admin.companies',['companies' => $companies]);
    }

    function add_company() {
        return view('admin.add_company');
    }

    function create_company(Request $request){

        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);
        
        $company = new Company;
        
        $company->name = $request->name;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->description = $request->description;
    
        $company->save();

        if($company){
            return redirect('/all_companies');
        }

        return redirect()->back();
    }

    function update_company($id) {
        $company = Company::find($id);
        return view('admin.update_company', ['company' => $company]);
    }

    function edit_company(Request $request){
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);
        
        $company = Company::find($request->id);
        
        $company->name = $request->name;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->description = $request->description;
    
        $company->save();

        return redirect('/all_companies');

    }

    function delete_company($id) {
        $company = Company::find($id);
        $company->delete();
        return redirect()->back();
    }
}
