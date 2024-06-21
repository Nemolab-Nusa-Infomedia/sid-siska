<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config(){
        return view('install.config');
    }

    public function configDatabase(){
        return view('install.form-database');
    }

    public function confirmDatabase(){
        return view('install.confirm-database');
    }

    public function configAkun(){
        return view('install.form-akun');
    }
}
