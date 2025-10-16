<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Method untuk Halaman Beranda
     * Fungsi ini akan menampilkan file 'halaman/beranda.blade.php'.
     */
    public function beranda()
    {
        return view('halaman.beranda');
    }

    public function profilKomisioner() { return view('halaman.profil.profil-komisioner'); }
    public function strukturKomisioner() { return view('halaman.profil.struktur-komisioner'); }
    public function tentang() { return view('halaman.profil.tentang'); }
    public function visiMisi() { return view('halaman.profil.visi-misi'); }
    public function strukturSekretariat() { return view('halaman.profil.struktur-sekretariat'); }
    public function tugasFungsi() { return view('halaman.profil.tugas-fungsi'); }
    public function daftarPejabat() { return view('halaman.profil.daftar-pejabat'); }

    public function agendaKomisioner() { return view('halaman.agenda.publik.agenda-komisioner'); }
    public function jadwalSidang() { return view('halaman.agenda.publik.jadwal-sidang'); }
    public function laporan() { return view('halaman.laporan'); }
    public function regulasi() { return view('halaman.regulasi'); }
    public function informasiPublik() { return view('halaman.informasi-publik'); }
}
