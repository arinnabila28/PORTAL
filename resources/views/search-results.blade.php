@extends('layouts.main')
@section('title', 'Hasil Pencarian - NODE.US')

@section('custom-css')
<style>
    .container { max-width: 1000px; margin: 100px auto 40px auto; background: rgba(0,0,0,0.25); padding: 40px; border-radius: 20px; text-align: left; }
    h1 { font-family: 'Fredoka', sans-serif !important; font-weight: 700; font-size: 2.5rem; color: #fdf6ec; margin-top: 0; margin-bottom: 10px; text-shadow: 2px 2px 0 #000; }
    .keyword-badge { background: #ffd700; color: #111; padding: 5px 15px; border-radius: 20px; font-weight: bold; }
    
    .section-title { font-family: 'Fredoka', sans-serif; color: #FFD700; border-bottom: 2px solid rgba(255,255,255,0.2); padding-bottom: 10px; margin-top: 40px; }
    .result-list { list-style: none; padding: 0; }
    .result-item { background: rgba(255,255,255,0.15); padding: 20px; border-radius: 12px; margin-bottom: 15px; transition: 0.3s; border: 1px solid rgba(255,255,255,0.2); }
    .result-item:hover { background: rgba(255,255,255,0.25); transform: translateY(-3px); }
    .result-item h3 { margin: 0 0 10px 0; font-family: 'Open Sauce', sans-serif; color: #fff; }
    .result-item a { color: #fff; text-decoration: none; }
    .result-item a:hover { color: #ffd700; }
    .badge { color: white; padding: 3px 10px; border-radius: 10px; font-size: 0.8rem; font-weight: bold; margin-right: 10px; }
    .empty-state { text-align: center; color: rgba(255,255,255,0.7); padding: 30px; font-style: italic; background: rgba(0,0,0,0.1); border-radius: 12px; }
</style>
@endsection

@section('content')
<div class="container">
    <h1>Hasil Pencarian</h1>
    <p style="color: white; font-size: 1.1rem;">Menampilkan hasil untuk: <span class="keyword-badge">"{{ $keyword }}"</span></p>

    <!-- 1. HASIL MENU & FITUR -->
    @if(count($matchedFeatures) > 0)
        <h2 class="section-title">🔗 Menu & Fitur Terkait</h2>
        <ul class="result-list">
            @foreach($matchedFeatures as $feat)
                <li class="result-item">
                    <a href="{{ $feat['url'] }}">
                        <h3><span class="badge" style="background:#9b59b6;">Menu</span> {{ $feat['judul'] }}</h3>
                        <p style="font-size: 0.9rem; color: #ddd; margin:0;">{{ $feat['deskripsi'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- 2. HASIL INFORMASI -->
    @if($matchedInformasi->count() > 0)
        <h2 class="section-title">📢 Informasi Seputar IIP</h2>
        <ul class="result-list">
            @foreach($matchedInformasi as $info)
                <li class="result-item">
                    <a href="/informasi?kategori={{ $info->kategori }}">
                        <h3><span class="badge" style="background:#3498db;">{{ $info->kategori }}</span> {{ $info->judul }}</h3>
                        <p style="font-size: 0.9rem; color: #ddd; margin:0;">{{ Str::limit($info->deskripsi, 80) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- 3. HASIL BERITA -->
    @if($matchedBerita->count() > 0)
        <h2 class="section-title">📰 Berita Terkait</h2>
        <ul class="result-list">
            @foreach($matchedBerita as $berita)
                <li class="result-item">
                    <a href="/berita/{{ $berita->id }}">
                        <h3><span class="badge" style="background:#e67e22;">Berita</span> {{ $berita->judul }}</h3>
                        <p style="font-size: 0.9rem; color: #ddd; margin:0;">{{ Str::limit($berita->cuplikan, 80) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- 4. HASIL KALKULATOR DDC -->
    @if($matchedDdc->count() > 0)
        <h2 class="section-title">🧮 Hasil dari Kalkulator DDC</h2>
        <ul class="result-list">
            @foreach($matchedDdc as $ddc)
                <li class="result-item">
                    <a href="/calculator-ddc">
                        <h3><span class="badge" style="background:#2ecc71;">{{ $ddc->nomor }}</span> {{ $ddc->subjek }}</h3>
                        <p style="font-size: 0.9rem; color: #ddd; margin:0;">Buka halaman kalkulator untuk melihat detail rinciannya.</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- 5. HASIL PERSEBARAN ALUMNI -->
    @if($matchedAlumni->count() > 0)
        <h2 class="section-title">📍 Data Persebaran Alumni</h2>
        <ul class="result-list">
            @foreach($matchedAlumni as $alumni)
                <li class="result-item">
                    <a href="/persebaran-alumni">
                        <h3><span class="badge" style="background:#e74c3c;">Area</span> {{ $alumni->daerah }}</h3>
                        <p style="font-size: 0.9rem; color: #ddd; margin:0;">{{ Str::limit($alumni->pekerjaan, 80) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- PESAN JIKA KOSONG SEMUA -->
    @if(count($matchedFeatures) == 0 && $matchedBerita->count() == 0 && $matchedInformasi->count() == 0 && $matchedDdc->count() == 0 && $matchedAlumni->count() == 0)
        <div class="empty-state">
            Wah, kami tidak menemukan hasil apapun yang cocok dengan kata kunci <strong>"{{ $keyword }}"</strong>.<br>
            Coba gunakan kata kunci lain yang lebih umum!
        </div>
    @endif
</div>
@endsection