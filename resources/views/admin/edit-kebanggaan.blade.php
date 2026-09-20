@extends('layouts.admin')

@section('title', 'Edit Tokoh')

@section('content')
    <h1 class="page-title">Edit Tokoh Kebanggaan</h1>

    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <form action="/admin/update/{{ $tokoh->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label>Nama Tokoh</label>
                <input type="text" name="nama" value="{{ $tokoh->nama }}" required>
            </div>
            
            <div class="form-group">
                <label>Prestasi / Keterangan</label>
                <input type="text" name="prestasi" value="{{ $tokoh->prestasi }}" required>
            </div>
            
            <div class="form-group">
                <label>Foto Saat Ini:</label><br>
                <img src="{{ asset('images/' . $tokoh->foto) }}" alt="Foto" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px; margin-bottom: 10px; background: #ef451e;">
                <label>Ganti Foto (Opsional, kosongkan jika tidak ingin diubah)</label>
                <input type="file" name="foto" accept="image/png,image/jpeg">
            </div>
            
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
            <a href="/admin" style="display: block; text-align: center; margin-top: 20px; color: #666; text-decoration: none;">← Batal / Kembali ke Dashboard</a>
        </form>
    </div>
@endsection