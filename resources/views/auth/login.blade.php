<x-layout title="Login">
    <header>
        <x-logo />
    </header>
    <main>
        <h1>Login</h1>
        
        @if ($errors->any())
            <p>Email / Password is incorrect</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
        
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />

            <label for="password">Password</label>
            <input type="password" name="password" id="password" />

            <button type="submit">Login</button>
        </form>
    </main>
</x-layout>
