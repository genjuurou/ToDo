<div class="w-4/5 mx-auto mt-6">
    <div class="flex justify-between mb-10">
        <h1 class="text-5xl font-bold">{{ ucfirst($this->scheduled->value) }}</h1>
        
        <div class="flex items-end">
            <x-button wire:click="openModal('todos.create', { 'scheduled': '{{ $this->scheduled }}' })">Create</x-button>
        </div>
    </div>
    <div>
        @if ($this->todos->isNotEmpty())
            @if ($this->isUpcoming)
                <div class="flex flex-col gap-5">
                    @foreach ($this->todos as $day => $todos)
                        <div>
                            <h2 class="text-lg font-bold mb-1">{{ $day }}</h2>
                            <ul class="flex flex-col gap-2">
                                @foreach ($todos as $todo)
                                    <li class="flex align-center px-5 py-3 rounded-md font-medium bg-white hover:scale-105 hover:cursor-pointer transition">
                                        <div class="flex items-center mr-3">
                                            <x-heroicon-s-stop class="w-3 h-3 text-{{ $todo->color }}-500" />
                                        </div>
                                        <div class="flex-1">
                                            {{ $todo->title }}
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
                        <li class="flex align-center px-5 py-3 rounded-md font-medium bg-white hover:scale-105 hover:cursor-pointer transition">
                            <div class="flex items-center mr-3">
                                <x-heroicon-s-stop class="w-3 h-3 text-{{ $todo->color }}-500" />
                            </div>
                            <div class="flex-1">
                                {{ $todo->title }}
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
