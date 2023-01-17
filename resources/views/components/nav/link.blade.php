@props(['href', 'title', 'icon', 'selected' => false])

<a href="{{ $href }}"
    class="flex align-center px-5 py-3 rounded-md font-medium text-gray-500 hover:bg-indigo-600 hover:text-white transition {{ $selected ? 'bg-gray-200 text-black' : '' }}"
>
    <x-dynamic-component :component="'heroicon-'.$icon" class="h-6 mr-2" />

    <span class="block">{{ $title }}</span>
</a>