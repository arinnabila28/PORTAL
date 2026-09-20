<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persebaran;

class PersebaranController extends Controller
{
    // Halaman Utama untuk User
    public function index()
    {
        $persebaran = Persebaran::all();
        return view('persebaran-alumni', compact('persebaran'));
    }

    // Halaman Dasbor Admin
    public function adminIndex()
    {
        $persebaran = Persebaran::all();
        return view('admin.persebaran', compact('persebaran'));
    }

    // Fungsi Admin Tambah Pin
    public function store(Request $request)
    {
        Persebaran::create($request->all());
        return redirect()->back()->with('success', 'Titik persebaran berhasil ditambahkan!');
    }

    // Fungsi Admin Hapus Pin
    public function destroy($id)
    {
        Persebaran::find($id)->delete();
        return redirect()->back()->with('success', 'Titik berhasil dihapus!');
    }

    public function edit($id)
    {
        $lokasi = Persebaran::findOrFail($id);
        return view('admin.persebaran-edit', compact('lokasi'));
    }

    public function update(Request $request, $id)
    {
        $lokasi = Persebaran::findOrFail($id);
        $lokasi->update($request->all());
        return redirect('/admin/persebaran')->with('success', 'Titik persebaran berhasil diperbarui!');
    }
}
