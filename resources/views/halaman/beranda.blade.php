@extends('tata_letak.utama')
@section('judul_halaman', 'Beranda - PPID Kalimantan Selatan')
@section('konten_utama')

<header class="hero-banner">
    <div class="container h-100">
        <div class="row h-100 align-items-center text-center"> 
            
            <div class="col-12 pt-5 pb-5"> 

                <h1 class="hero-title">Selamat Datang</h1>
                <p class="hero-subtitle">Di Komisi Informasi<br>Provinsi Kalimantan Selatan</p>
                
                <p class="mt-4"><small>www.diskominfokalsel.go.id</small></p>
            </div>
            
        </div>
    </div>
</header>

<section class="quick-links-section">
    <div class="container">
        <div class="row text-center">
            
            <div class="col-md-3 quick-link-item">
                <a href="URL_E_PPID" class="link-content">
                    <i class="fas fa-building icon-large"></i> <h4>E-PPID</h4>
                    <p class="btn-kunungi">Kunjungi →</p>
                </a>
            </div>

            <div class="col-md-3 quick-link-item">
                <a href="URL_SIPSI" class="link-content">
                    <i class="fas fa-gavel icon-large"></i> 
                    <h4>SIPSI</h4>
                    <p class="btn-kunungi">Kunjungi →</p>
                </a>
            </div>

            <div class="col-md-3 quick-link-item">
                <a href="URL_JDIH" class="link-content">
                    <i class="fas fa-book-open icon-large"></i>
                    <h4>JDIH</h4>
                    <p class="btn-kunungi">Kunjungi →</p>
                </a>
            </div>
            
            <div class="col-md-3 quick-link-item">
                <a href="URL_E_MONEV" class="link-content">
                    <i class="fas fa-chart-line icon-large"></i> 
                    <h4>E-MONEV</h4>
                    <p class="btn-kunungi">Kunjungi →</p>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Informasi & Berita Terbaru</h2>
            <p class="text-muted">Ikuti perkembangan terbaru dan informasi penting dari Pemerintah Provinsi Kalimantan Selatan.</p>
        </div>
        <div class="row">
            {{-- Kolom Kiri: Informasi Peraturan --}}
            <div class="col-lg-6 mb-4">
                <h4 class="mb-3">Informasi Peraturan & Kebijakan</h4>
                <div class="list-group shadow-sm">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Informasi Peraturan, Kebijakan, dan Keputusan</h6>
                            <small class="text-muted">14 Oktober 2025</small>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Pengadaan Barang & Jasa Tahun 2025</h6>
                            <small class="text-muted">13 Oktober 2025</small>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Dokumen Laporan Keuangan Pemerintah</h6>
                            <small class="text-muted">12 Oktober 2025</small>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    {{-- Nanti daftar ini bisa diisi dari database --}}
                </div>
            </div>

            {{-- Kolom Kanan: Galeri Foto --}}
            <div class="col-lg-6">
                <h4 class="mb-3">Galeri Foto Kegiatan</h4>
                <div class="row g-2">
                    <div class="col-4"><img src="https://ppidutama.kalselprov.go.id/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-24-at-15.01.21-360x240.jpeg" class="img-fluid rounded shadow-sm gallery-thumb" alt="Galeri 1"></div>
                    <div class="col-4"><img src="https://ppidutama.kalselprov.go.id/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-24-at-14.59.39-360x240.jpeg" class="img-fluid rounded shadow-sm gallery-thumb" alt="Galeri 2"></div>
                    <div class="col-4"><img src="https://ppidutama.kalselprov.go.id/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-24-at-15.00.29-360x240.jpeg" class="img-fluid rounded shadow-sm gallery-thumb" alt="Galeri 3"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container py-5 my-3">
    <div class="text-center mb-5">
        <h2 class="section-title">Video Profil</h2>
        <p class="text-muted">"Derap Langkah Pembangunan Kalimantan Selatan"</p>
    </div>
    <div class="ratio ratio-16x9 shadow-lg rounded-3 overflow-hidden">
        <iframe src="https://www.youtube.com/embed/n4q2s125sFU" title="Video Pembangunan Kalsel" allowfullscreen></iframe>
    </div>
</section>


@endsection
