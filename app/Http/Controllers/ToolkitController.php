<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toolkit;

class ToolkitController extends Controller
{
    // Halaman User
    public function index()
    {
        $toolkits = Toolkit::oldest()->get();
        return view('student-toolkit', compact('toolkits'));
    }

    // Halaman Admin
    public function adminIndex()
    {
        $toolkits = Toolkit::oldest()->get();
        return view('admin.toolkit', compact('toolkits'));
    }

    // Admin Tambah Aplikasi
    public function store(Request $request)
    {
        $request->validate([
            'nama_aplikasi' => 'required',
            'mata_kuliah' => 'required',
            'deskripsi' => 'required',
            'link_download' => 'required|url'
        ]);

        Toolkit::create($request->all());
        return back()->with('success', 'Aplikasi berhasil ditambahkan ke Student Toolkit!');
    }

    // Admin Hapus Aplikasi
    public function destroy($id)
    {
        Toolkit::find($id)->delete();
        return back()->with('success', 'Aplikasi berhasil dihapus.');
    }

    public function edit($id)
    {
        $tool = Toolkit::findOrFail($id);
        return view('admin.toolkit-edit', compact('tool'));
    }

    public function update(Request $request, $id)
    {
        $tool = Toolkit::findOrFail($id);
        $tool->update($request->all());
        return redirect('/admin/toolkit')->with('success', 'Aplikasi Toolkit berhasil diperbarui!');
    }
}