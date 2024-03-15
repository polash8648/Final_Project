<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobCreate extends Controller
{
     
function jobPost(Request $request)
{
    $request->validate([
        'job_name'=>'required',
        'company_name'=>'required',       

    ]);
    $data['job_name']=$request->job_name;
    $data['company_name']=$request->company_name;
    $data['job_description']=$request->job_description;
    $data['salary']=$request->salary;
    $data['terms_condition']=$request->terms_condition;
    $data['location']=$request->location;
    $data['status']=$request->status;

    $data['education']=$request->education;
    $data['experience']=$request->experience;
    $data['responsibilities']=$request->responsibilities;
    $data['skills']=$request->skills;
    $data['company_benifit']=$request->company_benifit;
    $data['workplace']=$request->workplace;



    $jobs= Job::create($data);
    if(!$jobs)
    {
        return redirect(route('registration'))->with('error',"Job Create fail try again");
    }
    return redirect(route('login'))->with('success',"Registration success, Login to access the app");

}
public function job()
{ 
    return view('job.create_job');
}
public function joblist() {
    $jobs = Job::paginate(10);

    return view('job.joblist',['jobs'=> $jobs]);
}
public function jobindex() {
    $jobs = Job::paginate(10);

    return view('job.job_index',['jobs'=> $jobs]);
}
}
