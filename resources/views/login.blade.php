<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
    <title>Login Page</title>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Login</h2>

            <form method="POST" action='{{ route('login-attempt') }}' id="login-form" class="space-y-5">
                @csrf

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" required
                        class="w-full mt-1 px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full mt-1 px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                </div>

                <button type="submit" id="login-button"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Sign In
                </button>

                <div id="login-message" class="text-red-500 text-sm text-center mt-2"></div>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                Don’t have an account?
                <a href="/register" class="text-blue-600 hover:underline">Register</a>
            </p>
        </div>
    </div>


</body>
@push('scripts')
    <script>
        $('#login-button').submit(() => {
            alert('berhasil')
        })
    </script>
@endpush

</html>
