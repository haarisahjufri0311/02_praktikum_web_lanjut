<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Muhammad Navis - 1941720147 - TI 2A";
    }
    public function artikel($id){
        return "Halaman Artikel" .$id;
    }
}