@extends('layouts.admin')

@section('title', 'Kelola Berita Terkini')

@section('content')
    <h1 class="page-title">Kelola Berita Terkini</h1>
    
    @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    <div class="content-grid">
        <div class="card">
            <h3>Tulis Berita Baru</h3>
            <form action="/admin/berita/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Judul Berita</label>
                    <input type="text" name="judul" required placeholder="Masukkan judul berita...">
                </div>
                <div class="form-group">
                    <label>Cuplikan Singkat</label>
                    <input type="text" name="cuplikan" required placeholder="Tampil di kotak depan...">
                </div>
                <div class="form-group">
                    <label>Isi Berita Lengkap</label>
                    <textarea name="isi" rows="6" required placeholder="Tulis detail berita di sini..."></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar / Thumbnail Berita</label>
                    <input type="file" name="gambar" required accept="image/*">
                </div>
                <button type="submit" class="btn-submit">+ Publish Berita</button>
            </form>
        </div>

        <div class="card">
            <h3>Daftar Berita Saat Ini</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th><th>Gambar</th><th>Judul & Cuplikan</th><th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($berita as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><img src="{{ asset('images/' . $item->gambar) }}" alt="Berita" style="width: 80px; height: 60px;"></td>
                        <td>
                            <strong>{{ $item->judul }}</strong><br>
                            <span style="font-size: 0.85rem; color: #666;">{{ $item->cuplikan }}</span>
                        </td>
                        <td style="text-align: center;">
                            <div style="display: flex; justify-content: center; gap: 8px; align-items: center;">
                                <a href="/admin/berita/edit/{{ $item->id }}" style="background: #3498db; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; white-space: nowrap;">Edit</a>
        
                                <form action="/admin/berita/{{ $item->id }}" method="POST" style="margin: 0;" onsubmit="return confirm('Hapus berita ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" style="background: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 0.85rem; white-space: nowrap;">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" style="text-align: center; padding: 30px; color: #888;">Belum ada berita yang dipublikasikan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection