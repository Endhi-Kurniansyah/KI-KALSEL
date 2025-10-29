<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('beranda') }}">
            <img src="{{ asset('images/Logo.png') }}" alt="KOMISI INFORMASI" style="height: 50px; margin-right: 10px;">
            <div>
                <span style="display: block; font-weight: bold; line-height: 1.2;">
                    KOMISI INFORMASI
                </span>
                <span style="display: block; font-size: 0.6em; line-height: 1;">
                    PROVINSI KALSEL
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
                        <li><a class="dropdown-item" href="{{ route('profil.profil-komisioner') }}">Profil Komisioner KI Kalsel</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.struktur-komisioner') }}">Struktur Komisioner KI Kalsel</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.tentang') }}">Tentang</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.visi-misi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.struktur-sekretariat') }}">Struktur Sekretariat KI Kalsel</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Agenda</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('agenda.agenda-komisioner') }}">Agenda Komisioner KIA</a></li>
                        <li><a class="dropdown-item" href="{{ route('agenda.jadwal-sidang') }}">Jadwal Sidang PSI</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('laporan.laporan-kinerja') }}">Laporan Perkembangan Kinerja</a></li>
                        <li><a class="dropdown-item" href="{{ route('laporan.laporan-evaluasi-KIP') }}">Laporan Hasil Evaluasi KIP</a></li>
                        <li><a class="dropdown-item" href="{{ route('laporan.laporan-KIP') }}">Laporan KIP</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Regulasi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('regulasi.undang-undang') }}">Undang-undang</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.peraturan-pemerintahan') }}">Peraturan Pemerintah</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.peraturan-daerah') }}">Peraturan Daerah</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.peraturan-presiden') }}">Peraturan Presiden</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.peraturan-ma') }}">Peraturan Mahkamah Agung</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.peraturan-menteri') }}">Peraturan Menteri</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.pengaturan-ki') }}">Pengaturan Komisi Informasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.surat-keputusan') }}">Surat Keputusan</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.surat-edaran') }}">Surat Edaran</a></li>
                        <li><a class="dropdown-item" href="{{ route('regulasi.mou') }}">MOU</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Informasi Publik</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('putusan.putusan') }}">Putusan</a></li>
                        <li><a class="dropdown-item" href="{{ route('putusan.informasi-berkala') }}">Informasi Berkala</a></li>
                        <li><a class="dropdown-item" href="{{ route('putusan.informasi-setiap-saat') }}">Informasi Setiap Saat</a></li>
                        <li><a class="dropdown-item" href="{{ route('putusan.informasi-setiap-merta') }}">Informasi Setiap Merta</a></li>
                        <li><a class="dropdown-item" href="{{ route('putusan.dipa') }}">DIPA</a></li>
                        <li><a class="dropdown-item" href="{{ route('putusan.form-permohonan-psi') }}">Form Permohonan PSI</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
