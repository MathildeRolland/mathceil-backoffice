@props(['postId', 'date', 'name'])

<div class="flex my-3 tablet:my-5">
    <a class="flex grow cursor-pointer" href="{{ route('post.display', ['id' => $postId]) }}">
        <div class="shadow rounded w-full flex justify-between bg-white">
            <div class="p-3">
                <date class="text-sm italic text-grey">{{ $date }}</date>
                <h2 class="text-lg">{{ $name }}</h2>
            </div>
            <div class="flex self-end">{{ $categories }}</div>
        </div>
    </a>
    <div class="flex flex-col justify-around ml-2">
        <div class="w-8 rounded bg-warning">
            <x-card-action-link :href="route('post.update', ['id' => $postId])">
                <x-gmdi-edit class="text-light m-1" />
            </x-card-action-link>
        </div>
        <div class="w-8 rounded bg-danger">
            <x-card-action-link :href="route('post.delete', ['id' => $postId])">
                <x-ri-delete-bin-2-fill class="text-light m-1.5" />
            </x-card-action-link>
        </div>
    </div>
</div>