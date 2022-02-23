@extends('layouts.app')

@section('content')

<div class="container min-h-screen mx-auto bg-light py-4">
    <h1 class="text-center text-xl px-3 my-6 tablet:my-10">Bienvenue sur le back-office de Math.Ceil!</h1>
    {{--
    <x-zondicon-add-outline /> --}}
    {{--
    <x-zondicon-add-solid /> --}}


    @if ($posts->count() > 0 )
    <div class="tablet:w-4/5 desktop:w-3/5 px-3 tablet:m-auto mt-8 tablet:mt-17">
        <p class="my-3">Les 5 derniers articles publiés:</p>
        <ul class="text-purple">
            @foreach($posts as $key => $post)
            <x-post-card postId="{{ $post->id }}">
                <x-slot name="date">{{ $post->created_at }}</x-slot>
                <x-slot name="title">{{ $post->title }}</x-slot>
            </x-post-card>
            @endforeach
        </ul>
    </div>
    @else
    <p>Il n'y a pas d'articles à afficher</p>
    @endif
</div>
@endsection