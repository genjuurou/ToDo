@php
    use \App\Enums\Scheduled;
@endphp

<aside class="hidden lg:block w-64 h-screen pt-6 pb-12 px-4 bg-white">
    <div class="h-full flex flex-col justify-between">
        <div>
            <x-logo class="text-5xl px-5 mb-10" />
            
            <nav>
                <ul class="flex flex-col gap-1">
                    <li>
                        <x-nav.link href="{{ route('todos.index', ['scheduled' => Scheduled::TODAY->value]) }}"
                            title="Today"
                            icon="o-clipboard"
                            :selected="request()->path() === Scheduled::TODAY->value"
                        />
                    </li>
                    <li>
                        <x-nav.link href="{{ route('todos.index', ['scheduled' => Scheduled::TOMORROW->value]) }}"
                            title="Tomorrow"
                            icon="o-clipboard-document"
                            :selected="request()->path() === Scheduled::TOMORROW->value"
                        />
                    </li>
                    <li>
                        <x-nav.link href="{{ route('todos.index', ['scheduled' => Scheduled::UPCOMING->value]) }}"
                            title="Upcoming"
                            icon="o-calendar-days"
                            :selected="request()->path() === Scheduled::UPCOMING->value"
                        />
                    </li>
                </ul>
            </nav>
        </div>

        <x-nav.logout />
    </div>
</aside>
