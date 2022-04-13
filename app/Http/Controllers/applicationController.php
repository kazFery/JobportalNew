<?php

namespace App\Http\Controllers;

use App\Models\ApplicationDetail;
use App\Models\Representative;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class applicationController extends Controller
{
    //
    function listOfApplication()
    {
        $id = Auth::user()->id;
        $companyID  = Representative::where('user_id', $id)->get()->pluck('company_id'); //
        //return view('list', ['name' => $companyID]);
        $jobpostCompany = JobPost::where('company_id', $companyID)->get(['id']);
        $data = ApplicationDetail::wherein('jobpost_id', $jobpostCompany)->get();
        //$data = ApplicationDetail::join('candidates', 'candidates.id', '=', 'applicationDetailes.candidate_id')
        //   ->get();  //['candidates.firstName', 'candidates.lastName', 'applicationDetailes.jobPost_id', 'applicationDetailes.appliedDate']
        return view('list', ['applications' => $data]);
    }
}
