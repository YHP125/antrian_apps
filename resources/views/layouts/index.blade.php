<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navbar')

    <div class="px-8 py-12 my-1.5">
        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded-lg shadow">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-3 bg-red-100 text-red-800 rounded-lg shadow">
                {{ session('error') }}
            </div>
        @endif
        @if (!request()->is('/'))
            <a href="javascript:history.back()"><- Kembali</a>
        @endif
        @yield('isi_menu')
    </div>
</body>

</html>
