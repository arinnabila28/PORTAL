@extends('layouts.main')

@section('title', 'Student Toolkit - NODE.US')

@section('custom-css')
<style>
    .toolkit-section {
        width: 100%;
        max-width: 1100px;
        margin: 20px auto 60px auto; 
        padding: 0 20px;
        text-align: center;
    }

    /* === JUDUL UTAMA === */
    .toolkit-title {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700; /* BOLD */
        font-size: 3.5rem;
        color: #fdf6ec; /* Putih Tulang */
        margin-top: 0;
        margin-bottom: 20px;
        letter-spacing: 2px;
        
        /* SOLUSI GARIS DALAM: Menggunakan multiple text-shadow */
        text-shadow: 
            -2px -2px 0 #000,  
             2px -2px 0 #000,
            -2px  2px 0 #000,
             2px  2px 0 #000,
             4px  4px 0 #000; /* Drop shadow bayangan asli */
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
        font-weight: 700; /* BOLD */
        font-size: 1rem;
        margin-bottom: 40px;
        box-shadow: 2px 2px 0px #000;
        transition: 0.2s;
        letter-spacing: 0.5px;
        
        /* Outline Bersih */
        text-shadow: 
            -1px -1px 0 #000, 1px -1px 0 #000, 
            -1px  1px 0 #000, 1px  1px 0 #000;
    }
    .btn-back-home:hover { 
        background: #111; 
        color: #ffd700; 
        transform: translateY(-2px); 
        text-shadow: none; 
    }

    /* === CSS GRID KOTAK TOOLKIT === */
    .toolkit-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        text-align: left; 
    }

    .toolkit-card {
        background: rgba(255, 167, 147, 0.95);
        border: 3px solid #000;
        border-radius: 20px;
        padding: 25px;
        display: flex;
        flex-direction: column;
        box-shadow: 5px 5px 0px rgba(0,0,0,0.8);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .toolkit-card:hover {
        transform: translateY(-5px);
        box-shadow: 8px 8px 0px rgba(0,0,0,0.9);
    }

    /* NAMA APLIKASI */
    .app-name {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700; /* BOLD */
        font-size: 1.6rem;
        color: #fff; 
        margin: 0 0 10px 0;
        
        /* Outline Bersih */
        text-shadow: 
            -1.5px -1.5px 0 #000,  1.5px -1.5px 0 #000,
            -1.5px  1.5px 0 #000,  1.5px  1.5px 0 #000,
             2px 2px 0 #000; /* Bayangan kecil */
    }

    /* NAMA MATKUL */
    .app-course {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700; /* BOLD */
        font-size: 0.95rem;
        background: #ffd700;
        color: #111;
        padding: 6px 12px;
        border-radius: 12px;
        display: inline-block;
        margin-bottom: 15px;
        align-self: flex-start;
        border: 2px solid #000;
    }

    /* DESKRIPSI */
    .app-desc {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 600; /* SEMI-BOLD */
        font-size: 1.05rem;
        color: #111; 
        line-height: 1.5;
        flex-grow: 1;
        margin-bottom: 20px;
    }

    /* TOMBOL DOWNLOAD */
    .btn-download {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700; /* BOLD */
        background: #cf3a20;
        color: #fff; 
        text-decoration: none;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        border: 2px solid #000;
        transition: 0.3s;
        letter-spacing: 0.5px;
        
        /* Outline Bersih */
        text-shadow: 
            -1px -1px 0 #000, 1px -1px 0 #000, 
            -1px  1px 0 #000, 1px  1px 0 #000;
    }

    .btn-download:hover {
        background: #111;
        color: #ffd700;
        text-shadow: none; 
    }

    /* TEKS JIKA KOSONG */
    .empty-state {
        grid-column: 1 / -1; 
        text-align: center; 
        color: #fff; 
        background: rgba(0,0,0,0.4); 
        padding: 40px; 
        border-radius: 12px; 
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        
        /* Outline Bersih */
        text-shadow: 
            -1px -1px 0 #000, 1px -1px 0 #000, 
            -1px  1px 0 #000, 1px  1px 0 #000;
    }

    @media (max-width: 900px) {
        .toolkit-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 600px) {
        .toolkit-grid { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
<div class="toolkit-section">
    
    <h2 class="toolkit-title">Student Toolkit</h2>
    
    <a href="/home" class="btn-back-home">🔙 Kembali ke Beranda</a>

    <div class="toolkit-grid">
        @forelse ($toolkits as $tool)
            <div class="toolkit-card">
                <h3 class="app-name">{{ $tool->nama_aplikasi }}</h3>
                <span class="app-course">Matkul: {{ $tool->mata_kuliah }}</span>
                <p class="app-desc">{!! nl2br(e($tool->deskripsi)) !!}</p>
                <a href="{{ $tool->link_download }}" target="_blank" class="btn-download">Unduh Aplikasi ➔</a>
            </div>
        @empty
            <div class="empty-state">
                Belum ada aplikasi di dalam Toolkit.
            </div>
        @endforelse
    </div>
</div>
@endsection