@extends('layouts.app')

@section('content')
    <div class="container" id="admintable">
        <table class="table">
            <thead>
                <tr>
                   <th>Title</th>
                   <th>Description</th>
                   <th>Email</th>
                   <th>Status</th>
                   <th>Mark as spam</th>
                   <th>Approve</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->title }}</td>
                        <td>{{ str_limit($job->description, $limit = 100, $end = '...') }}</td>
                        <td>{{ $job->email }}</td>
                        <td>{{ $job->status }}</td>
                        <td>
                            <a href="{{ route('job.spam', ['id' => $job->id]) }}" class="btn btn-danger">Spam</a>
                        </td>
                        <td>
                            <a href="{{ route('job.approve', ['id' => $job->id]) }}" class="btn btn-success">Approve</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
@endsection