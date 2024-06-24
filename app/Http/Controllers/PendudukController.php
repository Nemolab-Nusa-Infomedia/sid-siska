<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function indexPenduduk(){
        return view('menu.kependudukan.penduduk.index');
    }

    public function buatPenduduk(){
        return view('menu.kependudukan.penduduk.tambah');
    }

    public function ubahPenduduk(){
        return view('menu.kependudukan.penduduk.edit');
    }
}
