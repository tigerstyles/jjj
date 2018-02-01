<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::where('status', 'approved')->get();
        return view('welcome', ['jobs' => $jobs,]);
    }
}
