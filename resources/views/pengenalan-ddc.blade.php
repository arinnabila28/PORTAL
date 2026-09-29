@extends('layouts.main')
@section('title', 'Apa Sih DDC Itu? - NODE.US')

@section('custom-css')
<style>
    *, *::before, *::after { box-sizing: border-box; }
    .container { max-width: 1000px; margin: 100px auto 40px auto; background: transparent; padding: 20px 40px; border-radius: 20px; box-shadow: none; text-align: left; }
    
    /* Judul Utama */
    h1 { font-family: 'Fredoka', sans-serif !important; font-weight: 700; font-size: 2.9rem; color: #fdf6ec; margin-top: 0; margin-bottom: 20px; letter-spacing: 2px; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000, 4px 4px 0 #000; }
    
    /* Tombol Kembali */
    .btn-back-home { display: inline-block; background: #cf3a20; color: #fff; padding: 8px 20px; border-radius: 20px; border: 2px solid #000; text-decoration: none; font-family: 'Fredoka', sans-serif !important; font-weight: 700; font-size: 1rem; margin-bottom: 30px; box-shadow: 2px 2px 0px #000; transition: 0.2s; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; }
    .btn-back-home:hover { background: #111; color: #ffd700; transform: translateY(-2px); text-shadow: none; }
    
    .intro-banner { background: rgba(255, 255, 255, 0.15); padding: 35px; border-radius: 15px; margin-bottom: 35px; border: 1px solid rgba(255, 255, 255, 0.3); }
    .intro-banner h2 { font-family: 'Fredoka One', cursive; color: #FFD700; margin-top: 0; font-size: 1.8rem; text-shadow: 1px 1px 0px rgba(0,0,0,0.2); margin-bottom: 15px; }
    .intro-banner p { font-family: 'Open Sauce', sans-serif; line-height: 1.8; color: white; margin: 0; font-size: 1.05rem; }
    .action-container { display: flex; gap: 15px; margin-top: 25px; flex-wrap: wrap; }
    .btn-action { background: #111; color: #fff; padding: 12px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 8px; transition: 0.2s; border: 1px solid rgba(255, 255, 255, 0.2); font-family: 'Open Sauce', sans-serif; }
    .btn-action:hover { background: #000; transform: translateY(-3px); border-color: #FFD700; }
    .btn-action.download { background: #cf3a20; border-color: #cf3a20; }
    .btn-action.download:hover { background: #a82e19; border-color: #FFD700; }
    
    .search-box { width: 100%; padding: 16px 25px; border-radius: 30px; border: none; background: rgba(255, 255, 255, 0.95); color: #333; font-weight: bold; font-size: 1.05rem; margin-bottom: 35px; outline: none; font-family: 'Open Sauce', sans-serif; transition: 0.3s; }
    .search-box:focus { box-shadow: 0 0 15px rgba(255, 215, 0, 0.5); }
    .search-box::placeholder { color: rgba(0, 0, 0, 0.4); font-weight: normal; }
    
    .ddc-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
    .ddc-card { background: rgba(255, 255, 255, 0.15); padding: 25px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.3); transition: 0.3s ease; display: flex; flex-direction: column; justify-content: center; }
    .ddc-card:hover { background: rgba(255, 255, 255, 0.25); transform: translateY(-5px); border-color: #FFD700; box-shadow: 0 5px 15px rgba(0,0,0,0.15);}
    .ddc-code { font-family: 'Fredoka One', cursive; color: #FFD700; font-size: 1.6rem; margin-bottom: 10px; text-shadow: 1px 1px 0 rgba(0,0,0,0.3);}
    .ddc-title { font-family: 'Open Sauce', sans-serif; color: white; font-weight: bold; font-size: 1.1rem; margin: 0; line-height: 1.4; }
</style>
@endsection

@section('content')
    <div class="container">
        <h1>Praktikum DDC</h1>
        <a href="/lab-klasifikasi" class="btn-back-home">🔙 Kembali ke Lab</a>

        <div class="intro-banner">
            <h2>Sebenarnya ini angka apa sih...? 🤔</h2>
            <p>Pasti kalian pernah lihat nomor-nomor yang ada di rak perpustakaan kan? Itu disebut dengan <strong>Nomor Klasifikasi</strong>. Nomor ini diatur dengan beberapa sistem, namun yang paling lazim digunakan adalah <em>Dewey Decimal Classification (DDC)</em>. Dalam sistem DDC, seluruh ilmu pengetahuan dibagi menjadi 10 kategori utama dari 000 sampai 900.</p>
            
            <!-- Tombol Folder Google Drive DDC & Akses e-DDC -->
            <div class="action-container">
                <a href="https://drive.google.com/drive/folders/1noofrFhHIMZ-xkvgqiqRD3ketFj6-cDw?usp=drive_link" target="_blank" class="btn-action download">📁 DDC 2023</a>
                <a href="https://www.oclc.org/en/dewey.html" target="_blank" class="btn-action">🌐 Akses e-DDC / WebDewey ↗</a>
            </div>
        </div>

        <input type="text" id="searchDDC" class="search-box" placeholder="Ketik kategori atau angka DDC (contoh: 300, Sains, Agama)..." onkeyup="filterDDC()">

        <div class="ddc-grid" id="ddcGrid">
            <div class="ddc-card" data-name="000 komputer informasi referensi umum">
                <div class="ddc-code">000</div><p class="ddc-title">Komputer, Informasi, dan Referensi Umum</p>
            </div>
            <div class="ddc-card" data-name="100 filsafat dan psikologi">
                <div class="ddc-code">100</div><p class="ddc-title">Filsafat dan Psikologi</p>
            </div>
            <div class="ddc-card" data-name="200 agama">
                <div class="ddc-code">200</div><p class="ddc-title">Agama</p>
            </div>
            <div class="ddc-card" data-name="300 ilmu sosial">
                <div class="ddc-code">300</div><p class="ddc-title">Ilmu Sosial</p>
            </div>
            <div class="ddc-card" data-name="400 bahasa">
                <div class="ddc-code">400</div><p class="ddc-title">Bahasa</p>
            </div>
            <div class="ddc-card" data-name="500 sains ilmu murni">
                <div class="ddc-code">500</div><p class="ddc-title">Sains</p>
            </div>
            <div class="ddc-card" data-name="600 teknologi ilmu terapan">
                <div class="ddc-code">600</div><p class="ddc-title">Teknologi</p>
            </div>
            <div class="ddc-card" data-name="700 seni dan rekreasi kesenian">
                <div class="ddc-code">700</div><p class="ddc-title">Seni dan Rekreasi</p>
            </div>
            <div class="ddc-card" data-name="800 sastra kesusastraan">
                <div class="ddc-code">800</div><p class="ddc-title">Sastra</p>
            </div>
            <div class="ddc-card" data-name="900 sejarah dan geografi">
                <div class="ddc-code">900</div><p class="ddc-title">Sejarah dan Geografi</p>
            </div>
        </div>
    </div>

    <script>
        function filterDDC() {
            let input = document.getElementById('searchDDC').value.toLowerCase();
            let cards = document.getElementsByClassName('ddc-card');
            for (let i = 0; i < cards.length; i++) {
                let text = cards[i].getAttribute('data-name');
                if (text.includes(input)) { cards[i].style.display = ""; } else { cards[i].style.display = "none"; }
            }
        }
    </script>
@endsection