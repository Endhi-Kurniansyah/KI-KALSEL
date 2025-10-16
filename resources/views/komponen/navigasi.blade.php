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
                        <li><a class="dropdown-item" href="{{ route('profil.profil-komisioner') }}">Pofil Komisioner KI Kalsel</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.struktur-komisioner') }}">Struktur Komisioner KI Kalsel</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.tentang') }}">Tentang</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.visi-misi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.struktur-sekretariat') }}">Struktur Sekretariat KI Kalsel</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.tugas-fungsi') }}">Tugas dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.daftar-pejabat') }}">Daftar Pejabat</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Agenda</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('agenda.publik.agenda-komisioner') }}">Agenda Komisioner KIA</a></li>
                        <li><a class="dropdown-item" href="{{ route('agenda.publik.jadwal-sidang') }}">Jadwal Sidang PSI</a></li>
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
