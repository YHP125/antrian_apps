<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    //
    private function get_all_Antrian()
    {
        $model = Antrian::all();
        return $model;
    }

    public function antrian_list()
    {
        $model = $this->get_all_Antrian();
        return view('antrian.antrian', $model);
    }
}
