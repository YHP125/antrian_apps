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
    <div class="px-8 py-12">
        @if (!request()->is('/'))
            <a href="javascript:history.back()">Kembali</a>
        @endif
        @yield('isi_menu')
    </div>
</body>

</html>
