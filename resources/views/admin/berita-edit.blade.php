@extends('layouts.admin')
@section('title', 'Edit Berita')
@section('content')
    <h1 class="page-title">Edit Berita</h1>
    <div class="card" style="max-width: 700px; margin: 0 auto;">
        <form action="/admin/berita/update/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group"><label>Judul Berita</label>
                <input type="text" name="judul" value="{{ $berita->judul }}" required>
            </div>
            <div class="form-group"><label>Cuplikan Singkat</label>
                <input type="text" name="cuplikan" value="{{ $berita->cuplikan }}" required>
            </div>
            <div class="form-group"><label>Isi Berita Lengkap</label>
                <textarea name="isi" rows="6" required>{{ $berita->isi }}</textarea>
            </div>
            <div class="form-group"><label>Gambar Saat Ini:</label><br>
                <img src="{{ asset('images/' . $berita->gambar) }}" style="width: 100px; border-radius: 8px; margin-bottom: 10px;">
                <label>Ganti Gambar (Opsional)</label>
                <input type="file" name="gambar" accept="image/*">
            </div>
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
            <a href="/admin/berita" style="display: block; text-align: center; margin-top: 20px; color: #666; text-decoration: none;">← Batal</a>
        </form>
    </div>
@endsection