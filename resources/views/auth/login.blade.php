<x-layout title="Login">
    <div class="h-screen flex items-center justify-center bg-gray-50">
        <div>
            <header class="mb-6">
                <x-logo class="text-7xl text-center" />
            </header>
            <main class="p-12 pt-6 bg-white rounded-lg shadow-xl">
                <div class="text-center pb-2 mb-6 border-solid border-b border-gray-300">
                    <h1 class="font-bold text-3xl">Login</h1>
                </div>
                
                @if ($errors->any())
                    <x-alert type="danger" message="Email / Password is incorrect" />
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-col gap-4">
                        <x-input type="email" name="email" id="email" title="Email" autofocus required />
                        <x-input type="password" name="password" id="password" title="Password" required />

                        <div class="pt-4">
                            <x-button>Login</x-button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</x-layout>
