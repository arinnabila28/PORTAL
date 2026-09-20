<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;

class AdminBeritaController extends Controller
{
    public function index() {
        $berita = Berita::latest()->get();
        return view('admin.berita', compact('berita'));
    }

    public function store(Request $request) {
        $request->validate(['judul'=>'required', 'cuplikan'=>'required', 'isi'=>'required', 'gambar'=>'required|image']);
        $namaGambar = time().'.'.$request->gambar->extension();  
        $request->gambar->move(public_path('images'), $namaGambar);

        $b = new Berita; $b->judul = $request->judul; $b->cuplikan = $request->cuplikan; $b->isi = $request->isi; $b->gambar = $namaGambar; $b->save();
        return back()->with('success', 'Berita ditambahkan!');
    }

    public function destroy($id) {
        $b = Berita::findOrFail($id);
        @unlink(public_path('images/' . $b->gambar));
        $b->delete();
        return back()->with('success', 'Berita dihapus!');
    }
    
    // Menampilkan halaman detail berita untuk publik
    public function show($id)
    {
        $berita = \App\Models\Berita::findOrFail($id);
        return view('berita-detail', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita-edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $b = Berita::findOrFail($id);
        $b->judul = $request->judul;
        $b->cuplikan = $request->cuplikan;
        $b->isi = $request->isi;
        
        // Cek jika admin mengupload gambar baru
        if ($request->hasFile('gambar')) {
            $namaGambar = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('images'), $namaGambar);
            $b->gambar = $namaGambar;
        }
        $b->save();

        return redirect('/admin/berita')->with('success', 'Berita berhasil diperbarui!');
    }
}