<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;


class JobAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $jobs = Job::all();
        return view('admin', ['jobs' => $jobs]);
    }

    public function approve($id)
    {
        $job = Job::findOrFail($id);
        $job->status = "approved";
        $job->save();

        return redirect('/');
    }

    public function spam($id)
    {
        $job = Job::findOrFail($id);
        $job->status = "spam";
        $job->save();

        return redirect('/');
    }
}