<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        $kategori_aktif = $request->get('kategori', 'Semua');
        $kategori_list = Informasi::select('kategori')->distinct()->pluck('kategori');

        if ($kategori_aktif != 'Semua') {
            $informasi = Informasi::where('kategori', $kategori_aktif)->latest()->get();
        } else {
            $informasi = Informasi::latest()->get();
        }

        return view('informasi', compact('informasi', 'kategori_list', 'kategori_aktif'));
    }

    public function adminIndex()
    {
        $informasi = Informasi::latest()->get();
        return view('admin.informasi', compact('informasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required',
            'link_aksi' => 'nullable|url'
        ]);

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
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required',
            'link_aksi' => 'nullable|url'
        ]);

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