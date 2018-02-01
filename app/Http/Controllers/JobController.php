<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use App\Mail\JobPosted;
use App\Mail\JobAwaitingConfirmation;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function createJob(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'title' => 'required',
            'description' => 'required',
        ]);
        $job = Job::create(['title' => $request->title,
                            'description' => $request->description,
                            'email' => $request->email]);
        $job->save();
        if (Job::where('email', $job->email)->count() > 1)
        {
            $job->status = 'approved';
            $job->save();
            //flash status message
            Session::flash('message', 'Your job has been posted!');
            Session::flash('alert-class', 'alert-success');
        }
        else
        {
            $job->status = 'pending';
            $job->save();
            //flash status message
            Session::flash('message', 'Your job post is in moderation!');
            Session::flash('alert-class', 'alert-success');
            //send email to user
            // i have used the mailtrap service for testing the mail system, in production this parameter would be $job->email
            \Mail::to('58bfb2f5f9-ad11ec@inbox.mailtrap.io')
                ->send(new JobPosted($job));
            //send email to admin
            // i have used the mailtrap service for testing the mail system, in production this parameter would be the admin mail
            \Mail::to('58bfb2f5f9-ad11ec@inbox.mailtrap.io')
                ->send(new JobAwaitingConfirmation($job));
        }

        return redirect('/');
    }
}
