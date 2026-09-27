<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - NODE.US')</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sauce&display=swap" rel="stylesheet">
    <style>
        body { margin: 0; padding: 0; font-family: 'Open Sauce', sans-serif; display: flex; height: 100vh; background-color: #f4f6f9; color: #333; }
        
        /* Sidebar */
        .sidebar { width: 260px; background: linear-gradient(to bottom, #8a1c14, #e24933); color: #fdf6ec; display: flex; flex-direction: column; box-shadow: 4px 0 15px rgba(0,0,0,0.1); z-index: 1000; min-height: 100vh; position: fixed; top: 0; left: 0; overflow-y: auto; height: 100vh; }
        .sidebar-header { padding: 30px 20px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-header h2 { margin: 0; font-family: 'Arial Black', sans-serif; letter-spacing: 2px; font-size: 1.8rem; }
        .sidebar-header p { margin: 5px 0 0 0; font-size: 0.85rem; opacity: 0.8; }
        .sidebar-bottom { padding: 20px; margin-top: auto}
        .nav-links { list-style: none; padding: 0; margin: 0; flex-grow: 1; }
        .nav-links li { margin-bottom: 5px; }
        .nav-links a { display: block; color: #fdf6ec; text-decoration: none; padding: 15px 25px; font-weight: bold; transition: all 0.3s; border-left: 4px solid transparent; }
        .nav-links a:hover { background: rgba(255, 255, 255, 0.1); }
        .nav-links a.active { background: rgba(255, 255, 255, 0.2); border-left-color: #ffd700; color: #ffd700; }
        .back-to-web { padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); }
        .back-to-web a { display: block; text-align: center; background: rgba(0,0,0,0.3); color: #fff; text-decoration: none; padding: 12px; border-radius: 8px; font-size: 0.9rem; transition: 0.3s; margin-bottom: 12px;}
        .back-to-web a:hover { background: rgba(0,0,0,0.5); }
        .btn-logout { background: #e74c3c; color: white; width: 100%; padding: 12px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 0.9rem; transition: 0.3s; }
        .btn-logout:hover { background: #c0392b; transform: translateY(-2px); }

        /* Konten Utama */
        .main-content { flex-grow: 1; padding: 40px; overflow-y: auto; margin-left: 260px; width: calc(100% - 260px); min-height: 100vh;}
        .page-title { margin-top: 0; font-size: 2rem; color: #8a1c14; margin-bottom: 30px; }
        .alert-success { background-color: #d4edda; color: #155724; padding: 15px 20px; border-radius: 8px; border: 1px solid #c3e6cb; margin-bottom: 25px; font-weight: bold; }
        
        /* Layout Grid */
        .content-grid { display: grid; grid-template-columns: 1fr 1.5fr; gap: 30px; }
        .card { background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
        .card h3 { margin-top: 0; margin-bottom: 20px; color: #333; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; color: #555; }
        input[type="text"], input[type="file"], input[type="number"], textarea { width: 100%; padding: 12px; border-radius: 8px; border: 1px solid #ddd; box-sizing: border-box; font-family: inherit; background-color: #f9f9f9; resize: vertical;}
        input[type="text"]:focus, textarea:focus, input[type="number"]:focus { outline: none; border-color: #e24933; background-color: #fff; }
        button.btn-submit { width: 100%; padding: 14px; background-color: #ffd700; color: #111; border: none; border-radius: 8px; font-weight: bold; font-size: 1.1rem; cursor: pointer; transition: 0.3s; margin-top: 10px; }
        button.btn-submit:hover { background-color: #e6c200; transform: translateY(-2px); }

        /* Tabel */
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background-color: #f4f6f9; font-weight: bold; color: #666; }
        td img { width: 60px; height: 60px; object-fit: cover; border-radius: 8px; background-color: #ef451e; }
        
        @media (max-width: 1000px) { .content-grid { grid-template-columns: 1fr; } }
    </style>
    @yield('custom-css')
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>NODE.US</h2>
            <p>Admin Portal IIP</p>
        </div>
        <ul class="nav-links">
            <!-- Penanda menu aktif otomatis berdasarkan URL -->
            <li><a href="/admin" class="{{ Request::is('admin') ? 'active' : '' }}">❖ Kebanggaan IIP</a></li>
            <li><a href="/admin/berita" class="{{ Request::is('admin/berita') ? 'active' : '' }}">📝 Berita Terkini</a></li>
            <li><a href="/admin/persebaran" class="{{ Request::is('admin/persebaran') ? 'active' : '' }}">📍 Persebaran Alumni</a></li>
            <li><a href="/admin/toolkit" class="{{ Request::is('admin/toolkit') ? 'active' : '' }}">🛠️ Student Toolkit</a></li>
            <li><a href="/admin/informasi" class="{{ Request::is('admin/informasi*') ? 'active' : '' }}">📢 Informasi Seputar IIP</a></li>
            <li><a href="#">⚙️ Pengaturan Web</a></li>
        </ul>
        <div class="back-to-web">
            <a href="/home">← Kembali ke Website</a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn-logout">Log Out (Keluar)</button>
            </form>
        </div>
    </aside>

    <main class="main-content">
        @yield('content')
    </main>

</body>
</html>