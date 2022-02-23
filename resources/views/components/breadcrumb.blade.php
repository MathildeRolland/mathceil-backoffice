
    <a {{ $attributes->merge(['class' => "flex"]) }}>
        <x-ri-arrow-go-back-fill class="w-4 mr-1" />
        {{ $slot }}
    </a>
