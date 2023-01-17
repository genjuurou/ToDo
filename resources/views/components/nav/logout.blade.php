<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="block w-full px-5 py-3 rounded-md text-left font-medium hover:bg-indigo-200">Logout</button>
</form>
