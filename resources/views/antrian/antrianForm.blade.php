@extends('layouts.index')
@section('isi_menu')
    <div class="w-full h-screen shadow-2xl border-2 border-gray-300 rounded-2xl px-2 py-1.5">
        <div class="border-b-2 text-4xl pb-1 mb-2">
            Title
        </div>
        <div class="flex flex-col gap-4">
            <div class="flex flex-col">
                <label for="nama_pengantri" class="text-xl mb-1">Nama Pengantri</label>
                <input type="text" id="nama_pengantri"
                    class="py-2.5 sm:py-3 px-4 block w-full border border-gray-400 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            </div>

            <div class="flex flex-col">
                <label for="selection" class="text-xl mb-1">Email</label>
                <input type="text" id="selection"
                    class="py-2.5 sm:py-3 px-4 block w-full border border-gray-400 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            </div>

            <div class="flex flex-col">
                <label for="selection" class="text-xl mb-1">Password</label>
                <input type="password" id="selection"
                    class="py-2.5 sm:py-3 px-4 block w-full border border-gray-400 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            </div>

            <div class="flex flex-col">
                <label for="selection" class="text-xl mb-1">Password</label>
                <select type="password" id="selection"
                    class="py-2.5 sm:py-3 px-4 block w-full border border-gray-400 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    <option value="">Manga</option>
                    <option value="">Komik</option>
                </select>
            </div>
        </div>

    </div>
@endsection

<script></script>
