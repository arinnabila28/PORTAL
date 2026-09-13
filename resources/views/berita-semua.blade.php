<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Berita - NODE.US</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sauce&display=swap" rel="stylesheet">
    <style>
        body { background: linear-gradient(to right, #f53d33, #fa924b); color: #fdf6ec; font-family: 'Open Sauce', sans-serif; margin: 0; padding: 40px; min-height: 100vh; }
        .header { display: flex; align-items: center; margin-bottom: 40px; }
        .btn-back { padding: 10px 20px; background: #ffd700; color: #111; text-decoration: none; font-weight: bold; border-radius: 8px; margin-right: 30px; }
        h1 { font-family: 'Fredoka One', cursive; font-size: 2.5rem; margin: 0; text-shadow: 2px 2px 0px #cf3a20; }
        
        .berita-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .berita-card { background: rgba(255, 230, 200, 0.4); border-radius: 20px; padding: 20px; text-decoration: none; color: #fdf6ec; display: flex; flex-direction: column; transition: 0.3s; }
        .berita-card:hover { transform: translateY(-8px); background: rgba(255, 230, 200, 0.6); }
        .berita-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 12px; margin-bottom: 15px; }
        .berita-card h3 { margin: 0 0 10px 0; font-family: 'Fredoka One', cursive; font-size: 1.3rem; }
        .berita-card p { margin: 0; font-size: 0.9rem; line-height: 1.5; color: #fff; }
    </style>
</head>
<body>
    <div class="header">
        <a href="/home" class="btn-back">← Kembali ke Beranda</a>
        <h1>Semua Berita Terkini</h1>
    </div>

    <div class="berita-grid">
        @forelse($berita as $item)
            <a href="/berita/{{ $item->id }}" class="berita-card">
                <img src="{{ asset('images/' . $item->gambar) }}" alt="Berita">
                <h3>{{ $item->judul }}</h3>
                <p>{{ $item->cuplikan }}</p>
            </a>
        @empty
            <p style="font-size: 1.2rem; font-weight: bold;">Belum ada berita yang diunggah.</p>
        @endforelse
    </div>
</body>
</html>