<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="flex align-center justify-center w-full px-2 md:px-3 lg:justify-start lg:px-5 py-3 rounded-md text-left text-gray-500 font-medium hover:bg-indigo-600 hover:text-white transition">
        <x-heroicon-o-arrow-left-on-rectangle class="h-6 lg:mr-2" />
        <span class="hidden lg:block">Logout</span>
    </button>
</form>
