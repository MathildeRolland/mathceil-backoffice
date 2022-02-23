
@extends('layouts.app')

@section('content')

<div class="container min-h-screen tablet:w-4/5 desktop:w-3/5 lg-desktop:w-3/6 px-2 mx-auto bg-light py-2">
    <x-breadcrumb :href="url()->previous()">
        <p>Retour</p>
    </x-breadcrumb>
    <div class="mt-5">
        <h1 class="text-2xl text-center my-15 tablet:mt-16">Création nouvel article</h1>
        <form method="POST" action="{{ Route('post.create') }}" class="px-2 mt-5 flex flex-col">
            @csrf
            <div class="flex flex-col my-6">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" class="rounded border-0.5 border-grey shadow-md shadow-grey-500 @error('title') is-invalid @else is-valid @enderror">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex flex-col h-5/6">
                <label for="content">Contenu</label>
                <textarea id="content" name="content"></textarea>
            </div>

            <div class="self-end">
                <button class="bg-pink px-10 py-1 rounded text-light mt-4 self-end w-40 cursor-pointer">Visualiser</button>
                <input type="submit" value="publier" class="bg-pink px-10 py-1 rounded text-light mt-4 w-40 cursor-pointer">
            </div>
        </form>
    </div>
</div>
@endsection