@extends('layouts.app')

@section('content')
<h1>Tous les articles</h1>

<div>
    <ul>
        @foreach ($posts as $post)
        <li><a href="{{ route('post.display', ['id' => $post->id]) }}">{{ $post->title }}</a></li>

        @endforeach
    </ul>

</div>
@endsection