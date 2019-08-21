<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\job;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function Jvpage()
    {
        return view('admin.job/index');
    }

    public function Jcpage()
    {
        return view('admin.job/create');
    }

    public function index()
    {
        return job::orderBy("created_at", 'desc')
            ->get();
    }

    public function jobSave(Request $request)
    {
        $job = new Job;
        $job->name = htmlentities($request->jname);
        $job->prereq1 = htmlentities($request->prereq1);
        $job->prereq2 = htmlentities($request->prereq2);
        $job->prereq3 = htmlentities($request->prereq3);
        $job->save();
        return ['status' => 200];
    }

    public function jobSingle(job $id)
    {
        return $id;
    }

    public function jobUpdate(Request $request, job $id)
    {
        $id->name = htmlentities($request->editjname);
        $id->prereq1 = htmlentities($request->editprereq1);
        $id->prereq2 = htmlentities($request->editprereq2);
        $id->prereq3 = htmlentities($request->editprereq3);
        $id->save();
        return ['status' => 200];
    }

    public function jobDelete(job $id)
    {
        $id->delete();
        return ['status' => 200];
    }
}
