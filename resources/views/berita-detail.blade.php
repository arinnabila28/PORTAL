<!DOCTYPE html>
<html lang="id">
<head>
    <title>{{ $berita->judul }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sauce&display=swap" rel="stylesheet">
    <style>
        body { background: linear-gradient(to right, #f53d33, #fa924b); color: #fdf6ec; font-family: 'Open Sauce', sans-serif; margin: 0; padding: 40px; }
        .container { max-width: 800px; margin: auto; background: rgba(0,0,0,0.2); padding: 40px; border-radius: 20px; }
        h1 { font-family: 'Fredoka One', cursive; margin-top: 0; }
        .tanggal { font-size: 0.9rem; color: #ffd700; margin-bottom: 20px; }
        .diedit { color: #ccc; font-style: italic; font-size: 0.8rem; margin-left: 10px; }
        img { width: 100%; border-radius: 15px; margin-bottom: 20px; max-height: 400px; object-fit: cover; }
        .isi-berita { line-height: 1.8; font-size: 1.05rem; }
        .btn-back { display: inline-block; padding: 10px 20px; background: #ffd700; color: #111; text-decoration: none; font-weight: bold; border-radius: 8px; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $berita->judul }}</h1>
        <div class="tanggal">
            Dipublikasikan: {{ $berita->created_at->format('d M Y') }}
            <!-- Logika deteksi perubahan berita -->
            @if($berita->created_at->ne($berita->updated_at))
                <span class="diedit">(Diedit: {{ $berita->updated_at->format('d M Y') }})</span>
            @endif
        </div>
        <img src="{{ asset('images/' . $berita->gambar) }}">
        <div class="isi-berita">
            {!! nl2br(e($berita->isi)) !!}
        </div>
        <a href="/home" class="btn-back">← Kembali ke Beranda</a>
    </div>
</body>
</html>