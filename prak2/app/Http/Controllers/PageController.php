<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo"Komang Gede Narariya Suputra 2041720225";
    }
    public function articles($id){
        echo"halaman artikel".$id;
    }
}
