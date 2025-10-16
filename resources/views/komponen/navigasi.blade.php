<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('beranda') }}">
            <img src="{{ asset('images/Logo.png') }}" alt="KOMISI INFORMASI" style="height: 50px; margin-right: 10px;">
            <div>
                <span style="display: block; font-weight: bold; line-height: 1.2;">
                    KOMISI INFORMASI
                </span>
                <span style="display: block; font-size: 0.8em; line-height: 1;">
                    KALSEL
                </span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profil.visi-misi') }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.tugas-fungsi') }}">Tugas dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.maklumat-pelayanan') }}">Maklumat Pelayanan</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.tentang-kami') }}">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.lhkpn') }}">LHKPN Pimpinan Daerah</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.koordinasi-rutin') }}">Koordinasi Rutin</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.syarat-keberatan') }}">Syarat Keberatan Layanan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Agenda</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.sop-ppid') }}">SOP PPID</a></li>
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.tata-cara') }}">Tata Cara Pelayanan Informasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.berkala') }}">Informasi Berkala</a></li>
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.setiap-saat') }}">Informasi Setiap Saat</a></li>
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.serta-merta') }}">Informasi Serta Merta</a></li>
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.dikecualikan') }}">Informasi Dikecualikan</a></li>
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.daftar-online') }}">Daftar Informasi Publik Online</a></li>
                        <li><a class="dropdown-item" href="{{ route('informasi-publik.pengadaan') }}">Informasi Pengadaan Barang dan Jasa</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Regulasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informasi Publik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
