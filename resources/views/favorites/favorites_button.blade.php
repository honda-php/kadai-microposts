
    @if (Auth::user()->is_favorites($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('unfavorite', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::Close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('favorite', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::Close() !!}
    @endif
