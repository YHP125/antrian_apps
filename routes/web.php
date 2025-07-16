<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('antrian.antrian');
});

Route::get('/', function () {
    return view('antrian.antrianForm');
});
