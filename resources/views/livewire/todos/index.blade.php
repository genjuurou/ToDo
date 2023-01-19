<div class="w-4/5 mx-auto mt-6">
    <div class="flex justify-between mb-10">
        <h1 class="text-5xl font-bold">{{ ucfirst($this->scheduled->value) }}</h1>
        
        <div class="flex items-end">
            <x-button wire:click="openModal('todos.form', { 'todo': 'none', 'scheduled': '{{ $this->scheduled }}' })">
                <x-heroicon-o-plus class="h-5 mr-2" />
                <span>Create</span>
            </x-button>
        </div>
    </div>
    <div>
        @if ($this->todos->isNotEmpty())
            @if ($this->isUpcoming())
                <div class="flex flex-col gap-5">
                    @foreach ($this->todos as $day => $todos)
                        <div>
                            <h2 class="text-lg font-bold mb-1">{{ $day }}</h2>
                            <ul class="flex flex-col gap-2">
                                @foreach ($todos as $todo)
                                    <li class="group flex align-center px-5 py-3 rounded-md font-medium bg-white hover:scale-105 transition">
                                        <div class="flex items-center mr-3">
                                            <x-heroicon-s-stop class="w-3 h-3 text-{{ $todo->importance->getColor() }}-500" />
                                        </div>
                                        <div class="flex-1">
                                            {{ $todo->title }}
                                        </div>
                                        <div class="flex items-center gap-1 lg:hidden ml-3 lg:group-hover:flex">
                                            <div wire:click="openModal('todos.form', { 'todo': '{{ $todo->id }}' })" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                                <x-heroicon-o-eye class="w-5 h-5 " />
                                            </div>
                                            <div wire:click="openModal('todos.form', { 'todo': '{{ $todo->id }}' })" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                                <x-heroicon-o-pencil-square class="w-5 h-5 " />
                                            </div>
                                            <div wire:click="openModal('todos.delete', { 'todo': '{{ $todo->id }}' })" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                                <x-heroicon-o-trash class="w-5 h-5 " />
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            @else
                <ul class="flex flex-col gap-2">
                    @foreach ($this->todos as $todo)
                        <li class="group flex align-center px-5 py-3 rounded-md font-medium bg-white hover:scale-105 transition">
                            <div class="flex items-center mr-3">
                                <x-heroicon-s-stop class="w-3 h-3 text-{{ $todo->importance->getColor() }}-500" />
                            </div>
                            <div class="flex-1 {{ $todo->done ? 'line-through text-gray-500' : '' }}">
                                {{ $todo->title }}
                            </div>
                            <div class="flex items-center gap-1 lg:hidden ml-3 lg:group-hover:flex">
                                @if ($this->isToday())
                                    @if ($todo->done)
                                        <div wire:click="markAsUndone('{{ $todo->id }}')" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                            <x-heroicon-o-x-mark class="w-5 h-5 " />
                                        </div>
                                    @else
                                        <div wire:click="markAsDone('{{ $todo->id }}')" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                            <x-heroicon-o-check class="w-5 h-5 " />
                                        </div>
                                    @endif
                                @endif
                                <div wire:click="openModal('todos.show', { 'todo': '{{ $todo->id }}' })" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                    <x-heroicon-o-eye class="w-5 h-5 " />
                                </div>
                                <div wire:click="openModal('todos.form', { 'todo': '{{ $todo->id }}' })" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                    <x-heroicon-o-pencil-square class="w-5 h-5 " />
                                </div>
                                <div wire:click="openModal('todos.delete', { 'todo': '{{ $todo->id }}' })" class="flex items-center justify-center text-gray-500 rounded-md transition h-6 w-6 hover:bg-indigo-600 hover:text-white">
                                    <x-heroicon-o-trash class="w-5 h-5 " />
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        @else
            <p class="text-lg text-gray-800 text-center">Your list is empty.</p>
        @endif
    </div>
</div>
