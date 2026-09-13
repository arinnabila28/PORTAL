<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NODE.US - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sauce&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Fredoka One', cursive; 
            background: linear-gradient(to right, #f53d33, #fa924b);
            color: #fdf6ec;
            overflow-x: hidden;
        }

        /* Sidebar Tetap di Kiri, Warna Hitam */
        /* Sidebar dengan Gradasi Hitam ke Putih & Bisa Disembunyikan */
        .sidebar {
            position: fixed;
            top: 0;
            left: -280px;
            width: 260px;
            height: 100vh;
            background: linear-gradient(to bottom, #111111, #e0e0e0); /* Gradasi hitam ke putih/abu terang */
            display: flex;
            flex-direction: column;
            z-index: 2000; /* Pastikan z-index sangat tinggi agar berada di atas segalanya */
            box-shadow: 4px 0 20px rgba(0,0,0,0.4);
            transition: left 0.4s ease-in-out;
        }
        .sidebar.open {
            left: 0;
        }
        
        .sidebar-header {
            padding: 30px 20px;
            background: rgba(0, 0, 0, 0.4);
            color: #ffd700;
            text-align: center;
        }
        .sidebar-header h2 {
            margin: 0;
            font-family: 'Fredoka One', cursive;
            font-size: 1.5rem;
        }
        .sidebar-header p {
            margin: 5px 0 0 0;
            font-size: 0.85rem;
            color: #eee;
        }
        .sidebar-menu-list {
            overflow-y: auto;
            flex-grow: 1;
            padding: 15px 0;
        }
        .menu-item {
            color: #111; /* Teks menu dibuat gelap agar kontras dengan latar gradasi putih */
            text-decoration: none;
            padding: 15px 25px;
            font-family: 'Open Sauce', sans-serif;
            font-weight: bold;
            font-size: 0.95rem;
            display: block;
            transition: 0.2s;
        }
        .menu-item:hover, .menu-item.active {
            background: rgba(0, 0, 0, 0.1);
            border-left: 4px solid #f53d33;
            color: #f53d33;
        }

        /* Tombol Mengambang */
        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1500;
            background: #ffd700;
            color: #111;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            font-family: 'Fredoka One', cursive;
            font-size: 1rem;
            transition: 0.2s;
        }
        .toggle-btn:hover {
            background: #ffcc00;
            transform: scale(1.05);
        }

        .main-content {
            margin-left: 0 !important;
            padding: 40px;
        }
        
        /* Ikon Sidebar SVG */
        .menu-icon {
            width: 35px;
            height: 35px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .menu-icon:hover {
            transform: scale(1.1);
        }

        /* Konten Utama */
        .main-content {
            margin-left: 80px;
            padding: 20px 40px;
            min-height: 100vh;
        }

        /* Search Bar */
        .search-bar {
            background: rgba(255, 255, 255, 0.4);
            border-radius: 25px;
            padding: 10px 20px;
            width: 250px;
            display: flex;
            align-items: center;
            font-family: 'Open Sauce', sans-serif;
            font-weight: bold;
        }
        
        /* Ikon Search SVG */
        .search-icon {
            width: 20px;
            height: 20px;
        }

        .search-bar input {
            background: transparent;
            border: none;
            color: #fff;
            outline: none;
            margin-left: 10px;
            font-size: 1rem;
            width: 100%;
        }
        .search-bar input::placeholder {
            color: #fff;
        }

        /* Container Teks Melengkung SVG */
        .curved-title-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            width: 100%;
        }
        .curved-title-container svg {
            width: 500px;
            height: 120px;
            overflow: visible;
            filter: drop-shadow(2px 2px 0px #cf3a20);
        }
        .curved-text {
            font-family: 'Fredoka One', cursive;
            font-size: 45px;
            fill: #fdf6ec; 
            letter-spacing: 2px;
        }

        /* Area Carousel */
        .carousel-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            position: relative;
        }
        .nav-btn {
            background: transparent;
            border: none;
            font-size: 4rem;
            color: #ffd700; 
            cursor: pointer;
            z-index: 10;
            transition: transform 0.2s;
        }
        .nav-btn:hover {
            transform: scale(1.2);
        }

        .carousel-container {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 50px 20px;
            width: 75%;
            scrollbar-width: none; 
            align-items: flex-end;
        }
        .carousel-container::-webkit-scrollbar {
            display: none; 
        }

        /* Item Tokoh (Efek Outline Stiker) */
        .person-card {
            position: relative;
            flex: 0 0 auto;
            width: 200px;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .person-card img {
            width: auto;
            height: 350px;
            object-fit: contain; 
            /* Efek outline tebal putih/krem pada PNG transparan */
            filter: 
                drop-shadow(3px 0 0 #ffeb9d) 
                drop-shadow(-3px 0 0 #ffeb9d) 
                drop-shadow(0 3px 0 #ffeb9d) 
                drop-shadow(0 -3px 0 #ffeb9d)
                drop-shadow(0 10px 15px rgba(0,0,0,0.4));
        }

        /* Teks Info Tokoh (Miring & Kuning) */
        .person-info {
            position: absolute;
            bottom: 15px; 
            text-align: center;
            
            font-family: 'Arial Black', sans-serif;
            font-size: 1.5rem;
            color: #ffe673; 
            line-height: 1.1;
            
            /* Efek miring */
            font-style: italic;
            transform: rotate(-4deg);
            
            /* Efek outline hitam tebal pada teks */
            -webkit-text-stroke: 2px #111;
            text-shadow: 3px 3px 0px #111;
            
            z-index: 60;
        }
        .person-info span {
            font-size: 1rem;
            -webkit-text-stroke: 1.5px #111; 
        }

        /* Animasi Pop-up saat diarahkan kursor */
        .person-card:hover {
            transform: scale(1.15); 
            z-index: 50;
        }
        /* Kotak Berita */
        .berita-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 Kotak sejajar */
            gap: 30px;
            padding: 20px 80px 80px 80px;
        }
        .berita-card {
            background: rgba(255, 230, 200, 0.4); /* Efek kaca transparan oranye */
            border-radius: 20px;
            padding: 20px;
            text-decoration: none;
            color: #fdf6ec;
            display: flex;
            flex-direction: column;
            transition: 0.3s;
        }
        .berita-card:hover { transform: translateY(-8px); background: rgba(255, 230, 200, 0.6); }
        .berita-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 12px; margin-bottom: 15px; }
        .berita-card h3 { margin: 0 0 10px 0; font-family: 'Fredoka One', cursive; font-size: 1.3rem; }
        .berita-card p { margin: 0; font-family: 'Open Sauce', sans-serif; font-size: 0.9rem; line-height: 1.5; color: #fff; }
    </style>
</head>
<body>

    <!-- Sidebar -->
     <button class="toggle-btn" onclick="toggleSidebar()">☰ Menu</button>
   <aside class="sidebar">
        <div class="sidebar-header">
            <h2>NODE.US</h2>
            <p>Portal Akademik IIP</p>
        </div>
        
        <div class="sidebar-menu-list">
            <a href="/home" class="menu-item active">🏠 1. Beranda</a>
            <a href="/kurikulum" class="menu-item">📚 2. Akademik & Kurikulum</a>
            <a href="/lab-klasifikasi" class="menu-item">🔬 3. Lab Klasifikasi (DDC/UDC)</a>
            <a href="/repositori" class="menu-item">📂 4. Repositori & Publikasi</a>
            <a href="/alumni" class="menu-item">🎓 5. Jejak Alumni & Karier</a>
            <a href="/komunitas" class="menu-item">💬 6. Komunitas & Forum</a>
            <a href="/resource-hub" class="menu-item">🛠️ 7. Resource Hub & Bantuan</a>
        </div>
    </aside>

    <!-- Konten Utama -->
    <div class="main-content">
        <!-- Pencarian -->
        <div class="search-bar">
            <!-- Ikon Kaca Pembesar SVG -->
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="#fdf6ec" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text" placeholder="Mau kemana?">
        </div>

        <!-- Section Kebanggaan Teks Melengkung -->
        <div class="curved-title-container">
            <svg>
                <path id="curve-kebanggaan" d="M 50 100 Q 250 20 450 100" fill="transparent" />
                <text class="curved-text">
                    <textPath href="#curve-kebanggaan" startOffset="50%" text-anchor="middle">
                        Kebanggaan IIP
                    </textPath>
                </text>
            </svg>
        </div>
        
        <div class="carousel-wrapper">
            <button class="nav-btn" onclick="slide(-300)">&#xAB;</button>
            
            <div class="carousel-container" id="carousel">
                @foreach ($tokoh as $item)
                <div class="person-card">
                    <img src="{{ asset('images/' . $item->foto) }}" alt="{{ $item->nama }}">
                    <div class="person-info">
                        {{ strtoupper($item->nama) }}<br>
                        <span>{{ strtoupper($item->prestasi) }}</span>
                    </div>
                </div>
                @endforeach
            </div>

            <button class="nav-btn" onclick="slide(300)">&#xBB;</button>
        </div>

        <!-- Section Berita Terkini Teks Melengkung -->
        <div class="curved-title-container" style="margin-top: 50px;">
            <svg><path id="curve-berita" d="M 50 100 Q 250 20 450 100" fill="transparent" />
                <text class="curved-text"><textPath href="#curve-berita" startOffset="50%" text-anchor="middle">Berita Terkini</textPath></text>
            </svg>
        </div>

        <!-- Tombol Lihat Lebih Banyak -->
        <div style="display: flex; justify-content: flex-end; padding-right: 80px; margin-top: -30px; margin-bottom: 20px; position: relative; z-index: 20;">
            <a href="/semua-berita" style="color: #111; text-decoration: none; font-family: 'Open Sauce', sans-serif; font-weight: bold; font-size: 1rem; background: #ffd700; padding: 10px 20px; border-radius: 20px; transition: 0.3s; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
                Lihat Lebih Banyak &raquo;
            </a>
        </div>
        <!-- Grid Kotak Berita -->
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

    <!-- Script untuk tombol geser Muter (Infinite Loop) -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('appSidebar');
            sidebar.classList.toggle('open');
        }

        // Opsional: Menutup sidebar jika pengguna mengklik area di luar sidebar
        window.addEventListener('click', function(e) {
            const sidebar = document.getElementById('appSidebar');
            const toggleBtn = document.querySelector('.toggle-btn');
            
            if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target) && sidebar.classList.contains('open')) {
                sidebar.classList.remove('open');
            }
        });

        // Script Carousel yang sebelumnya (tetap dipertahankan)
        function slide(offset) {
            const container = document.getElementById('carousel');
            let maxScroll = container.scrollWidth - container.clientWidth;
            
            if (offset > 0 && container.scrollLeft >= maxScroll - 50) {
                container.scrollTo({ left: 0, behavior: 'smooth' }); 
            } 
            else if (offset < 0 && container.scrollLeft <= 50) {
                container.scrollTo({ left: maxScroll, behavior: 'smooth' }); 
            } 
            else {
                container.scrollBy({ left: offset, behavior: 'smooth' });
            }
        }
    </script>
</body>
</html>