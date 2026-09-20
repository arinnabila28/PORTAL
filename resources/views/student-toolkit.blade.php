@extends('layouts.main')

@section('title', 'Student Toolkit - NODE.US')

@section('custom-css')
<style>
    .toolkit-section {
        width: 100%;
        max-width: 1100px;
        margin: 20px auto 60px auto;
        padding: 0 20px;
    }

    .toolkit-title {
        font-family: 'Fredoka One', cursive !important;
        font-size: 3rem;
        color: #fff;
        margin-top: 0;
        margin-bottom: 40px;
        -webkit-text-stroke: 1.5px #000;
        text-shadow: 3px 3px 0 #000;
        letter-spacing: 1px;
    }

    /* Grid layout sesuai mockup */
    .toolkit-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    /* Desain Kotak Aplikasi */
    .toolkit-card {
        background: rgba(255, 167, 147, 0.95); /* Warna salem/peach */
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

    .app-name {
        font-family: 'Fredoka One', cursive !important;
        font-size: 1.6rem;
        color: #fff;
        margin: 0 0 5px 0;
        -webkit-text-stroke: 1px #000;
        text-shadow: 1px 1px 0 #000;
    }

    .app-course {
        font-family: 'Open Sauce', sans-serif;
        font-size: 0.85rem;
        background: #ffd700;
        color: #111;
        padding: 4px 10px;
        border-radius: 12px;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 15px;
        align-self: flex-start;
        border: 1px solid #000;
    }

    .app-desc {
        font-family: 'Open Sauce', sans-serif;
        font-size: 0.95rem;
        color: #222;
        line-height: 1.5;
        flex-grow: 1;
        margin-bottom: 20px;
    }

    .btn-download {
        background: #cf3a20;
        color: #fff;
        text-decoration: none;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        font-weight: bold;
        border: 2px solid #000;
        transition: 0.3s;
    }

    .btn-download:hover {
        background: #111;
        color: #ffd700;
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

    <div class="toolkit-grid">
        @forelse ($toolkits as $tool)
            <div class="toolkit-card">
                <h3 class="app-name">{{ $tool->nama_aplikasi }}</h3>
                <span class="app-course">Matkul: {{ $tool->mata_kuliah }}</span>
                <p class="app-desc">{{ $tool->deskripsi }}</p>
                <a href="{{ $tool->link_download }}" target="_blank" class="btn-download">Unduh Aplikasi ➔</a>
            </div>
        @empty
            <div style="grid-column: 1 / -1; text-align: center; color: #fff; background: rgba(0,0,0,0.2); padding: 40px; border-radius: 12px;">
                Belum ada aplikasi di dalam Toolkit.
            </div>
        @endforelse
    </div>
</div>
@endsection