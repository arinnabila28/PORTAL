<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController; // Tambahkan ini

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

// Rute untuk Halaman Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/store', [AdminController::class, 'store']);

// Rute untuk Halaman Admin & Kebanggaan IIP
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/store', [AdminController::class, 'store']);

// Tambahan Rute Edit & Hapus
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::put('/admin/update/{id}', [AdminController::class, 'update']);
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);