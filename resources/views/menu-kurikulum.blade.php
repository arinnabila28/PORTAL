@extends('layouts.main')
@section('title', 'Kurikulum - NODE.US')
@section('custom-css')
<style>
    .container { max-width: 900px; margin: 0 auto; background: rgba(0,0,0,0.25); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
    h1 { font-family: 'Fredoka One', cursive; font-size: 2.5rem; margin-top: 0; text-shadow: 2px 2px 0px #cf3a20; }
    .section-box { background: rgba(255,255,255,0.15); padding: 25px; border-radius: 15px; margin-top: 20px; }
    .section-box h3 { margin-top: 0; font-family: 'Fredoka One', cursive; color: #ffd700; }
    p { font-family: 'Open Sauce', sans-serif; line-height: 1.6; }
</style>
@endsection
@section('content')
    <div class="container">
        <h1>Akademik & Kurikulum</h1>
        <p>Pusat informasi komprehensif mengenai peta jalur studi, silabus mata kuliah, hingga fasilitas laboratorium penunjang.</p>
        <div class="section-box">
            <h3>📌 Peta Kurikulum & Jalur Peminatan</h3>
            <p>Panduan terstruktur alur pengambilan SKS dari semester awal hingga akhir.</p>
        </div>
        <div class="section-box">
            <h3>📚 Katalog Mata Kuliah</h3>
            <p>Berisi Rencana Pembelajaran Semester (RPS), deskripsi mendalam, serta bentuk luaran (output) tugas perkuliahan.</p>
        </div>
    </div>
@endsection