<x-layout title="Login">
    <div class="h-screen flex items-center justify-center">
        <div>
            <header class="mb-6">
                <x-logo class="text-7xl text-center" />
            </header>
            <main class="p-12 bg-white rounded-md">
                @if ($errors->any())
                    <div class="mb-4">
                        <x-alert color="danger">
                            <p>Email / Password is incorrect</p>
                        </x-alert>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-col gap-4">
                        <x-input type="email" name="email" id="email" label="Email" autofocus required />
                        <x-input type="password" name="password" id="password" label="Password" required />

                        <div class="pt-4">
                            <x-button class="w-full bg-gray-200">Login</x-button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</x-layout>
