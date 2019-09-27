@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfollow', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::Close() !!}
    @else
        {!! Form::open(['route' => ['user.follows', $user->id]]) !!}
            {!! Form::submit('Follow', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::Close() !!}
    @endif
@endif