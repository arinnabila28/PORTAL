@extends('layouts.admin')
@section('title', 'Edit Informasi')
@section('content')
    <h1 class="page-title">Edit Informasi IIP</h1>
    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <form action="/admin/informasi/update/{{ $info->id }}" method="POST">
            @csrf @method('PUT')
            <div class="form-group"><label>Judul Informasi</label>
                <input type="text" name="judul" value="{{ $info->judul }}" required>
            </div>
            <div class="form-group"><label>Kategori</label>
                <input type="text" name="kategori" value="{{ $info->kategori }}" required>
            </div>
            <div class="form-group"><label>Isi Detail Informasi</label>
                <textarea name="deskripsi" rows="5" required>{{ $info->deskripsi }}</textarea>
            </div>
            <div class="form-group"><label>Link Pendaftaran (Opsional)</label>
                <input type="url" name="link_aksi" value="{{ $info->link_aksi }}">
            </div>
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
            <a href="/admin/informasi" style="display: block; text-align: center; margin-top: 20px; color: #666; text-decoration: none;">← Batal</a>
        </form>
    </div>
@endsection