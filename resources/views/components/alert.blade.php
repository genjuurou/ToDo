@props(['color'])

@php
    $colors = [
        'danger' => 'bg-rose-200 text-rose-800',
    ];
@endphp

<div class="w-full px-3 py-2 rounded-md {{ $colors[$color] }}">
    {{ $slot }}
</div>
