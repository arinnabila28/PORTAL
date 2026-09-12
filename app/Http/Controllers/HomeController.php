<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebanggaan; // Memanggil model database

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel kebanggaans
        $tokoh = Kebanggaan::all(); 
        return view('home', compact('tokoh')); // Mengirim data ke home.blade.php
    }
}