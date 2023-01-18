<x-layout title="Register">
    <div class="h-screen flex items-center justify-center">
        <div>
            <header class="mb-6">
                <x-logo class="text-7xl text-center" />
            </header>
            <main class="p-12 bg-white rounded-md">
                @if ($errors->any())
                    <div class="mb-4">
                        <x-alert color="danger">
                            <h2 class="font-bold text-lg">Validation Failed:</h2>

                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </x-alert>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-col gap-4">
                        <x-input type="text" name="name" id="name" label="Name" autofocus required maxlength="255" />
                        <x-input type="email" name="email" id="email" label="Email" required :validation-failed="$errors->has('email')" />
                        <x-input type="password" name="password" id="password" label="Password" required />
                        <x-input type="password" name="password_confirmation" id="password_confirmation" label="Password Confirmation" required />

                        <div class="pt-4">
                            <x-button class="w-full bg-gray-200">Register</x-button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</x-layout>
