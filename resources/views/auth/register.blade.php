@extends('layouts.app');
@section('content');
    <div class="text-center">
        <h1>Sign up</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 off-set-sm-3">
            {!! Form::open(['route' => 'signup.post' ]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_comfirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control'])!!}
                </div>
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::Close() !!}
        </div>

    </div>




@endsection