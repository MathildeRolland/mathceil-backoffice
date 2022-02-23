@extends('layouts.app')

@section('content')
<div class="container min-h-screen mx-auto bg-light py-4">
    <h1 class="text-center text-xl px-3 my-6 tablet:my-10">Tous les articles</h1>

    <div class="tablet:w-4/5 desktop:w-3/5 px-3 tablet:m-auto mt-8 tablet:mt-5 flex flex-col">
        <ul>
            @foreach ($posts as $post)
            <x-post-card postId="{{ $post->id }}">
                <x-slot name="date">{{ $post->created_at }}</x-slot>
                <x-slot name="title">{{ $post->title }}</x-slot>
            </x-post-card>

            @endforeach
        </ul>
    </div>
</div>
@endsection