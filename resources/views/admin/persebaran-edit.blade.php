@extends('layouts.admin')
@section('title', 'Edit Titik Persebaran')
@section('content')
    <h1 class="page-title">Edit Persebaran Alumni</h1>
    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <form action="/admin/persebaran/update/{{ $lokasi->id }}" method="POST">
            @csrf @method('PUT')
            <div class="form-group"><label>Nama Daerah</label>
                <input type="text" name="daerah" value="{{ $lokasi->daerah }}" required>
            </div>
            <div style="display: flex; gap: 15px;">
                <div class="form-group" style="flex: 1;"><label>Posisi X (%)</label>
                    <input type="number" step="0.1" name="posisi_x" value="{{ $lokasi->posisi_x }}" required>
                </div>
                <div class="form-group" style="flex: 1;"><label>Posisi Y (%)</label>
                    <input type="number" step="0.1" name="posisi_y" value="{{ $lokasi->posisi_y }}" required>
                </div>
            </div>
            <div class="form-group"><label>Daftar Pekerjaan</label>
                <textarea name="pekerjaan" rows="4" required>{{ $lokasi->pekerjaan }}</textarea>
            </div>
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
            <a href="/admin/persebaran" style="display: block; text-align: center; margin-top: 20px; color: #666; text-decoration: none;">← Batal</a>
        </form>
    </div>
@endsection