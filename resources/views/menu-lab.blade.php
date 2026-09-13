<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lab Klasifikasi - NODE.US</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sauce&display=swap" rel="stylesheet">
    <style>
        body { background: linear-gradient(to right, #f53d33, #fa924b); color: #fdf6ec; font-family: 'Open Sauce', sans-serif; margin: 0; padding: 40px; min-height: 100vh; }
        .container { max-width: 900px; margin: auto; background: rgba(0,0,0,0.25); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        h1 { font-family: 'Fredoka One', cursive; font-size: 2.5rem; margin-top: 0; text-shadow: 2px 2px 0px #cf3a20; }
        .section-box { background: rgba(255,255,255,0.15); padding: 25px; border-radius: 15px; margin-top: 20px; }
        .section-box h3 { margin-top: 0; font-family: 'Fredoka One', cursive; color: #ffd700; }
        .search-box { display: flex; gap: 10px; margin-top: 15px; }
        .search-box input { flex-grow: 1; padding: 12px; border-radius: 8px; border: none; font-family: inherit; }
        .search-box button { padding: 12px 20px; background: #ffd700; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; }
        .btn-back { display: inline-block; padding: 10px 20px; background: #ffd700; color: #111; text-decoration: none; font-weight: bold; border-radius: 8px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <a href="/home" class="btn-back">← Kembali ke Beranda</a>
        <h1>Lab Klasifikasi (DDC & UDC Center)</h1>
        <p>Pusat simulasi, pencarian nomor kelas, dan latihan praktikum pengatalogan bahan pustaka.</p>
        
        <div class="section-box">
            <h3>🔍 Mesin Pencari Klasifikasi DDC/UDC</h3>
            <p>Masukkan subjek atau kata kunci buku untuk menemukan estimasi nomor klasifikasi Dewey Decimal Classification atau Universal Decimal Classification secara cepat.</p>
            <div class="search-box">
                <input type="text" placeholder="Contoh: Kecerdasan Buatan, Sejarah Indonesia...">
                <button type="button">Cari Nomor</button>
            </div>
        </div>

        <div class="section-box">
            <h3>📦 Sistem Peminjaman & Cek Status Koleksi Lab</h3>
            <p>Cek ketersediaan alat ukur bibliometrik, modul cetak tabel klasifikasi, dan peminjaman kit praktik laboratorium.</p>
        </div>

        <div class="section-box">
            <h3>📝 Lembar Latihan & Studi Kasus</h3>
            <p>Kumpulan modul lembar kerja mandiri untuk mengasah kemampuan analisis subjek dan penentuan tajuk subjek (Sertifikasi Pengatalog).</p>
        </div>
    </div>
</body>
</html>