@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'login.post']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('Log in', ['class' => 'btn btn-primary']) !!}
        {!! Form::Close() !!}
        <p class="mt-2">new User?{!! link_to_route('signup.get', 'sign up Now!') !!}</p>
        </div>
    </div>


@endsection