<div>
    <div class="flex flex-col gap-4 pb-4">
        @if ($errors->any())
            <x-alert color="danger">
                <h2 class="font-bold text-lg">Validation Failed:</h2>

                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif
        <x-input type="text" label="Title" autofocus required wire:model="todo.title" />
        
        <x-select label="Importance" required wire:model="todo.importance">
            @foreach ($this->options as $value => $name)
                <option value="{{ $value }}">{{ $name }}</option>
            @endforeach
        </x-select>

        <x-textarea label="Description" wire:model="todo.description" />
    </div>
    
    <div class="flex justify-end">
        <x-button class="bg-gray-200" wire:click="submit">
            <x-heroicon-o-plus class="h-5 mr-2" />
            <span>Create</span>
        </x-button>
    </div>
</div>
