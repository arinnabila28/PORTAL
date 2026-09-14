@extends('layouts.main')

@section('title', 'Beranda - NODE.US')

@section('custom-css')
<style>
    /* Mengunci Halaman Beranda agar Rata Tengah Sempurna */
    .home-wrapper {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center; /* Paksa semua elemen anak ke tengah */
    }

    /* Judul Melengkung SVG di Tengah */
    .curved-title-container { 
        display: flex; 
        justify-content: center; 
        align-items: center;
        margin-top: 30px; 
        width: 100%; 
    }
    .curved-title-container svg { 
        width: 500px; 
        height: 100px; 
        overflow: visible; 
        filter: drop-shadow(2px 2px 0px #cf3a20); 
    }
    .curved-text { 
        font-family: 'Fredoka One', cursive; 
        font-size: 42px; 
        fill: #fdf6ec; 
        letter-spacing: 2px; 
    }

    /* Carousel Tokoh */
    .carousel-wrapper { 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        margin: 10px auto 0 auto; 
        position: relative;
        width: 100%;
    }
    .nav-btn { background: transparent; border: none; font-size: 4rem; color: #ffd700; cursor: pointer; z-index: 10; transition: transform 0.2s; }
    .nav-btn:hover { transform: scale(1.2); }
    .carousel-container { display: flex; gap: 30px; overflow-x: auto; scroll-behavior: smooth; padding: 40px 20px; width: 80%; scrollbar-width: none; align-items: flex-end; justify-content: flex-start; }
    .carousel-container::-webkit-scrollbar { display: none; }

    .person-card { position: relative; flex: 0 0 auto; width: 200px; transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer; display: flex; flex-direction: column; align-items: center; }
    .person-card img { width: auto; height: 330px; object-fit: contain; filter: drop-shadow(3px 0 0 #ffeb9d) drop-shadow(-3px 0 0 #ffeb9d) drop-shadow(0 3px 0 #ffeb9d) drop-shadow(0 -3px 0 #ffeb9d) drop-shadow(0 10px 15px rgba(0,0,0,0.4)); }
    .person-info { position: absolute; bottom: 15px; text-align: center; font-family: 'Arial Black', sans-serif; font-size: 1.4rem; color: #ffe673; line-height: 1.1; font-style: italic; transform: rotate(-4deg); -webkit-text-stroke: 2px #111; text-shadow: 3px 3px 0px #111; z-index: 60; width: 100%; }
    .person-info span { font-size: 0.95rem; -webkit-text-stroke: 1.5px #111; }
    .person-card:hover { transform: scale(1.15); z-index: 50; }

    /* Tombol "Lihat Lebih Banyak" */
    .view-more-container {
        display: flex; 
        justify-content: flex-end; 
        width: 100%; 
        max-width: 1100px; 
        margin: 0 auto 15px auto; 
    }

    /* Grid Berita di Tengah */
    .berita-grid { 
        display: grid; 
        grid-template-columns: repeat(3, 1fr); 
        gap: 30px; 
        width: 100%; 
        max-width: 1100px; 
        margin: 0 auto 60px auto; 
    }
    .berita-card { 
        background: rgba(255, 230, 200, 0.4); 
        border-radius: 20px; 
        padding: 20px; 
        text-decoration: none; 
        color: #fdf6ec; 
        display: flex; 
        flex-direction: column; 
        transition: 0.3s; 
    }
    .berita-card:hover { transform: translateY(-8px); background: rgba(255, 230, 200, 0.6); }
    .berita-card img { width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 15px; }
    .berita-card h3 { margin: 0 0 10px 0; font-family: 'Fredoka One', cursive; font-size: 1.2rem; }
    .berita-card p { margin: 0; font-family: 'Open Sauce', sans-serif; font-size: 0.85rem; line-height: 1.5; color: #fff; }

    /* Responsif untuk Layar Kecil/Tablet */
    @media (max-width: 900px) {
        .berita-grid { grid-template-columns: repeat(2, 1fr); padding: 0 20px; }
    }
    @media (max-width: 600px) {
        .berita-grid { grid-template-columns: 1fr; padding: 0 20px; }
    }
</style>
@endsection

@section('content')
<div class="home-wrapper">

    <div class="curved-title-container">
        <svg viewBox="0 0 500 100">
            <path id="curve-kebanggaan" d="M 30 80 Q 250 10 470 80" fill="transparent" />
            <text class="curved-text"><textPath href="#curve-kebanggaan" startOffset="50%" text-anchor="middle">Kebanggaan IIP</textPath></text>
        </svg>
    </div>
    
    <div class="carousel-wrapper">
        <button class="nav-btn" onclick="slide(-300)">&#xAB;</button>
        <div class="carousel-container" id="carousel">
            @foreach ($tokoh as $item)
            <div class="person-card">
                <img src="{{ asset('images/' . $item->foto) }}" alt="{{ $item->nama }}">
                <div class="person-info">{{ strtoupper($item->nama) }}<br><span>{{ strtoupper($item->prestasi) }}</span></div>
            </div>
            @endforeach
        </div>
        <button class="nav-btn" onclick="slide(300)">&#xBB;</button>
    </div>

    <div class="curved-title-container" style="margin-top: 40px;">
        <svg viewBox="0 0 500 100">
            <path id="curve-berita" d="M 30 80 Q 250 10 470 80" fill="transparent" />
            <text class="curved-text"><textPath href="#curve-berita" startOffset="50%" text-anchor="middle">Berita Terkini</textPath></text>
        </svg>
    </div>

    <div class="view-more-container">
        <a href="/semua-berita" style="color: #111; text-decoration: none; font-family: 'Open Sauce', sans-serif; font-weight: bold; font-size: 0.95rem; background: #ffd700; padding: 8px 18px; border-radius: 20px; transition: 0.3s; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
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

</div>
@endsection

@section('custom-js')
<script>
    function slide(offset) {
        const container = document.getElementById('carousel');
        let maxScroll = container.scrollWidth - container.clientWidth;
        if (offset > 0 && container.scrollLeft >= maxScroll - 50) { container.scrollTo({ left: 0, behavior: 'smooth' }); } 
        else if (offset < 0 && container.scrollLeft <= 50) { container.scrollTo({ left: maxScroll, behavior: 'smooth' }); } 
        else { container.scrollBy({ left: offset, behavior: 'smooth' }); }
    }
</script>
@endsection