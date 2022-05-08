@extends('layouts.app')

@section('content')

<div class="container min-h-screen mx-auto bg-light py-4">
    <h1 class="text-center text-xl px-3 my-6 tablet:my-10">Bienvenue sur le back-office de Math.Ceil!</h1>

    <div class="tablet:w-4/5 desktop:w-3/5 px-3 tablet:m-auto mt-8 tablet:mt-5 flex flex-col">
        <div class="group self-end border border-add hover:border-add bg-light hover:bg-add rounded px-2 py-0.5">
            <a href="{{ Route('post.create') }}" class="flex justify-center items-center cursor-pointer">
                <x-zondicon-add-solid class="block w-5 text-add group-hover:text-light" />
                <p class="ml-4 text-add group-hover:text-light">Nouvel article</p>
            </a>
        </div>

        @if ($posts->count() > 0 )
        <div class="mt-6">
            <p class="my-3">Les 5 derniers articles publiés:</p>
            <ul class="text-dark">
                @foreach($posts as $key => $post)
                <x-post-card postId="{{ $post->id }}" date="{{ $post->created_at }}" name="{{ $post->title }}">
                    <x-slot name="categories">
                        @foreach ($post->categories as $category)
                            <x-tag name="{{ $category->name }}" />
                        @endforeach
                    </x-slot>
                </x-post-card>
                @endforeach
            </ul>
            @else
            <p>Il n'y a pas d'articles à afficher</p>
            @endif
        </div>
    </div>
</div>
@endsection