<?php

use Illuminate\Support\Facades\Route;
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
// Hanya yang sudah login yang bisa mengakses rute di dalam grup ini
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/admin/store', [AdminController::class, 'store']);
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::put('/admin/update/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);
    Route::get('/admin/berita', [AdminBeritaController::class, 'index']);
    Route::post('/admin/berita/store', [AdminBeritaController::class, 'store']);
    Route::delete('/admin/berita/delete/{id}', [AdminBeritaController::class, 'destroy']);
    Route::get('/admin/berita/edit/{id}', [App\Http\Controllers\AdminBeritaController::class, 'edit']);
    Route::put('/admin/berita/update/{id}', [App\Http\Controllers\AdminBeritaController::class, 'update']);
    Route::get('/admin/persebaran', [PersebaranController::class, 'adminIndex']);
    Route::post('/admin/persebaran', [PersebaranController::class, 'store']);
    Route::delete('/admin/persebaran/{id}', [PersebaranController::class, 'destroy']);
    Route::get('/admin/persebaran/edit/{id}', [App\Http\Controllers\PersebaranController::class, 'edit']);
    Route::put('/admin/persebaran/update/{id}', [App\Http\Controllers\PersebaranController::class, 'update']);
    Route::get('/admin/toolkit', [ToolkitController::class, 'adminIndex']);
    Route::post('/admin/toolkit', [ToolkitController::class, 'store']);
    Route::delete('/admin/toolkit/{id}', [ToolkitController::class, 'destroy']);
    Route::get('/admin/toolkit/edit/{id}', [App\Http\Controllers\ToolkitController::class, 'edit']);
    Route::put('/admin/toolkit/update/{id}', [App\Http\Controllers\ToolkitController::class, 'update']);
    Route::get('/informasi', [InformasiController::class, 'index']);

Route::get('/admin/informasi', [InformasiController::class, 'adminIndex']);
Route::post('/admin/informasi', [InformasiController::class, 'store']);
Route::get('/admin/informasi/edit/{id}', [InformasiController::class, 'edit']);
Route::put('/admin/informasi/update/{id}', [InformasiController::class, 'update']);
Route::delete('/admin/informasi/{id}', [InformasiController::class, 'destroy']);
});

// Rute Halaman Detail Berita (Publik)
Route::get('/berita/{id}', [AdminBeritaController::class, 'show']);

// Rute Publik (Bisa diakses tanpa login)
Route::get('/', function () { return view('welcome'); });
Route::get('/home', [HomeController::class, 'index']);
Route::get('/berita/{id}', [HomeController::class, 'show']); 

// Tambahkan rute ini untuk melihat semua berita
Route::get('/semua-berita', [HomeController::class, 'semuaBerita']);

// Rute untuk Menu Utama di Sidebar
Route::get('/kurikulum', function () { return view('menu-kurikulum'); });
Route::get('/lab-klasifikasi', function () { return view('menu-lab'); });
Route::get('/repositori', function () { return view('menu-repositori'); });
Route::get('/alumni', function () { return view('menu-alumni'); });
Route::get('/komunitas', function () { return view('menu-komunitas'); });
Route::get('/resource-hub', function () { return view('menu-resource'); });
Route::get('/semua-berita', [HomeController::class, 'semuaBerita']); 

// Tambahkan rute Search Global ini:
Route::get('/search', [HomeController::class, 'search']);

// Route User 
Route::get('/persebaran-alumni', [PersebaranController::class, 'index']);
Route::get('/student-toolkit', [ToolkitController::class, 'index']);