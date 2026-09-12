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

        /* Sidebar Kiri */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 80px;
            height: 100vh;
            background: linear-gradient(to bottom, #8a1c14, #e24933);
            display: flex;
            justify-content: center;
            padding-top: 20px;
            z-index: 100;
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
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Ikon Sidebar Kotak Belah SVG -->
        <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="#fdf6ec" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="4" ry="4"></rect>
            <line x1="9" y1="3" x2="9" y2="21"></line>
        </svg>
    </div>

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
            <svg>
                <path id="curve-berita" d="M 50 100 Q 250 20 450 100" fill="transparent" />
                <text class="curved-text">
                    <textPath href="#curve-berita" startOffset="50%" text-anchor="middle">
                        Berita Terkini
                    </textPath>
                </text>
            </svg>
        </div>
    </div>

    <!-- Script untuk tombol geser Kanan-Kiri -->
    <script>
        function slide(offset) {
            const container = document.getElementById('carousel');
            container.scrollLeft += offset;
        }
    </script>
</body>
</html>