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
}
