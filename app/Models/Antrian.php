<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    //
    protected $fillable = [
        'id_pengantri',
        'id_layanan',
        'antrian_dibuat',
        'antrian_ditutup'
    ];

    public function pengantri()
    {
        return $this->belongsTo(Pengantri::class, 'id_pengantri');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }
}
