<x-layout title="Register">
    <div class="h-screen flex items-center justify-center bg-gray-50">
        <div>
            <header class="mb-6">
                <x-logo class="text-7xl text-center" />
            </header>
            <main class="p-12 pt-6 bg-white rounded-lg shadow-xl">
                <div class="text-center pb-2 mb-6 border-solid border-b border-gray-300">
                    <h1 class="font-bold text-3xl">Register</h1>
                </div>
                
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

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-col gap-4">
                        <x-input type="text" name="name" id="name" title="Name" autofocus required maxlength="255" :validation-failed="$errors->has('name')" />
                        <x-input type="email" name="email" id="email" title="Email" required :validation-failed="$errors->has('email')" />
                        <x-input type="password" name="password" id="password" title="Password" required :validation-failed="$errors->has('password')" />
                        <x-input type="password" name="password_confirmation" id="password_confirmation" title="Password Confirmation" required :validation-failed="$errors->has('password')" />

                        <div class="pt-4">
                            <x-button>Register</x-button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</x-layout>
