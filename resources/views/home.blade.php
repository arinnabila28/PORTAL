@extends('layouts.main')

@section('title', 'Beranda - NODE.US')

@section('custom-css')
<!-- 1. WAJIB: Memuat CSS Swiper.js untuk Slider Animasi Infinite Loop -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Mengunci Halaman Beranda agar Rata Tengah Sempurna */
    .home-wrapper {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow: hidden; 
    }

    /* === JUDUL MELENGKUNG DI HOME PAGE (Efek Timbul & Bayangan dari kodemu) === */
    .curved-title-container { 
        display: flex; justify-content: center; align-items: center; margin-top: 30px; width: 100%; 
    }
    
    .curved-title-container svg { 
        width: 500px; height: 100px; overflow: visible; 
    }
    
    .curved-text { 
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 700 !important; /* Tetap tebal */
        font-size: 50px; 
        fill: #fdddb1; 
        letter-spacing: 2px; 
        
        /* EFEK TIMBUL 3D & BAYANGAN (Tanpa outline hitam) */
        text-shadow: 
            2px 2px 0px #cf3a20,   /* Lapisan ketebalan 1 (Merah bata) */
            4px 4px 0px #9e2a16,   /* Lapisan ketebalan 2 (Merah lebih gelap) */
            7px 7px 10px rgba(0,0,0,0.5); /* Bayangan halus agar mengambang */
    }

    /* =================================================== */
    /* CAROUSEL KEBANGGAAN IIP (SWIPER JS)                 */
    /* =================================================== */
    .carousel-wrapper { 
        width: 100%; 
        max-width: 1100px; 
        margin: 10px auto 0 auto; 
        position: relative; 
        padding: 0 50px; 
        box-sizing: border-box; /* KUNCI: Mencegah wadah melebar keluar layar */
    }

    .swiper-kebanggaan {
        width: 100%;
        padding: 30px 0; 
        overflow: hidden;
    }

    .swiper-slide {
        width: 200px; 
        display: flex;
        justify-content: center;
    }

    /* Tombol Navigasi Swiper */
    .swiper-button-next, .swiper-button-prev {
        color: #ffd700 !important; 
        font-weight: bold;
        transition: 0.2s;
    }
    
    /* Memaksa panah agar menempel pas di dalam batas layar */
    .swiper-button-next { right: 10px !important; }
    .swiper-button-prev { left: 10px !important; }

    .swiper-button-next:hover, .swiper-button-prev:hover {
        transform: scale(1.2);
    }
    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 2.5rem; 
        text-shadow: 2px 2px 0px #000;
    }

    /* Gaya Card Aslimu */
    .person-card { position: relative; width: 200px; transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer; display: flex; flex-direction: column; align-items: center; }
    .person-card img { width: auto; height: 330px; object-fit: contain; filter: drop-shadow(3px 0 0 #ffeb9d) drop-shadow(-3px 0 0 #ffeb9d) drop-shadow(0 3px 0 #ffeb9d) drop-shadow(0 -3px 0 #ffeb9d) drop-shadow(0 10px 15px rgba(0,0,0,0.4)); }
    
    /* KUNCI FONT KEBANGGAAN IIP AGAR TETAP PAKAI GAYA LAMA */
    .person-info { position: absolute; bottom: 15px; text-align: center; font-family: 'Arial Black', sans-serif !important; font-size: 1.4rem; color: #ffe673; line-height: 1.1; font-style: italic; transform: rotate(-4deg); -webkit-text-stroke: 2px #111; text-shadow: 3px 3px 0px #111; z-index: 60; width: 100%; }
    .person-info span { font-size: 0.95rem; -webkit-text-stroke: 1.5px #111; }
    .person-card:hover { transform: scale(1.15); z-index: 50; }

    /* Tombol "Lihat Lebih Banyak" & Grid Berita */
    .view-more-container { display: flex; justify-content: flex-end; width: 100%; max-width: 1100px; margin: 0 auto 15px auto; }
    .berita-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; width: 100%; max-width: 1100px; margin: 0 auto 60px auto; }
    .berita-card { background: rgba(255, 230, 200, 0.4); border-radius: 20px; padding: 20px; text-decoration: none; color: #fdf6ec; display: flex; flex-direction: column; transition: 0.3s; }
    .berita-card:hover { transform: translateY(-8px); background: rgba(255, 230, 200, 0.6); }
    .berita-card img { width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 15px; }
    
    /* FONT FREDOKA UNTUK JUDUL BERITA */
    .berita-card h3 { margin: 0 0 10px 0; font-family: 'Fredoka', sans-serif !important; font-size: 1.4rem; }
    
    /* FONT FREDOKA UNTUK DESKRIPSI BERITA */
    .berita-card p { margin: 0; font-family: 'Fredoka', sans-serif !important; font-size: 1.05rem; line-height: 1.5; color: #fff; }

    /* ========================================= */
    /* SECTION FITUR UNGGULAN (ANIMASI 3D)       */
    /* ========================================= */
    
    .fitur-unggulan-wrapper { width: 100%; max-width: 1200px; margin: 0 auto 80px auto; display: flex; overflow: hidden; min-height: 450px; }
    .fitur-box { flex: 1; padding: 60px 50px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; transition: transform 1.2s cubic-bezier(0.22, 1, 0.36, 1), opacity 1.2s ease-out; opacity: 0; }
    .box-left { background-color: #FFA793; color: #3D2115; clip-path: polygon(0 0, 100% 20%, 100% 80%, 0 100%); transform: translateX(-100%); }
    .box-right { background-color: #643E28; color: #FDF6EC; clip-path: polygon(0 20%, 100% 0, 100% 100%, 0 80%); transform: translateX(100%); margin-left: -1px; }
    .fitur-unggulan-wrapper.in-view .box-left { transform: translateX(0); opacity: 1; }
    .fitur-unggulan-wrapper.in-view .box-right { transform: translateX(0); opacity: 1; }

    /* FONT FREDOKA UNTUK JUDUL & DESKRIPSI FITUR UNGGULAN */
    .fitur-title { font-family: 'Fredoka', sans-serif !important; font-size: 2.5rem; margin: 0 0 15px 0; letter-spacing: 1px; }
    .fitur-desc { font-family: 'Fredoka', sans-serif !important; font-size: 1.2rem; line-height: 1.6; max-width: 90%; margin: 0; }
</style>
@endsection

@section('content')
<div class="home-wrapper">

    <!-- BAGIAN 1: KEBANGGAAN IIP -->
    <div class="curved-title-container">
        <svg viewBox="0 0 500 100"><path id="curve-kebanggaan" d="M 30 80 Q 250 10 470 80" fill="transparent" /><text class="curved-text"><textPath href="#curve-kebanggaan" startOffset="50%" text-anchor="middle">Kebanggaan IIP</textPath></text></svg>
    </div>
    
    <!-- Wadah Carousel (Swiper JS) -->
    <div class="carousel-wrapper">
        <div class="swiper swiper-kebanggaan">
            <div class="swiper-wrapper">
                
                @foreach ($tokoh as $item)
                <!-- Setiap tokoh dibungkus swiper-slide -->
                <div class="swiper-slide">
                    <div class="person-card">
                        <img src="{{ asset('images/' . $item->foto) }}" alt="{{ $item->nama }}">
                        <div class="person-info">{{ strtoupper($item->nama) }}<br><span>{{ strtoupper($item->prestasi) }}</span></div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Tombol Navigasi Bawaan Swiper -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!-- BAGIAN 2: BERITA TERKINI -->
    <div class="curved-title-container" style="margin-top: 40px;">
        <svg viewBox="0 0 500 100"><path id="curve-berita" d="M 30 80 Q 250 10 470 80" fill="transparent" /><text class="curved-text"><textPath href="#curve-berita" startOffset="50%" text-anchor="middle">Berita Terkini</textPath></text></svg>
    </div>

    <div class="view-more-container">
        <a href="/semua-berita" style="color: #111; text-decoration: none; font-family: 'Fredoka', sans-serif; font-weight: bold; font-size: 1rem; background: #ffd700; padding: 8px 18px; border-radius: 20px; transition: 0.3s; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
            Lihat Lebih Banyak &raquo;
        </a>
    </div>
    
    <div class="berita-grid">
        @foreach($berita as $item)
        <a href="/berita/{{ $item->id }}" class="berita-card">
            <img src="{{ asset('images/' . $item->gambar) }}" alt="Berita">
            <h3>{{ $item->judul }}</h3>
            <p>{{ $item->cuplikan }}</p>
        </a>
        @endforeach
    </div>

    <!-- BAGIAN 3: FITUR UNGGULAN (DENGAN ANIMASI) -->
    <div class="curved-title-container" style="margin-top: 20px;">
        <svg viewBox="0 0 500 100">
            <path id="curve-fitur" d="M 30 80 Q 250 10 470 80" fill="transparent" />
            <text class="curved-text"><textPath href="#curve-fitur" startOffset="50%" text-anchor="middle">Fitur Unggulan</textPath></text>
        </svg>
    </div>

    <div class="fitur-unggulan-wrapper" id="fiturAnimasi">
        <!-- Kotak Kiri (Teks Baru) -->
        <div class="fitur-box box-left">
            <h3 class="fitur-title">Informasi Seputar IIP</h3>
            <p class="fitur-desc">Memberikan informasi terkini seputar program studi Ilmu Informasi dan Perpustakaan yang berhubungan dengan magang, lomba, akademik, dan lain-lainnya.</p>
        </div>
        
        <!-- Kotak Kanan -->
        <div class="fitur-box box-right">
            <h3 class="fitur-title">Referensi Pembelajaran</h3>
            <p class="fitur-desc">Berisi referensi yang digunakan selama pembelajaran dari suatu mata kuliah. Referensi inilah yang menjadi acuan mahasiswa dalam mempelajari suatu mata kuliah tertentu.</p>
        </div>
    </div>

</div>
@endsection

@section('custom-js')
<!-- 2. WAJIB: Memuat Script JS Swiper.js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- SCRIPT CAROUSEL INFINITE LOOP ---
        const swiper = new Swiper('.swiper-kebanggaan', {
            loop: true,                 // Berputar tanpa batas
            slidesPerView: 'auto',      // Menyesuaikan jumlah card otomatis
            spaceBetween: 40,           // Jarak antar card
            centeredSlides: false,
            grabCursor: true,           // Bisa digeser kursor/swipe HP
            
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            autoplay: {
                delay: 3500, 
                disableOnInteraction: false,
            }
        });

        // --- SCRIPT SENSOR SCROLL (Fitur Unggulan) ---
        const fiturSection = document.getElementById('fiturAnimasi');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                }
            });
        }, { threshold: 0.3 });

        if (fiturSection) {
            observer.observe(fiturSection);
        }
    });
</script>
@endsection