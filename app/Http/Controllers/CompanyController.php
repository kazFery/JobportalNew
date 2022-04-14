<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Representative;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $companyID  = Representative::where('user_id', $id)->get()->pluck('company_id'); //
        $company = Company::where('id', $companyID)->get();
        return view('companyShow')->with('company', $company);
    }


    public function store(Request $request)
    {
        $company = new Company;
        $company->companyName = $request->companyName;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->websiteURL = $request->weburl;
        $company->location_id  = 1;
        $company->save();
        return redirect('/company/register');
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('companyEdit')->with('company', $company);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        $company->companyName = $request->input('companyName');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->websiteURL = $request->input('weburl');
        $company->location_id  = 1;
        $company->save();

        // return view('companyEdit', ['company' => $company]);
        return view('companyEdit')->with('company', $company);
    }
}
