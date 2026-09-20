@extends('layouts.admin')
@section('title', 'Edit Student Toolkit')
@section('content')
    <h1 class="page-title">Edit Student Toolkit</h1>
    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <form action="/admin/toolkit/update/{{ $tool->id }}" method="POST">
            @csrf @method('PUT')
            <div class="form-group"><label>Nama Aplikasi</label>
                <input type="text" name="nama_aplikasi" value="{{ $tool->nama_aplikasi }}" required>
            </div>
            <div class="form-group"><label>Mata Kuliah Terkait</label>
                <input type="text" name="mata_kuliah" value="{{ $tool->mata_kuliah }}" required>
            </div>
            <div class="form-group"><label>Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="3" required>{{ $tool->deskripsi }}</textarea>
            </div>
            <div class="form-group"><label>Link Download</label>
                <input type="url" name="link_download" value="{{ $tool->link_download }}" required>
            </div>
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
            <a href="/admin/toolkit" style="display: block; text-align: center; margin-top: 20px; color: #666; text-decoration: none;">← Batal</a>
        </form>
    </div>
@endsection