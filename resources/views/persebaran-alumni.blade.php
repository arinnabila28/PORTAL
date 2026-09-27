@extends('layouts.main')

@section('title', 'Persebaran Alumni - NODE.US')

@section('custom-css')
<style>
    .persebaran-section {
        width: 100%;
        max-width: 1100px;
        margin: 20px auto 60px auto; 
        padding: 0 20px;
        text-align: center;
    }

    /* === JUDUL UTAMA === */
    .persebaran-title {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        font-size: 3.5rem;
        color: #fdf6ec; 
        margin-top: 0;
        margin-bottom: 20px;
        letter-spacing: 2px;
        text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000, 4px 4px 0 #000;
    }

    /* === TOMBOL KEMBALI === */
    .btn-back-home {
        display: inline-block;
        background: #cf3a20;
        color: #fff;
        padding: 8px 20px;
        border-radius: 20px;
        border: 2px solid #000;
        text-decoration: none;
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 40px;
        box-shadow: 2px 2px 0px #000;
        transition: 0.2s;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    }
    .btn-back-home:hover { background: #111; color: #ffd700; transform: translateY(-2px); text-shadow: none; }

    /* === GRID KARTU PERSEBARAN (Jika ditampilkan dalam bentuk list/kartu) === */
    .persebaran-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        text-align: left; 
    }

    .persebaran-card {
        background: rgba(255, 167, 147, 0.95);
        border: 3px solid #000;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 5px 5px 0px rgba(0,0,0,0.8);
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .persebaran-card:hover { transform: translateY(-5px); box-shadow: 8px 8px 0px rgba(0,0,0,0.9); }

    .daerah-name {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        font-size: 1.6rem;
        color: #fff; 
        margin: 0 0 15px 0;
        text-shadow: -1.5px -1.5px 0 #000, 1.5px -1.5px 0 #000, -1.5px 1.5px 0 #000, 1.5px 1.5px 0 #000, 2px 2px 0 #000;
    }

    .pekerjaan-list {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 600;
        font-size: 1.05rem;
        color: #111; 
        line-height: 1.6;
        margin: 0;
    }

    .empty-state { grid-column: 1 / -1; text-align: center; color: #fff; background: rgba(0,0,0,0.4); padding: 40px; border-radius: 12px; font-family: 'Fredoka', sans-serif !important; font-weight: 700; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; }

    @media (max-width: 900px) { .persebaran-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 600px) { .persebaran-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')
<div class="persebaran-section">
    
    <h2 class="persebaran-title">Persebaran Alumni</h2>
    
    <a href="/home" class="btn-back-home">🔙 Kembali ke Beranda</a>

    <!-- Container Data (Grid Kotak) -->
    <div class="persebaran-grid">
        @forelse ($persebaran as $lok) <!-- Pastikan variabel $lokasi sesuai dengan controller-mu -->
            <div class="persebaran-card">
                <h3 class="daerah-name">📍 {{ $lok->daerah }}</h3>
                
                <!-- nl2br agar daftar pekerjaan yang di-enter bisa turun ke bawah -->
                <p class="pekerjaan-list">{!! nl2br(e($lok->pekerjaan)) !!}</p>
            </div>
        @empty
            <div class="empty-state">
                Data persebaran alumni belum tersedia.
            </div>
        @endforelse
    </div>
</div>
@endsection