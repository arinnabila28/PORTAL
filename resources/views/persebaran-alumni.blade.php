@extends('layouts.main')

@section('title', 'Persebaran Alumni - NODE.US')

@section('custom-css')
<style>
    /* Pembungkus Peta */
    .map-container {
        position: relative;
        width: 100%;
        border: 3px solid #7B2CBF;
        background: transparent;
        border-radius: 8px;
        overflow: hidden;
        /* Hapus baris aspect-ratio: 16/9; agar bungkusnya menyesuaikan bentuk asli peta */
    }

    /* Gambar Peta Dasar */
    .base-map {
        width: 100%;
        height: auto; /* Kunci agar peta tidak membludak dan tampil utuh */
        display: block;
        transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        transform-origin: center center;
    }
</style>
@endsection

@section('content')
<div class="persebaran-section">
    <h2 class="persebaran-title">Persebaran Alumni</h2>

    <div class="map-container" id="mapContainer">
        <button class="btn-reset-zoom" onclick="resetMap()">Kembali</button>
        <img src="{{ asset('images/peta-indonesia.png') }}" class="base-map" id="baseMap" alt="Peta">

        <div class="pins-layer" id="pinsLayer">
            <!-- Looping data dari Database -->
            @foreach($persebaran as $lokasi)
            <div class="map-pin" style="top: {{ $lokasi->posisi_y }}%; left: {{ $lokasi->posisi_x }}%;" onclick="zoomToPin(this, {{ $lokasi->posisi_x }}, {{ $lokasi->posisi_y }})">
                <div class="pin-info">
                    <h4>{{ $lokasi->daerah }}</h4>
                    <ul>
                        <!-- Memecah teks pekerjaan yang dienter menjadi list -->
                        @foreach(explode("\n", $lokasi->pekerjaan) as $job)
                            @if(trim($job) != '')
                                <li>- {{ $job }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
    /* Masukkan seluruh Script zoomToPin dan resetMap dari chat sebelumnya ke sini */
</script>
@endsection