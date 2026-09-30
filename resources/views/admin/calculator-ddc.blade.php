@extends('layouts.admin')
@section('title', 'Kelola Kalkulator DDC')

@section('content')
    <h1 class="page-title">Kelola Database Kalkulator DDC</h1>
    @if(session('success')) <div class="alert-success">✅ {{ session('success') }}</div> @endif

    <div class="content-grid">
        <!-- Form Tambah Data Baru -->
        <div class="card">
            <h3>Tambah Subjek Klasifikasi Baru</h3>
            <form action="/admin/kalkulator-ddc" method="POST">
                @csrf
                <div class="form-group"><label>Subjek</label>
                    <input type="text" name="subjek" required placeholder="Contoh: Kamus Kedokteran">
                </div>
                
                <div class="form-group"><label>Nomor DDC</label>
                    <input type="text" name="nomor" required placeholder="Contoh: 610.3">
                </div>
                
                <div class="form-group"><label>Detail / Penjelasan Klasifikasi</label>
                    <textarea name="detail" rows="5" required placeholder="Gunakan <br> untuk enter dan <strong> untuk tebal..."></textarea>
                    <small style="color:#888;">Gunakan tag HTML dasar untuk format teks agar rapi.</small>
                </div>
                
                <button type="submit" class="btn-submit">+ Tambahkan ke Kalkulator</button>
            </form>
        </div>

        <!-- Tabel Daftar Database Kalkulator -->
        <div class="card">
            <h3>Daftar Data Tersimpan</h3>
            <table>
                <thead><tr><th>Subjek & Nomor</th><th>Detail</th><th style="text-align: center;">Aksi</th></tr></thead>
                <tbody>
                    @forelse($data_ddc as $item)
                    <tr>
                        <td>
                            <strong>{{ $item->subjek }}</strong><br>
                            <span style="font-size:1.1rem; color:#e74c3c; font-weight:bold;">{{ $item->nomor }}</span>
                        </td>
                        <td style="font-size:0.85rem; color:#555;">
                            {!! Str::limit($item->detail, 100) !!}
                        </td>
                        <td style="text-align: center;">
                            <form action="/admin/kalkulator-ddc/{{ $item->id }}" method="POST" style="margin: 0;" onsubmit="return confirm('Hapus data DDC ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" style="background: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 0.85rem;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" style="text-align:center; color:#888;">Belum ada data di database.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection