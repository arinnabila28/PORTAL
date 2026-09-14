<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NODE.US - Portal Akademik')</title>
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

        /* --- HEADER MENGAMBANG & MENYATU (BLENDED) --- */
        .top-header {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 40px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            gap: 20px;
            z-index: 1000;
            background: linear-gradient(to right, #f53d33, #fa924b);
            /* Transisi halus saat shadow muncul dari JavaScript */
            transition: box-shadow 0.3s ease; 
        }

        /* Tombol Toggle Buka Sidebar */
        .toggle-btn {
            background: #111111;
            color: #ffd700;
            border: 2px solid #ffd700;
            padding: 10px 18px;
            border-radius: 12px;
            font-family: 'Fredoka One', cursive;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }
        .toggle-btn:hover { background: #ffd700; color: #111; transform: translateY(-2px); }

        /* Search Bar Dinamis */
        .search-bar {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 10px 20px;
            width: 300px;
            display: flex;
            align-items: center;
            font-family: 'Open Sauce', sans-serif;
            font-weight: bold;
            transition: 0.3s;
        }
        .search-bar:focus-within {
            background: rgba(255, 255, 255, 0.45);
            width: 350px; 
        }
        .search-icon { width: 20px; height: 20px; flex-shrink: 0; }
        .search-bar input { background: transparent; border: none; color: #fff; outline: none; margin-left: 10px; font-size: 1rem; width: 100%; font-family: inherit; }
        .search-bar input::placeholder { color: #fff; opacity: 0.8; }

        /* Sidebar & Overlay */
        .sidebar-overlay { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0, 0, 0, 0.5); backdrop-filter: blur(3px); z-index: 1999; opacity: 0; visibility: hidden; transition: all 0.3s ease; }
        .sidebar-overlay.active { opacity: 1; visibility: visible; }
        .sidebar { position: fixed; top: 15px; left: -320px; width: 280px; height: calc(100vh - 30px); background: linear-gradient(180deg, #181818 0%, #2c2c2c 50%, #e24933 100%); border-radius: 20px; box-shadow: 8px 0 25px rgba(0, 0, 0, 0.4); display: flex; flex-direction: column; z-index: 2000; transition: left 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); overflow: hidden; border: 1px solid rgba(255, 255, 255, 0.1); }
        .sidebar.open { left: 15px; }
        .sidebar-header { padding: 25px 20px 15px 20px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255, 255, 255, 0.15); }
        .sidebar-title { margin: 0; font-family: 'Fredoka One', cursive; font-size: 1.4rem; color: #ffd700; letter-spacing: 1px; }
        .close-btn { background: rgba(255, 255, 255, 0.1); border: none; color: #fff; font-size: 1.2rem; width: 32px; height: 32px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: 0.2s; }
        .close-btn:hover { background: #f53d33; color: #fff; }
        
        .sidebar-menu-list { padding: 15px 10px; overflow-y: auto; flex-grow: 1; }
        .sidebar-menu-list::-webkit-scrollbar { width: 5px; }
        .sidebar-menu-list::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 10px; }
        .menu-item { color: #fdf6ec; text-decoration: none; padding: 12px 18px; margin-bottom: 6px; font-family: 'Open Sauce', sans-serif; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 12px; border-radius: 12px; transition: all 0.25s ease; }
        .menu-item:hover { background: rgba(255, 255, 255, 0.15); color: #ffd700; transform: translateX(5px); }
        .menu-item.active { background: rgba(212, 178, 2, 0.2); color: #ffd700; border-left: 4px solid #ffd700; }

        /* Jarak Atas Konten (Agar tidak tertutup Header dan Pasti ke Tengah) */
        .main-content {
            padding: 120px 40px 40px 40px; 
            box-sizing: border-box; /* Kunci agar width 100% tidak tergeser padding */
            width: 100%;
        }

        /* Area CSS Khusus Halaman */
        @yield('custom-css')
    </style>
</head>
<body>

    <div class="top-header" id="mainHeader">
        <button class="toggle-btn" onclick="openSidebar()">
            <span>☰</span> Menu
        </button>

        <form action="/search" method="GET" class="search-bar">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="#fdf6ec" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <input type="text" name="q" placeholder="Cari fitur, materi, atau berita..." value="{{ request('q') }}" required>
        </form>
    </div>

    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>
    <aside class="sidebar" id="appSidebar">
        <div class="sidebar-header">
            <h2 class="sidebar-title">NODE.US</h2>
            <button class="close-btn" onclick="closeSidebar()">✕</button>
        </div>
        
        <div class="sidebar-menu-list">
            <a href="/home" class="menu-item {{ request()->is('home') ? 'active' : '' }}"><span>🏠</span> 1. Beranda</a>
            <a href="/kurikulum" class="menu-item {{ request()->is('kurikulum') ? 'active' : '' }}"><span>📚</span> 2. Akademik & Kurikulum</a>
            <a href="/lab-klasifikasi" class="menu-item {{ request()->is('lab-klasifikasi') ? 'active' : '' }}"><span>🔬</span> 3. Lab Klasifikasi</a>
            <a href="/repositori" class="menu-item {{ request()->is('repositori') ? 'active' : '' }}"><span>📂</span> 4. Repositori & Publikasi</a>
            <a href="/alumni" class="menu-item {{ request()->is('alumni') ? 'active' : '' }}"><span>🎓</span> 5. Jejak Alumni & Karier</a>
            <a href="/komunitas" class="menu-item {{ request()->is('komunitas') ? 'active' : '' }}"><span>💬</span> 6. Komunitas & Forum</a>
            <a href="/resource-hub" class="menu-item {{ request()->is('resource-hub') ? 'active' : '' }}"><span>🛠️</span> 7. Resource Hub</a>
        </div>
    </aside>

    <div class="main-content">
        @yield('content')
    </div>

    <script>
        function openSidebar() { document.getElementById('appSidebar').classList.add('open'); document.getElementById('sidebarOverlay').classList.add('active'); }
        function closeSidebar() { document.getElementById('appSidebar').classList.remove('open'); document.getElementById('sidebarOverlay').classList.remove('active'); }

        // Trik JavaScript: Header menyatu saat di atas, lalu muncul bayangan saat di-scroll ke bawah!
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 10) {
                header.style.boxShadow = '0 4px 15px rgba(0,0,0,0.2)';
            } else {
                header.style.boxShadow = 'none';
            }
        });
    </script>
    @yield('custom-js')
</body>
</html>