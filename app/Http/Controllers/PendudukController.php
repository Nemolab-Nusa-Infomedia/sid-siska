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

    public function detailPenduduk(){
        return view('menu.kependudukan.penduduk.biodata.index');
    }

    public function cetakDetailPenduduk(){
        return view('menu.kependudukan.penduduk.biodata.cetakBiodata.index');
    }

    public function ubahPenduduk(){
        return view('menu.kependudukan.penduduk.edit');
    }

    public function hapusPenduduk(){
        
    }
}
