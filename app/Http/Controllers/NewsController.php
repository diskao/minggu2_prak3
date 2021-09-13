<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id){
        return "Berikut adalah berita ke-" .$id;
    }
}
