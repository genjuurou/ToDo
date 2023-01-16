@props(['id', 'name', 'type', 'title', 'validationFailed' => false])

@php
    $color = $validationFailed ? 'border-red-500' : 'border-gray-300 ';
@endphp

<div>
    <label for="{{ $id }}" class="block pb-1">{{ $title }}</label>
    <input 
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        {{ $attributes->merge(['class'=> $color.' relative block w-full text-gray-900 appearance-none rounded-none rounded-md border px-3 py-2 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500']) }}
    />
</div>
