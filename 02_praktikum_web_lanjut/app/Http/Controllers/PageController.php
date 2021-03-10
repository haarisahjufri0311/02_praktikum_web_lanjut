<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return  view('home');
    }
    public function about() {
        echo "1941720221<br>Haarisah Yustika Putri<br>TI-2A";
    }
    public function articles($id) {
        echo "Halaman artikel dengan ID ".$id;
    }
}
