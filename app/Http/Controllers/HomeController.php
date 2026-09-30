<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebanggaan;
use App\Models\Berita;
use App\Models\Informasi;
use App\Models\KalkulatorDdc;
use App\Models\Persebaran;
use App\Models\Toolkit;

class HomeController extends Controller
{
    public function index()
    {
        $tokoh = Kebanggaan::latest()->get(); 
        $berita = Berita::latest()->take(3)->get();
        
        return view('home', compact('tokoh', 'berita'));
    }

    public function semuaBerita(Request $request)
    {
        $query = Berita::latest();

        if ($request->has('q') && $request->q != '') {
            $keyword = $request->q;
            $query->where(function($q) use ($keyword) {
                $q->where('judul', 'like', "%{$keyword}%")
                  ->orWhere('cuplikan', 'like', "%{$keyword}%")
                  ->orWhere('isi', 'like', "%{$keyword}%");
            });
        }

        $berita = $query->get();
        
        return view('berita-semua', compact('berita'));
    }

    // Fungsi untuk menampilkan detail baca berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Catatan: Jika nama file view untuk detail beritamu bukan 'berita-detail', 
        // silakan ubah kata 'berita-detail' di bawah ini menyesuaikan nama file aslimu.
        return view('berita-detail', compact('berita'));
    }
    
    // Fungsi Pencarian Global Keseluruhan Website
    public function search(Request $request)
    {
        $keyword = strtolower($request->q);

        // Jika form pencarian kosong, kembalikan ke halaman sebelumnya
        if (!$keyword) {
            return back();
        }

        // 1. Database Statis Fitur/Menu Website
        $features = [
            [
                'judul' => 'Akademik & Kurikulum',
                'deskripsi' => 'Peta kurikulum, katalog mata kuliah, RPS, dan fasilitas lab.',
                'url' => '/kurikulum',
                'keywords' => ['akademik', 'kurikulum', 'rps', 'mata kuliah', 'sks', 'jadwal', 'peminatan', 'silabus', 'semester']
            ],
            [
                'judul' => 'Lab Klasifikasi (DDC/UDC)',
                'deskripsi' => 'Mesin pencari klasifikasi DDC/UDC dan sistem peminjaman lab.',
                'url' => '/lab-klasifikasi',
                'keywords' => ['lab', 'klasifikasi', 'ddc', 'udc', 'peminjaman', 'praktikum', 'tajuk subjek']
            ],
            [
                'judul' => 'Repositori & Publikasi',
                'deskripsi' => 'Repositori karya mahasiswa, skripsi, dan jurnal Palimpsest.',
                'url' => '/repositori',
                'keywords' => ['repositori', 'publikasi', 'jurnal', 'skripsi', 'tugas akhir', 'palimpsest', 'artikel', 'dublin core']
            ],
            [
                'judul' => 'Pesebaran Alumni',
                'deskripsi' => 'Peta sebaran alumni dari IIP yang tersebar di seluruh Indonesia.',
                'url' => '/persebaran-alumni',
                'keywords' => ['alumni', 'karier', 'kerja', 'lulusan', 'mentor', 'skill', 'pekerjaan']
            ],
            [
                'judul' => 'Informasi Seputar IIP',
                'deskripsi' => 'Informasi terkini tentang kegiatan, magang, lomba, dan beasiswa di IIP.',
                'url' => '/informasi',
                'keywords' => ['komunitas', 'forum', 'magang', 'lomba', 'beasiswa', 'hima', 'himpunan', 'kegiatan']
            ],
            [
                'judul' => 'Student Toolkit',
                'deskripsi' => 'Kumpulan software, aplikasi, dan tools yang berguna untuk mahasiswa IIP.',
                'url' => '/student-toolkit',
                'keywords' => ['resource', 'hub', 'bantuan', 'faq', 'software', 'toolkit', 'unduh', 'download', 'aplikasi']
            ],
        ];

        $matchedFeatures = [];
        // Mencari kecocokan di Fitur/Menu
        foreach ($features as $feat) {
            $inJudul = str_contains(strtolower($feat['judul']), $keyword);
            $inDesc = str_contains(strtolower($feat['deskripsi']), $keyword);
            $inKeywords = false;
            
            foreach ($feat['keywords'] as $kw) {
                if (str_contains(strtolower($kw), $keyword)) {
                    $inKeywords = true; break;
                }
            }
            
            if ($inJudul || $inDesc || $inKeywords) {
                $matchedFeatures[] = $feat;
            }
        }

        // 2. Mencari di Tabel Berita
        $matchedBerita = Berita::where('judul', 'like', "%{$keyword}%")
                               ->orWhere('cuplikan', 'like', "%{$keyword}%")
                               ->orWhere('isi', 'like', "%{$keyword}%")
                               ->latest()->get();

        // 3. Mencari di Tabel Informasi (Magang/Akademik)
        // REVISI
        $matchedInformasi = Informasi::where('judul', 'like', "%{$keyword}%")
                             ->orWhere('deskripsi', 'like', "%{$keyword}%")
                             ->orWhere('kategori', 'like', "%{$keyword}%")
                             ->latest()->get();

        // 4. Mencari di Tabel Kalkulator DDC
        $matchedDdc = KalkulatorDdc::where('subjek', 'like', "%{$keyword}%")
                                   ->orWhere('nomor', 'like', "%{$keyword}%")
                                   ->get();

        // 5. Mencari di Tabel Persebaran Alumni
        $matchedAlumni = Persebaran::where('daerah', 'like', "%{$keyword}%")
                                   ->orWhere('pekerjaan', 'like', "%{$keyword}%")
                                   ->get();

        // Mengirim semua hasil pencarian ke halaman view
        return view('search-results', compact(
            'keyword', 'matchedFeatures', 'matchedBerita', 'matchedInformasi', 'matchedDdc', 'matchedAlumni'
        ));
    }
}