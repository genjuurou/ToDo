<x-layout>
    <div class="flex">
        <x-sidebar />

        <main class="flex-1">
            Main
            {{ $slot }}
        </main>
    </div>
</x-layout>
