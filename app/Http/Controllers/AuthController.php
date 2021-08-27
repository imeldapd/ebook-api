<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119063,
            "Nama" => "Fabian Pizarro",
            "Gender" => "Laki-laki",
            "Phone" => 6295358659488,
            "Kelas" => "XII RPL 2"
        ];

    }

}