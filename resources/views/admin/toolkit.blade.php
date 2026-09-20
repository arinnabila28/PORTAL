@extends('layouts.admin')

@section('title', 'Kelola Student Toolkit')

@section('content')
    <h1 class="page-title">Kelola Student Toolkit</h1>
    
    @if (session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    <div class="content-grid">
        <!-- FORM TAMBAH -->
        <div class="card">
            <h3>Tambah Aplikasi Baru</h3>
            <form action="/admin/toolkit" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Aplikasi</label>
                    <input type="text" name="nama_aplikasi" required placeholder="Contoh: MarcEdit / Calibre / Fiji ImageJ">
                </div>
                <div class="form-group">
                    <label>Mata Kuliah Terkait</label>
                    <input type="text" name="mata_kuliah" required placeholder="Contoh: Organisasi Informasi / Katalogisasi">
                </div>
                <div class="form-group">
                    <label>Deskripsi Singkat</label>
                    <textarea name="deskripsi" rows="3" required placeholder="Aplikasi standar untuk mengedit dan memanipulasi metadata MARC 21..."></textarea>
                </div>
                <div class="form-group">
                    <label>Link Download Website Resmi</label>
                    <input type="url" name="link_download" required placeholder="https://marcedit.reeset.net/downloads">
                </div>
                <button type="submit" class="btn-submit">+ Tambahkan ke Toolkit</button>
            </form>
        </div>

        <!-- TABEL DATA -->
        <div class="card">
            <h3>Daftar Aplikasi</h3>
            <table>
                <thead>
                    <tr>
                        <th>Aplikasi & Matkul</th>
                        <th>Deskripsi & Link</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($toolkits as $tool)
                    <tr>
                        <td>
                            <strong>{{ $tool->nama_aplikasi }}</strong><br>
                            <span style="font-size: 0.8rem; background: #e24933; color: white; padding: 2px 6px; border-radius: 6px;">{{ $tool->mata_kuliah }}</span>
                        </td>
                        <td>
                            <p style="font-size: 0.85rem; margin: 0 0 5px 0;">{{ Str::limit($tool->deskripsi, 60) }}</p>
                            <a href="{{ $tool->link_download }}" target="_blank" style="font-size: 0.8rem; color: #3498db;">Cek Link</a>
                        </td>
                        <td style="text-align: center;">
                            <div style="display: flex; justify-content: center; gap: 8px; align-items: center;">
                                <a href="/admin/toolkit/edit/{{ $tool->id }}" style="background: #3498db; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; white-space: nowrap;">Edit</a>
        
                                <form action="/admin/toolkit/{{ $tool->id }}" method="POST" style="margin: 0;" onsubmit="return confirm('Hapus aplikasi ini dari Toolkit?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" style="background: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 0.85rem; white-space: nowrap;">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="3" style="text-align: center; padding: 30px; color: #888;">Belum ada data aplikasi.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection