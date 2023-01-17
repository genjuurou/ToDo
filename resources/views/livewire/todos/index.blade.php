<div class="w-4/5 mx-auto mt-6">
    <div class="flex justify-between mb-10">
        <h1 class="text-5xl font-bold">Today</h1>
        
        <x-button>Create</x-button>
    </div>
    <div>
        @if ($this->todos->isNotEmpty())
            <ul class="flex flex-col gap-4">
                @foreach ($this->todos as $todo)
                    <li class="flex align-center px-5 py-3 rounded-md font-medium bg-white border border-{{ $todo->color }}-500 hover:scale-105 hover:cursor-pointer transition">
                        <div>
                            <input type="checkbox">
                        </div>
                        <div>
                            {{ $todo->title }}
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
        @endif
    </div>
</div>
