<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KalkulatorDdc;

class KalkulatorDdcController extends Controller
{
    // --- HALAMAN USER (Kalkulator Publik) ---
    public function indexUser()
    {
        // Mengambil semua data dari database dan mengubah namanya agar cocok dengan JavaScript bawaan temanmu
        $ddc_data = KalkulatorDdc::all()->map(function($item) {
            return [
                'subject' => $item->subjek,
                'number' => $item->nomor,
                'details' => $item->detail
            ];
        });

        return view('calculator-ddc', compact('ddc_data'));
    }

    // --- HALAMAN ADMIN (Pengelolaan CRUD) ---
    public function indexAdmin()
    {
        $data_ddc = KalkulatorDdc::latest()->get();
        return view('admin.calculator-ddc', compact('data_ddc'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subjek' => 'required',
            'nomor' => 'required',
            'detail' => 'required'
        ]);

        KalkulatorDdc::create($request->all());
        return back()->with('success', 'Data Kalkulator DDC berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        KalkulatorDdc::findOrFail($id)->delete();
        return back()->with('success', 'Data Kalkulator DDC berhasil dihapus!');
    }
}