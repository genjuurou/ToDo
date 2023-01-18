<div>
    <x-input type="text" label="Title" autofocus required wire:model="todo.title" />
    <textarea rows="5" wire:model="todo.description"></textarea>
    <x-button wire:click="submit">Create</x-button>
</div>
