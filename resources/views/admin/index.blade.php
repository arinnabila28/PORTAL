@extends('layouts.admin')

@section('title', 'Kelola Kebanggaan IIP')

@section('content')
    <h1 class="page-title">Kelola Kebanggaan IIP</h1>
    
    @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    <div class="content-grid">
        <div class="card">
            <h3>Tambah Data Baru</h3>
            <form action="/admin/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Tokoh</label>
                    <input type="text" name="nama" required placeholder="Contoh: Arin Nabilah">
                </div>
                <div class="form-group">
                    <label>Prestasi / Keterangan</label>
                    <input type="text" name="prestasi" required placeholder="Contoh: Mahasiswa Berprestasi">
                </div>
                <div class="form-group">
                    <label>Upload Foto Stiker (Wajib PNG)</label>
                    <input type="file" name="foto" required accept="image/png">
                </div>
                <button type="submit" class="btn-submit">+ Simpan Data</button>
            </form>
        </div>

        <div class="card">
            <h3>Daftar Data Saat Ini</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th><th>Foto</th><th>Nama & Prestasi</th><th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tokoh as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><img src="{{ asset('images/' . $item->foto) }}" alt="Foto"></td>
                        <td>
                            <strong>{{ $item->nama }}</strong><br>
                            <span style="font-size: 0.85rem; color: #666;">{{ $item->prestasi }}</span>
                        </td>
                        <td style="text-align: center; white-space: nowrap;">
                            <a href="/admin/edit/{{ $item->id }}" style="background: #3498db; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; margin-right: 5px;">Edit</a>
                            <form action="/admin/delete/{{ $item->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" style="background: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 0.85rem;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" style="text-align: center; padding: 30px; color: #888;">Belum ada data tokoh yang ditambahkan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection