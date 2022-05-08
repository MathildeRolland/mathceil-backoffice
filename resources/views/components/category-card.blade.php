@props(['categoryId', 'name', 'count'])

<div class="flex my-3 tablet:my-5 h-50">
    <a class="flex grow cursor-pointer" href="{{ route('post.display', ['id' => $categoryId]) }}">
        <div class="shadow rounded w-full flex justify-between bg-white">
            <div class="p-3">
                <h2 class="text-lg">{{ $name }} <span class="text-xs">({{ $count }} articles)</span></h2>
            </div>
        </div>
    </a>
    <div class="flex flex-col justify-around ml-2">
        <div class="w-8 rounded bg-warning">
            <x-card-action-link :href="route('post.update', ['id' => $categoryId])">
                <x-gmdi-edit class="text-light m-1" />
            </x-card-action-link>
        </div>
        <div class="w-8 rounded bg-danger">
            <x-card-action-link :href="route('post.delete', ['id' => $categoryId])">
                <x-ri-delete-bin-2-fill class="text-light m-1.5" />
            </x-card-action-link>
        </div>
    </div>
</div>