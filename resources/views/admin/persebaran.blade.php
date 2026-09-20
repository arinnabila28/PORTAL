@extends('layouts.admin')

@section('title', 'Kelola Persebaran Alumni')

@section('content')
    <h1 class="page-title">Kelola Persebaran Alumni</h1>
    
    @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    <div class="content-grid">
        <div class="card">
            <h3>Tambah Titik Baru</h3>
            <form action="/admin/persebaran" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Daerah (Misal: Surabaya)</label>
                    <input type="text" name="daerah" required placeholder="Surabaya">
                </div>
                
                <div style="display: flex; gap: 15px;">
                    <div class="form-group" style="flex: 1;">
                        <label>Posisi Kiri-Kanan (X) %</label>
                        <input type="number" step="0.1" name="posisi_x" required placeholder="Misal: 35">
                    </div>
                    <div class="form-group" style="flex: 1;">
                        <label>Posisi Atas-Bawah (Y) %</label>
                        <input type="number" step="0.1" name="posisi_y" required placeholder="Misal: 75">
                    </div>
                </div>

                <div class="form-group">
                    <label>Daftar Pekerjaan (Pisahkan dengan Enter)</label>
                    <textarea name="pekerjaan" rows="4" required placeholder="Pustakawan UNAIR&#10;Data Analyst PT ABC"></textarea>
                </div>
                <button type="submit" class="btn-submit">+ Tambah Titik</button>
            </form>
        </div>

        <div class="card">
            <h3>Daftar Titik Persebaran</h3>
            <table>
                <thead>
                    <tr>
                        <th>Daerah</th><th>Koordinat (X, Y)</th><th>Pekerjaan</th><th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($persebaran as $item)
                    <tr>
                        <td><strong>{{ $item->daerah }}</strong></td>
                        <td>{{ $item->posisi_x }}% , {{ $item->posisi_y }}%</td>
                        <td><span style="font-size: 0.85rem; color: #666; white-space: pre-wrap;">{{ $item->pekerjaan }}</span></td>
                        <td style="text-align: center;">
                            <div style="display: flex; justify-content: center; gap: 8px; align-items: center;">
                                <a href="/admin/persebaran/edit/{{ $item->id }}" style="background: #3498db; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; white-space: nowrap;">Edit</a>
        
                                <form action="/admin/persebaran/{{ $item->id }}" method="POST" style="margin: 0;" onsubmit="return confirm('Hapus titik ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" style="background: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 0.85rem; white-space: nowrap;">Hapus</button>
                                </form>
                                </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" style="text-align: center; padding: 30px; color: #888;">Belum ada titik persebaran yang ditambahkan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection