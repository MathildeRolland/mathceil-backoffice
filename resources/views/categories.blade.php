@extends('layouts.app')

@section('content')
    <div class="container min-h-screen mx-auto bg-light py-4">
    <h1 class="text-center text-xl px-3 my-6 tablet:my-10">Toutes les catégories</h1>

    @if($categories->count() > 0)
        <div class="tablet:w-4/5 desktop:w-3/5 px-3 tablet:m-auto mt-8 tablet:mt-5 flex flex-col">
            <div class="group self-end border border-add hover:border-add bg-light hover:bg-add rounded px-2 py-0.5">
                <a href="{{ Route('category.create') }}" class="flex justify-center items-center cursor-pointer">
                    <x-zondicon-add-solid class="block w-5 text-add group-hover:text-light" />
                    <p class="ml-4 text-add group-hover:text-light">Nouvelle catégorie</p>
                </a>
            </div>

            <div class="mt-6">
                <ul>
                    @foreach ($categories as $category)
                        <x-category-card categoryId="{{ $category->id }}" name="{{ $category->name }}" count="{{ $category->posts->count() }}" />
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
@endsection