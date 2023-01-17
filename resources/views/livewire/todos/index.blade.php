<div class="w-4/5 mx-auto mt-6">
    <div class="flex justify-between mb-10">
        <h1 class="text-5xl font-bold">{{ ucfirst($this->scheduled->value) }}</h1>
        
        <x-button>Create</x-button>
    </div>
    <div>
        @if ($this->todos->isNotEmpty())
            <ul class="flex flex-col gap-4">
                @foreach ($this->todos as $todo)
                <!-- border border-{{ $todo->color }}-500 -->
                    <li class="flex align-center px-5 py-3 rounded-md font-medium bg-white hover:scale-105 hover:cursor-pointer transition">
                        <div class="mr-3">
                            <input type="checkbox" />
                        </div>
                        <div class="flex-1">
                            {{ $todo->title }}
                        </div>
                        <div class="flex items-center">
                            <x-indicator color="{{ $todo->color }}" class="w-2 h-2" />
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
        @endif
    </div>
</div>
