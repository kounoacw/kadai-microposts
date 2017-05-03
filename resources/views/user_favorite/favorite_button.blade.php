@if (Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete', 'class' => 'form-inline']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-xs']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $micropost->id], 'class' => 'form-inline']) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-primary btn-xs']) !!}
    {!! Form::close() !!}
@endif