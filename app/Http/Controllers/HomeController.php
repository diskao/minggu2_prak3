<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return "Selamat Datang di Halaman Website Jurusan Teknologi Informasi Politeknik Negeri Malang.";
    }
}
