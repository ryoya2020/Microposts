@if (Auth::check())
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンファボボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('いいねを取り消す', ['class' => "btn btn-warning btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- ファボボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('いいね！', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif

