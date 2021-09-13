<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSController extends Controller
{
    public function MI(){
        return "Selamat Datang di Program Studi Manajemen Informatika";
    }

    public function TI(){
        return "Selamat Datang di Program Studi Teknik Informatika";
    }
}
