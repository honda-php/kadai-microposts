@extends('layouts.php')
@section('content')

    @include('users.users', ['users' => $users])

@endsection