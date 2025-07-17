@extends('layouts.index')
@section('isi_menu')
    <form method="POST" action="{{ route('create-antri') }}">
        @csrf

        <div class="w-full h-fit shadow-2xl border-2 border-gray-300 rounded-2xl px-2 py-1.5">
            <div class="border-b-2 text-4xl pb-1 mb-2">
                Buat Antrian
            </div>
            <div class="flex flex-col gap-4">
                @if ($pengantri != null)
                    <div class="flex flex-col">
                        <label for="nama_pengantri" class="text-xl mb-1">Pengantri</label>
                        <select name="id_pengantri" id="id_pengantri"
                            class="py-2.5 sm:py-3 px-4 block w-full border border-gray-400 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            @foreach ($pengantri as $l)
                                <option value="{{ $l->id }}">{{ $l->nama_pengantri }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <div class="flex flex-col">
                    <label for="id_layanan" class="text-xl mb-1">Layanan</label>
                    <select name="id_layanan" id="id_layanan"
                        class="py-2.5 sm:py-3 px-4 block w-full border border-gray-400 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        @foreach ($layanan as $l)
                            <option value="{{ $l->id }}">{{ $l->nama_layanan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Submit</button>
                </div>
            </div>
        </div>
    </form>

@endsection

<script></script>
