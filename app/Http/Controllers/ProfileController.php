<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    Public function profile($nama="", $npm="", $kelas=""){
        $data =[
            'nama' => $nama,
            'npm' => $npm,
            'kelas'=> $kelas
        ];
        return view('profile', $data);
    }
}
