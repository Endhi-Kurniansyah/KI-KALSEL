@extends('tata_letak.utama')
@section('judul_halaman', 'Beranda - PPID Kalimantan Selatan')
@section('konten_utama')

<header class="hero-banner">
    <div class="container h-100">
        <div class="row h-100 align-items-center text-center">
            <div class="col-12">
                <img src="https://ppidutama.kalselprov.go.id/wp-content/uploads/2021/08/LOGO-PPID-UTAMA-PROV-KALSEL-1.png" alt="Logo KI di Banner" class="mb-4 hero-logo">
                <h1 class="hero-title">SELAMAT DATANG</h1>
                <p class="hero-subtitle">PEJABAT PENGELOLA KOMISI INFORMASI<br>PROVINSI KALIMANTAN SELATAN</p>
            </div>
        </div>
    </div>
</header>

<section class="container py-5 my-3">
    <div class="text-center mb-5">
        <h2 class="section-title">Layanan Informasi Publik</h2>
        <p class="text-muted">Akses informasi publik dengan mudah melalui layanan yang kami sediakan.</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <a href="#" class="service-card">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle-new bg-primary-soft mb-4"><i class="fas fa-sitemap fa-2x text-primary"></i></div>
                        <h5 class="card-title">Tata Cara Informasi</h5>
                        <p class="card-text text-muted small">Pahami alur untuk mendapatkan informasi yang Anda butuhkan.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
             <a href="#" class="service-card">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle-new bg-success-soft mb-4"><i class="fas fa-file-alt fa-2x text-success"></i></div>
                        <h5 class="card-title">Form Permintaan</h5>
                        <p class="card-text text-muted small">Ajukan permintaan informasi publik secara online melalui form ini.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <a href="#" class="service-card">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle-new bg-warning-soft mb-4"><i class="fas fa-gavel fa-2x text-warning"></i></div>
                        <h5 class="card-title">Form Keberatan</h5>
                        <p class="card-text text-muted small">Ajukan keberatan jika permintaan informasi Anda tidak terpenuhi.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <a href="#" class="service-card">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle-new bg-danger-soft mb-4"><i class="fas fa-database fa-2x text-danger"></i></div>
                        <h5 class="card-title">Data Informasi Publik</h5>
                        <p class="card-text text-muted small">Lihat daftar informasi publik yang tersedia untuk diakses.</p>
                    </div>
                </div>
            </a>
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
