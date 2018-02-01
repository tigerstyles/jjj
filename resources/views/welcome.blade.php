@extends('layouts.app')

@section('content')
    <a href="#formwrap" id="mobile">Post<br>
    a<br>
    job<br></a>
    <div class="col-md-9" id="main">
        @if($jobs->count() == 0)
            <p><strong>There are no jobs at the moment, use the form on the right to create a new one!</strong></p>
        @else
            @foreach ($jobs as $job)
                <div class="col-md-5 job">
                    <p><strong>Job title:</strong> {{ $job->title }}</p>
                    <p><strong>Job description:</strong> <br>{{ $job->description }}</p>
                    <p><strong>Posted by:</strong> {{ $job->email }}</p>
                    <p><strong>Posted:</strong> {{ $job->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        @endif
    </div>
    @include('form')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.alert').delay(3000).slideUp(300);
        });
    </script>
@endsection
