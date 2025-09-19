<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    Public function profile($nama="", $kelas="", $npm="") {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
             'npm' => $npm
        ];

        return view('profile', $data);
    }
}
