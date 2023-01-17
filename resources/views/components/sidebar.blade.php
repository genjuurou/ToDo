@php
    use \App\Enums\Schedule;
@endphp

<aside class="hidden lg:block w-64 h-screen pt-6 pb-12 px-4 bg-white">
    <div class="h-full flex flex-col justify-between">
        <div>
            <x-logo class="text-5xl px-5 mb-10" />
            
            <nav>
                <ul class="flex flex-col gap-1">
                    <li>
                        <x-nav.link href="{{ route('todos.index', ['schedule' => Schedule::TODAY->value]) }}"
                            title="Today"
                            icon="o-clipboard"
                            :selected="request()->path() === Schedule::TODAY->value"
                        />
                    </li>
                    <li>
                        <x-nav.link href="{{ route('todos.index', ['schedule' => Schedule::TOMORROW->value]) }}"
                            title="Tomorrow"
                            icon="o-clipboard-document"
                            :selected="request()->path === Schedule::TOMORROW->value"
                        />
                    </li>
                    <li>
                        <x-nav.link href="{{ route('todos.index', ['schedule' => Schedule::UPCOMING->value]) }}"
                            title="Upcoming"
                            icon="o-calendar-days"
                            :selected="request()->path() === Schedule::UPCOMING->value"
                        />
                    </li>
                </ul>
            </nav>
        </div>

        <x-nav.logout />
    </div>
</aside>
