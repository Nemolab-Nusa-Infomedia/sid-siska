<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function createAcc(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $validation['name'],
            'email' => $validation['email'],
            'password' => Hash::make($validation['password']),
        ]);
        return redirect()->route('kependudukan-penduduk');
    }
}
