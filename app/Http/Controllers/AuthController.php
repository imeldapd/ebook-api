<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119090,
            "Nama" => "Imelda Alfiana Palupi Dewi",
            "Gender" => "Female",
            "Phone" => 682135374187,
            "Kelas" => "XII RPL 3"
        ];
    }

}