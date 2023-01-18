<x-layout>
    <div class="flex">
        <x-sidebar />

        <main class="flex-1 h-screen overflow-x-hidden overflow-y-auto pb-10">
            {{ $slot }}
        </main>
    </div>
</x-layout>
