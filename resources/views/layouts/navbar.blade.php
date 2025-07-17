<nav class="bg-white shadow-md px-6 py-3 flex justify-between items-center">
    <div class="text-xl font-semibold text-gray-800">
        Antrian Apps
    </div>

    <div class="hidden md:flex gap-6 text-gray-600 text-sm">
        <a href="#" class="hover:text-blue-500 transition">Home</a>
        <a href="#" class="hover:text-blue-500 transition">Antrian</a>
    </div>

    <div class="flex items-center gap-4">
        @auth
            <div class="relative group">
                <button class="text-sm text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg shadow">
                    {{ Auth::user()->username ?? 'Anonymous' }}
                </button>
                <div
                    class="absolute opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200 bg-white right-0 mt-2 w-32 rounded-lg shadow-lg z-10">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}">
                <button class="text-sm text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg shadow">
                    Login
                </button>
            </a>
        @endauth
    </div>

</nav>
