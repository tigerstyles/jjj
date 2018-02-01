<div id="formwrap" class="col-md-3">
    @if (count($errors) > 0)
        <div class="alert alert-danger" style="margin-top:0!important">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::open(['route' => 'job.create']) }}
        <div class="form-group">
            {{ Form::label('name', 'Post a job', array('class' => 'joblabel')) }}
        </div>
    <div class="form-group">
        {{ Form::text('title', '', array('class' => 'form-title', 'placeholder' => 'TITLE')) }}
    </div>
    <div class="form-group">
        {{ Form::textarea('description', '', array('class' => 'form-description', 'placeholder' => 'DESCRIPTION')) }}
    </div>
    <div class="form-group">
        {{ Form::email('email', '', array('class' => 'form-title', 'placeholder' => 'EMAIL')) }}
    </div>
    {{ Form::button('POST A JOB', array('class' => 'form-control', 'type' => 'submit')) }}
    {{ Form::close() }}
</div>