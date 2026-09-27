@extends('layouts.main')

@section('title', 'Informasi Seputar IIP - NODE.US')

@section('custom-css')
<style>
    .info-section {
        width: 100%;
        max-width: 1100px;
        margin: 20px auto 60px auto;
        padding: 0 20px;
        text-align: left; /* Rata Kiri sesuai permintaan sebelumnya */
    }

    /* === JUDUL UTAMA (Fredoka Bold + Outline Bersih) === */
    .info-title {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        font-size: 2.6rem;
        color: #fdf6ec;
        margin-top: 0;
        margin-bottom: 15px;
        letter-spacing: 1px;
        /* Outline Bersih dengan Shadow 4 Arah */
        text-shadow: 
            -2px -2px 0 #000,  2px -2px 0 #000,
            -2px  2px 0 #000,  2px  2px 0 #000,
             4px  4px 0 #000;
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
        margin-bottom: 30px;
        box-shadow: 2px 2px 0px #000;
        transition: 0.2s;
        /* Outline Bersih */
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    }
    .btn-back-home:hover { background: #111; color: #ffd700; transform: translateY(-2px); text-shadow: none; }

    /* === FILTER KATEGORI === */
    .filter-container {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 40px;
    }
    .btn-filter {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        background: #ffb4a2;
        color: #111;
        padding: 8px 25px;
        border-radius: 25px;
        border: 2px solid #000;
        text-decoration: none;
        font-size: 1.1rem;
        box-shadow: 2px 2px 0px #000;
        transition: 0.2s;
    }
    .btn-filter:hover, .btn-filter.active { background: #fdf6ec; transform: translateY(-3px); box-shadow: 4px 4px 0px #000; }

    /* === GRID & KARTU INFORMASI === */
    .info-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; text-align: left; }
    
    .info-card {
        background: #ffb4a2;
        border: 3px solid #000;
        border-radius: 15px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        box-shadow: 6px 6px 0px rgba(0,0,0,0.8);
    }
    
    .card-title {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        font-size: 1.6rem;
        color: #fff;
        margin: 0 0 10px 0;
        /* Outline Bersih */
        text-shadow: -1.5px -1.5px 0 #000, 1.5px -1.5px 0 #000, -1.5px 1.5px 0 #000, 1.5px 1.5px 0 #000, 2px 2px 0 #000;
    }
    
    .card-category {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        background: #ffd700;
        border: 2px solid #000;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 0.95rem;
        margin-bottom: 10px;
        align-self: flex-start;
        color: #fff;
        letter-spacing: 0.5px;
        /* Outline Bersih */
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    }
    
    .card-date { font-family: 'Fredoka', sans-serif !important; font-weight: 600; font-size: 0.85rem; color: #444; margin-bottom: 15px; font-style: italic; }
    
    .card-desc {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 600;
        font-size: 1.05rem;
        color: #111;
        line-height: 1.6;
        flex-grow: 1;
        margin-bottom: 20px;
    }
    
    .btn-action {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700;
        background: #cf3a20;
        color: #fff;
        text-align: center;
        padding: 10px;
        border-radius: 8px;
        border: 2px solid #000;
        text-decoration: none;
        transition: 0.3s;
        /* Outline Bersih */
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    }
    .btn-action:hover { background: #111; color: #ffd700; text-shadow: none; }

    .empty-state { grid-column: 1 / -1; text-align: left; color: #fff; background: rgba(0,0,0,0.4); padding: 40px; border-radius: 12px; font-family: 'Fredoka', sans-serif !important; font-weight: 700; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; }

    @media (max-width: 900px) { .info-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 600px) { .info-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')
<div class="info-section">
    <h2 class="info-title">Informasi Seputar IIP</h2>
    <a href="/home" class="btn-back-home">🔙 Kembali ke Beranda</a>

    <div class="filter-container">
        <a href="?kategori=Semua" class="btn-filter {{ $kategori_aktif == 'Semua' ? 'active' : '' }}">Semua</a>
        @foreach($kategori_list as $kat)
            <a href="?kategori={{ urlencode($kat) }}" class="btn-filter {{ $kategori_aktif == $kat ? 'active' : '' }}">{{ $kat }}</a>
        @endforeach
    </div>

    <div class="info-grid">
        @forelse ($informasi as $info)
            <div class="info-card">
                <h3 class="card-title">{{ $info->judul }}</h3>
                <span class="card-category">Kategori: {{ $info->kategori }}</span>
                
                <div class="card-date">
                    📅 Dipublikasi: {{ $info->created_at->format('d M Y') }}
                    @if($info->created_at != $info->updated_at)
                        <br><span style="color:#cf3a20; font-size:0.75rem;">(Diedit: {{ $info->updated_at->format('d M Y') }})</span>
                    @endif
                </div>

                <p class="card-desc">{!! nl2br(e($info->deskripsi)) !!}</p>

                @if($info->link_aksi)
                    <a href="{{ $info->link_aksi }}" target="_blank" class="btn-action">Lihat Selengkapnya ➔</a>
                @endif
            </div>
        @empty
            <div class="empty-state">Belum ada informasi untuk kategori ini.</div>
        @endforelse
    </div>
</div>
@endsection