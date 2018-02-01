@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 17%">
        {{ Form::open(['url' => route('job.update', [ 'id' => $job->id ]), ]) }}
        <div class="form-group">
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', $job->title, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description: ') }}
            {{ Form::textarea('description', $job->description, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email: ') }}
            {{ Form::email('email', $job->email, array('class' => 'form-title', 'placeholder' => 'EMAIL')) }}
        </div>
        {{ Form::button('SAVE', array('class' => 'form-control', 'type' => 'submit')) }}
        {{ Form::close() }}
    </div>
@endsection

@section('scripts')
@endsection