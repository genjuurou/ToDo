@props(['href', 'title', 'icon', 'selected' => false])

<a href="{{ $href }}"
    class="flex align-center justify-center px-2 md:px-3 lg:justify-start lg:px-5 py-3 rounded-md font-medium hover:bg-indigo-600 hover:text-white transition {{ $selected ? 'bg-gray-200 text-black' : 'text-gray-500' }}"
>
    <x-dynamic-component :component="'heroicon-'.$icon" class="h-5 md:h-6 lg:mr-2" />

    <span class="hidden lg:block">{{ $title }}</span>
</a>
