@extends('layouts.admin')
@section('title', 'Kelola Informasi IIP')
@section('content')
    <h1 class="page-title">Kelola Informasi IIP</h1>
    @if(session('success')) <div class="alert-success">✅ {{ session('success') }}</div> @endif

    <div class="content-grid">
        <div class="card">
            <h3>Tambah Informasi Baru</h3>
            <form action="/admin/informasi" method="POST">
                @csrf
                <div class="form-group"><label>Judul Informasi</label>
                    <input type="text" name="judul" required placeholder="Contoh: Pendaftaran Magang MSIB">
                </div>
                <div class="form-group"><label>Kategori Baru/Ada</label>
                    <input type="text" name="kategori" required placeholder="Contoh: Magang / Akademik / Lomba">
                </div>
                <div class="form-group"><label>Isi Detail Informasi</label>
                    <textarea name="deskripsi" rows="3" required></textarea>
                </div>
                <div class="form-group"><label>Link Pendaftaran (Opsional)</label>
                    <input type="url" name="link_aksi" placeholder="https://...">
                </div>
                <button type="submit" class="btn-submit">+ Publikasikan</button>
            </form>
        </div>

        <div class="card">
            <h3>Daftar Informasi</h3>
            <table>
                <thead><tr><th>Informasi</th><th>Tanggal</th><th style="text-align: center;">Aksi</th></tr></thead>
                <tbody>
                    @foreach($informasi as $item)
                    <tr>
                        <td><strong>{{ $item->judul }}</strong><br>
                            <span style="font-size:0.8rem; background:#f39c12; color:white; padding:2px 6px; border-radius:4px;">{{ $item->kategori }}</span>
                        </td>
                        <td style="font-size:0.85rem; color:#555;">
                            Publikasi: {{ $item->created_at->format('d M Y') }}<br>
                            @if($item->created_at != $item->updated_at)
                                <span style="color:#e74c3c;">Edit: {{ $item->updated_at->format('d M Y') }}</span>
                            @endif
                        </td>
                        <td style="text-align: center;">
                            <div style="display: flex; justify-content: center; gap: 8px; align-items: center;">
                                <a href="/admin/informasi/edit/{{ $item->id }}" style="background: #3498db; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; font-size: 0.85rem;">Edit</a>
                                <form action="/admin/informasi/{{ $item->id }}" method="POST" style="margin: 0;" onsubmit="return confirm('Hapus informasi ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" style="background: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 0.85rem;">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection