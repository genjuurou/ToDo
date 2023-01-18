<div>
    <div class="flex flex-col gap-4 pb-4">
        <x-input type="text" label="Title" autofocus required wire:model="todo.title" />

        <label>
            <span class="font-medium">Description</span>
            
            <textarea
                class="w-full px-3 py-2 border border-gray-500 rounded-md focus:outline-none focus:border-indigo-600 focus:ring-indigo-600 focus:ring-1"
                wire:model="todo.description"
            ></textarea>
        </label>
    </div>
    
    <div class="flex justify-end">
        <x-button wire:click="submit">Create</x-button>
    </div>
</div>
