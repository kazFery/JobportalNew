<?php

namespace App\Http\Controllers;

use App\Models\ApplicationDetail;
use App\Models\Company;
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
        $companyName = Company::where('id', $companyID)->get(['companyName'])->pluck('companyName');
        //return view('list', ['name' => $companyID]);
        $jobpostCompany = JobPost::where('company_id', $companyID)->get(['id']);
        //$data = ApplicationDetail::
        $data = ApplicationDetail::join('candidates', 'candidates.id', '=', 'applicationDetailes.candidate_id')->wherein('jobpost_id', $jobpostCompany)->join('jobPosts', 'jobPosts.id', "=", "applicationDetailes.jobpost_id")
            ->get(['candidates.firstName', 'candidates.lastName', 'jobPosts.title', 'applicationDetailes.appliedDate', 'applicationDetailes.status']);
        return view('list-applications', ['applications' => $data])->with('companyName', $companyName);
    }

    function listOfApplicationByJobPost($jobPostID)
    {
        $id = Auth::user()->id;
        $companyID  = Representative::where('user_id', $id)->get()->pluck('company_id'); //
        $companyName = Company::where('id', $companyID)->get(['companyName'])->pluck('companyName');
        $data = ApplicationDetail::join('candidates', 'candidates.id', '=', 'applicationDetailes.candidate_id')->where('jobpost_id', $jobPostID)->join('jobPosts', 'jobPosts.id', "=", "applicationDetailes.jobpost_id")
            ->get(['candidates.firstName', 'candidates.lastName', 'jobPosts.title', 'applicationDetailes.appliedDate', 'applicationDetailes.status']);
        return view('list-applications', ['applications' => $data])->with('companyName', $companyName);
    }

    public function updateStatus(Request $request)
    {

        $application = ApplicationDetail::find($request->application_id);
        $application->status = $request->status;
        $application->save();
        return response()->json(['success' => 'Status change successfully.']);
    }
}
