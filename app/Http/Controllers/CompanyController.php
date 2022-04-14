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

        return view('companyShow', ['companyInfo' => $company]);
    }


    public function store(Request $request)
    {
        $company = new Company;
        $company->companyName = $request->title;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->websiteURL = $request->weburl;
        $company->location_id  = 1;
        $company->save();
        return redirect('/company/register');
    }
}
