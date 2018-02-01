@component('mail::message')
There is a post from a new user( {{ $job->email }} ) on JobBoard for you to review

Job Title: {{ $job->title }} <br>
Job Description: {{ $job->description }} <br>

Approve job: {{ route('job.approve', ['id' => $job->id]) }} <br>
Mark as Spam: {{ route('job.spam', ['id' => $job->id]) }}

{{ config('app.name') }}
@endcomponent
