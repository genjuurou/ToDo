<div>
    <div class="font-medium pb-4">
        <p>Are you sure?</p>
    </div>
    
    <div class="flex justify-end gap-2">
        <x-button class="bg-gray-200" wire:click="submit">
            <span>Yes</span>
        </x-button>
        <x-button class="bg-gray-200" wire:click="close">
            <span>No</span>
        </x-button>
    </div>
</div>
