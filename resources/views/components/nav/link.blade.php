@props(['href', 'title', 'selected' => false])

<a href="{{ $href }}"
    class="block px-5 py-3 rounded-md font-medium hover:bg-indigo-200 {{ $selected ? 'bg-gray-200' : '' }}"
>
    {{ $title }}
</a>
