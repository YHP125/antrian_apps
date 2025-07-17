<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Layanan;
use App\Models\Pengantri;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    //
    private function get_all_Antrian()
    {
        if (Auth::user()->id_role != 1) {
            $pengantriId = Pengantri::where('id_user', Auth::id())->value('id');

            $model = Antrian::with(['pengantri', 'layanan']) // eager load
                ->where('id_pengantri', $pengantriId)
                ->whereNotNull('antrian_ditutup')
                ->get();
        } else {
            $model = Antrian::with(['pengantri', 'layanan'])->get(); // eager load for admin too
        }
        return $model;
    }

    public function index()
    {
        $antrian = $this->get_all_Antrian();
        return view('antrian.antrian', compact('antrian'));
    }

    public function create_antrian(Request $request)
    {
        try {
            $id_pengantri = Auth::user()->id_role != 1
                ? Pengantri::where('id_user', Auth::id())->value('id')
                : $request->id_pengantri;

            $id_layanan = $request->id_layanan;

            Antrian::create([
                'id_pengantri' => $id_pengantri,
                'id_layanan' => $id_layanan,
                'antrian_dibuat' => now()
            ]);

            return redirect('/')->with('success', 'Antrian berhasil dibuat.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function antrianForm()
    {
        $pengantri = Auth::user()->id_role != 1
            ? null
            : Pengantri::all();
        $layanan = Layanan::all();

        return view('antrian.antrianForm', compact('pengantri', 'layanan'));
    }
}
