<div
    x-cloak
    x-data="{ open: @entangle('open') }"
    x-show="open"
    class="fixed inset-0 z-30 bg-black bg-opacity-50 flex items-center justify-center"
>
    <div @click.outside="$wire.close()" class="w-full max-w-xl px-6 py-4 m-4 overflow-hidden rounded-lg text-sm bg-white text-gray-700" role="dialog">
        @if ($component)    
            <header class="mb-4 flex justify-end">
                <button wire:click="close()" class="text-gray-400 hover:text-gray-700">
                    <x-heroicon-o-x-mark class="w-5 h-5" />
                </button>
            </header>
        
            @livewire($component, $data, key($key))
        @endif
    </div>
</div>
