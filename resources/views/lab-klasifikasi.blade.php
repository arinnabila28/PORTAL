@extends('layouts.main')
@section('title', 'Lab Klasifikasi - NODE.US')

@section('custom-css')
<style>
    .container { max-width: 900px; margin: 50px auto; background: rgba(0,0,0,0.25); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); text-align: left; }
    
    /* Judul Utama */
    h1 { font-family: 'Fredoka', sans-serif !important; font-weight: 700; font-size: 2.9rem; color: #fdf6ec; margin-top: 0; margin-bottom: 20px; letter-spacing: 2px; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000, 4px 4px 0 #000; }
    
    /* Tombol Kembali */
    .btn-back-home { display: inline-block; background: #cf3a20; color: #fff; padding: 8px 20px; border-radius: 20px; border: 2px solid #000; text-decoration: none; font-family: 'Fredoka', sans-serif !important; font-weight: 700; font-size: 1rem; margin-bottom: 30px; box-shadow: 2px 2px 0px #000; transition: 0.2s; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; }
    .btn-back-home:hover { background: #111; color: #ffd700; transform: translateY(-2px); text-shadow: none; }
    
    p.subtitle { font-family: 'Open Sauce', sans-serif; line-height: 1.6; color: white; margin-bottom: 30px; font-size: 1.05rem; }
    .section-box { background: rgba(255,255,255,0.15); padding: 25px; border-radius: 15px; margin-top: 20px; transition: 0.3s ease; }
    .card-link { text-decoration: none; display: block; }
    .card-link .section-box:hover { background: rgba(255,255,255,0.25); transform: translateY(-3px); border: 1px solid rgba(255, 255, 255, 0.4); }
    .section-box h3 { margin-top: 0; font-family: 'Fredoka One', cursive; color: #ffd700; font-size: 1.3rem; }
    .section-box p { font-family: 'Open Sauce', sans-serif; line-height: 1.6; color: white; margin-bottom: 0; }
</style>
@endsection

@section('content')
    <div class="container">
        <h1>Lab Klasifikasi (DDC & UDC)</h1>
        <a href="/home" class="btn-back-home">🔙 Kembali ke Beranda</a>
        
        <p class="subtitle">Pusat simulasi, pencarian nomor kelas, dan latihan praktikum pengatalogan bahan pustaka.</p>
        
        <!-- Kartu 1: Pengenalan DDC -->
        <a href="/pengenalan-ddc" class="card-link">
            <div class="section-box">
                <h3>🔍 Apa Sih DDC Itu?</h3>
                <p>Pelajari 10 kelas utama dalam sistem Dewey Decimal Classification (DDC) dan temukan bagaimana ilmu pengetahuan dikategorikan di perpustakaan.</p>
            </div>
        </a>

        <!-- Kartu 2: Calculator DDC & Sistem Peminjaman -->
        <a href="/calculator-ddc" class="card-link">
            <div class="section-box">
                <h3>🧮 Classification Calculator</h3>
                <p>Gunakan fitur kalkulator DDC untuk simulasi pengatalogan secara cepat.</p>
            </div>
        </a>
    </div>
@endsection