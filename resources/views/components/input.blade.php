@props(['id', 'name', 'type', 'title'])
<div>
    <label for="{{ $id }}" class="block pb-1">{{ $title }}</label>
    <input 
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        {{ $attributes->merge(['class'=> 'relative block w-full appearance-none rounded-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500']) }}
    />
</div>
