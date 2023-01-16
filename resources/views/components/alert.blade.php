@props(['type' => 'info', 'message'])

@php
    $types = [
        'danger' => 'bg-red-100 text-red-900 border-red-300',
    ];
@endphp

<div class="w-full px-3 py-2 rounded-lg border mb-4 {{ $types[$type] }}">
    <p>{{ $message }}</p>
</div>
