<button
    {{ $attributes->merge(['class' => 'flex justify-center rounded-md bg-white py-2 px-4 text-sm font-medium text-black transition hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-600']) }}
>
    {{ $slot }}
</button>
