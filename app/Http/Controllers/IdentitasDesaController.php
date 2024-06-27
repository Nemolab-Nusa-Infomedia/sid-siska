<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentitasDesaController extends Controller
{
    public function index(){
        return view('menu.infoDesa.identitasDesa.index');
    }

    public function editIdentitasDesa(){
        return view('menu.infoDesa.identitasDesa.editIdentitasDesa');
    }
}
