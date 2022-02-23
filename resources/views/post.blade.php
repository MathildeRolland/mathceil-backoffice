@extends('layouts.app')

@section('content')
<div class="container min-h-screen tablet:w-4/5 desktop:w-3/5 lg-desktop:w-3/6 px-2 mx-auto bg-light py-2">
    <x-breadcrumb :href="url()->previous()">
        <p>Retour</p>
    </x-breadcrumb>
    <div class="flex justify-between items-center px-2 mt-4">
        <date class="text-sm text-gray-400 italic">{{ $post->created_at }}</date>
        <div class="flex -translate-y-5">
            <div class="w-8 rounded bg-warning mx-1">
                <x-card-action-link :href="route('post.update', ['id' => $post->id])">
                    <x-gmdi-edit class="text-light m-1" />
                </x-card-action-link>
            </div>
            <div class="w-8 rounded bg-danger mx-1">
                <x-card-action-link :href="route('post.delete', ['id' => $post->id])">
                    <x-ri-delete-bin-2-fill class="text-light m-1.5" />
                </x-card-action-link>
            </div>
        </div>
    </div>
    <div class="mt-5 tablet:mt-8">
        <h1 class="text-2xl text-center">{{ $post->title }}</h1>
        <p class="mt-8 px-2">{!! $post->content !!}</p>
    </div>
</div>
@endsection