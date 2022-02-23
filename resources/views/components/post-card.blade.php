@props(['postId'])

<div class="shadow my-3 tablet:my-5 rounded">
    <div class="p-3">
        <div class="flex justify-between">
            <date class="text-sm italic text-grey">{{ $date }}</date>
            <div class="flex">
                <div class="w-5 ml-4">
                    <x-card-action-link :href="route('post.display', ['id' => $postId])">
                        <x-gmdi-edit class="text-warning" />
                    </x-card-action-link>
                </div>
                <div class="w-5 ml-4">
                    <x-card-action-link :href="route('post.display', ['id' => $postId])">
                        <x-ri-delete-bin-2-fill class="text-danger" />
                    </x-card-action-link>
                </div>
            </div>
        </div>
        <h2>{{ $title }}</h2>
    </div>
</div>