@extends('layouts.app')

@section('content')

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>

@endsection