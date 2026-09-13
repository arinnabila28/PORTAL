<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebanggaan;
use App\Models\Berita;

class HomeController extends Controller
{
    // Menampilkan halaman Home (Dibatasi 3 Berita Terbaru)
    public function index()
    {
        $tokoh = Kebanggaan::latest()->get(); 
        $berita = Berita::latest()->take(3)->get(); // Hanya ambil 3 data terbaru
        
        return view('home', compact('tokoh', 'berita'));
    }

    // Menampilkan halaman khusus berisi semua berita
    public function semuaBerita()
    {
        $berita = Berita::latest()->get(); // Ambil semua data berita
        
        return view('berita-semua', compact('berita'));
    }
}