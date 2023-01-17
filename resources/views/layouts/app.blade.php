<x-layout>
    <div class="flex">
        <x-sidebar />

        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</x-layout>
