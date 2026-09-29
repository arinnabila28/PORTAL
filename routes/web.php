<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Dari teman (untuk fitur repositori)
use Illuminate\Support\Str; // Dari teman (untuk fitur repositori)
use App\Http\Controllers\CourseController; // Dari teman
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\AdminBeritaController;
use App\Models\Berita;
use App\Http\Controllers\PersebaranController;
use App\Http\Controllers\ToolkitController;
use App\Http\Controllers\InformasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

// --- RUTE AUTENTIKASI (LOGIN & REGISTER) ---
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

// --- RUTE ADMIN (DIKUNCI OLEH MIDDLEWARE AUTH) ---
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/admin/store', [AdminController::class, 'store']);
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::put('/admin/update/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);
    
    Route::get('/admin/berita', [AdminBeritaController::class, 'index']);
    Route::post('/admin/berita/store', [AdminBeritaController::class, 'store']);
    Route::delete('/admin/berita/delete/{id}', [AdminBeritaController::class, 'destroy']);
    Route::get('/admin/berita/edit/{id}', [AdminBeritaController::class, 'edit']);
    Route::put('/admin/berita/update/{id}', [AdminBeritaController::class, 'update']);
    
    Route::get('/admin/persebaran', [PersebaranController::class, 'adminIndex']);
    Route::post('/admin/persebaran', [PersebaranController::class, 'store']);
    Route::delete('/admin/persebaran/{id}', [PersebaranController::class, 'destroy']);
    Route::get('/admin/persebaran/edit/{id}', [PersebaranController::class, 'edit']);
    Route::put('/admin/persebaran/update/{id}', [PersebaranController::class, 'update']);
    
    Route::get('/admin/toolkit', [ToolkitController::class, 'adminIndex']);
    Route::post('/admin/toolkit', [ToolkitController::class, 'store']);
    Route::delete('/admin/toolkit/{id}', [ToolkitController::class, 'destroy']);
    Route::get('/admin/toolkit/edit/{id}', [ToolkitController::class, 'edit']);
    Route::put('/admin/toolkit/update/{id}', [ToolkitController::class, 'update']);
    
    Route::get('/admin/informasi', [InformasiController::class, 'adminIndex']);
    Route::post('/admin/informasi', [InformasiController::class, 'store']);
    Route::get('/admin/informasi/edit/{id}', [InformasiController::class, 'edit']);
    Route::put('/admin/informasi/update/{id}', [InformasiController::class, 'update']);
    Route::delete('/admin/informasi/{id}', [InformasiController::class, 'destroy']);
});

// --- RUTE PUBLIK & PENGGUNA ---

// Berita, Home, & Search Global
Route::get('/berita/{id}', [HomeController::class, 'show']); 
Route::get('/semua-berita', [HomeController::class, 'semuaBerita']);
Route::get('/search', [HomeController::class, 'search']);

// Fitur User Lainnya
Route::get('/persebaran-alumni', [PersebaranController::class, 'index']);
Route::get('/student-toolkit', [ToolkitController::class, 'index']);
Route::get('/informasi', [InformasiController::class, 'index']);

// Sidebar Placeholder (Menu-menu kosong dari kamu)
Route::get('/alumni', function () { return view('menu-alumni'); });
Route::get('/komunitas', function () { return view('menu-komunitas'); });
Route::get('/resource-hub', function () { return view('menu-resource'); });

// --- RUTE FITUR TAMBAHAN DARI TEMAN ---

// 1. Kurikulum
Route::get('/kurikulum', function () { return view('menu-kurikulum'); });
Route::get('/katalog-matkul', [CourseController::class, 'index']);
Route::get('/peta-kurikulum', function () { return view('peta-kurikulum'); });

// 2. Lab Klasifikasi (DDC)
Route::get('/lab-klasifikasi', function () { return view('lab-klasifikasi'); }); // Merubah 'menu-lab' menjadi 'lab-klasifikasi' sesuai view teman
Route::get('/pengenalan-ddc', function () { return view('pengenalan-ddc'); });
Route::get('/calculator-ddc', function () { return view('calculator-ddc'); });

// 3. Repositori Karya IIP (Menggantikan /repositori yang kosong)
Route::get('/repositori', function (Request $request) {
    $semua_karya = [
        [
            'judul' => 'Literasi Digital Dalam Menghadapi Informasi Pandemi Covid-19 Pada Mahasiswa',
            'nama'  => 'Regita Al Hafidha',
            'jenis' => 'Skripsi',
            'tahun' => '2020',
            'gambar'=> 'https://placehold.co/400x300/f8f9fa/6c757d?text=PDF+\nRepositori',
            'link'  => 'https://repository.unair.ac.id/104369/'
        ],
        [
            'judul' => 'Pemenuhan Kebutuhan Informasi Pemustaka di Perpustakaan Universitas Airlangga',
            'nama'  => 'Muhammad Syaikhul Majduddin',
            'jenis' => 'Skripsi',
            'tahun' => '2019',
            'gambar'=> 'https://placehold.co/400x300/f8f9fa/6c757d?text=PDF+\nRepositori',
            'link'  => 'https://repository.unair.ac.id/82985/'
        ],
        [
            'judul' => 'Tingkat Literasi Media Sosial Mahasiswa Ilmu Informasi dan Perpustakaan',
            'nama'  => 'Dian Eka Putri', 
            'jenis' => 'Artikel',
            'tahun' => '2019',
            'gambar'=> 'https://placehold.co/400x300/f8f9fa/6c757d?text=PDF+\nRepositori',
            'link'  => 'https://repository.unair.ac.id/94887/'
        ],
        [
            'judul' => 'Analisis Sistem Informasi Perpustakaan (SIPUS) Menggunakan Model UTAUT',
            'nama'  => 'Bagas Dwi Santoso', 
            'jenis' => 'Skripsi',
            'tahun' => '2018',
            'gambar'=> 'https://placehold.co/400x300/f8f9fa/6c757d?text=PDF+\nRepositori',
            'link'  => 'https://repository.unair.ac.id/68427/'
        ]
    ];

    $karya_iip = collect($semua_karya);

    // Fitur Pencarian
    if ($request->filled('search')) {
        $search = strtolower($request->search);
        $karya_iip = $karya_iip->filter(function($karya) use ($search) {
            return Str::contains(strtolower($karya['judul']), $search) || 
                   Str::contains(strtolower($karya['nama']), $search);
        });
    }

    // Filter Dropdown
    if ($request->filled('jenis') && $request->jenis != 'Semua') {
        $karya_iip = $karya_iip->where('jenis', $request->jenis);
    }
    if ($request->filled('tahun') && $request->tahun != 'Semua') {
        $karya_iip = $karya_iip->where('tahun', $request->tahun);
    }

    // Jika di foldermu nama file blade-nya 'menu-repositori.blade.php', ubah 'repositori' di bawah menjadi 'menu-repositori'
    return view('repositori', ['karya_iip' => $karya_iip]);
});