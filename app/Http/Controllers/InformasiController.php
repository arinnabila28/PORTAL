<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    // --- HALAMAN USER (DENGAN FILTER KATEGORI) ---
    public function index(Request $request)
    {
        $kategori_aktif = $request->get('kategori', 'Semua');
        
        // Mengambil daftar kategori unik yang pernah diinput Admin
        $kategori_list = Informasi::select('kategori')->distinct()->pluck('kategori');

        // Logika Filter & Urutan (Paling Baru ke Lama / Kiri ke Kanan)
        if ($kategori_aktif != 'Semua') {
            $informasi = Informasi::where('kategori', $kategori_aktif)->latest()->get();
        } else {
            $informasi = Informasi::latest()->get();
        }

        return view('informasi', compact('informasi', 'kategori_list', 'kategori_aktif'));
    }

    // --- HALAMAN ADMIN ---
    public function adminIndex()
    {
        $informasi = Informasi::latest()->get();
        return view('admin.informasi', compact('informasi'));
    }

    public function store(Request $request)
    {
        Informasi::create($request->all());
        return back()->with('success', 'Informasi berhasil dipublikasikan!');
    }

    public function edit($id)
    {
        $info = Informasi::findOrFail($id);
        return view('admin.informasi-edit', compact('info'));
    }

    public function update(Request $request, $id)
    {
        $info = Informasi::findOrFail($id);
        $info->update($request->all());
        return redirect('/admin/informasi')->with('success', 'Informasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Informasi::findOrFail($id)->delete();
        return back()->with('success', 'Informasi dihapus!');
    }
}