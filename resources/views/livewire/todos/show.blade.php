<div>
    <div class="pb-4">
        <dl class="flex flex-col gap-4">
            <x-show.item label="Title">{{ $todo->title }}</x-show.item>
            <x-show.item label="Scheduled at">{{ $todo->scheduled_at }}</x-show.item>
            <x-show.item label="Importance">
                <div class="flex">
                    <div class="flex items-center mr-3">
                        <x-heroicon-s-stop class="w-3 h-3 text-{{ $todo->importance->getColor() }}-500" />
                    </div>
                    <div>
                        {{ $todo->importance->getLabel() }}
                    </div>
                </div>
            </x-show.item>
            <x-show.item label="Status">{{ $todo->done ? 'Done' : 'Todo' }}</x-show.item>
            <x-show.item label="Description">{{ $todo->description }}</x-show.item>
        </dl>
    </div>
</div>
