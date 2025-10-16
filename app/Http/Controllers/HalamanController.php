<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Method untuk Halaman Beranda
     */
    public function beranda()
    {
        return view('halaman.beranda');
    }

    // === Method untuk Grup Profil ===
    public function profilKomisioner() { return view('halaman.profil.profil-komisioner'); }
    public function strukturKomisioner() { return view('halaman.profil.struktur-komisioner'); }
    public function tentang() { return view('halaman.profil.tentang'); }
    public function visiMisi() { return view('halaman.profil.visi-misi'); }
    public function strukturSekretariat() { return view('halaman.profil.struktur-sekretariat'); }
    public function tugasFungsi() { return view('halaman.profil.tugas-fungsi'); }
    public function daftarPejabat() { return view('halaman.profil.daftar-pejabat'); }

    // === Method untuk Grup Agenda ===
    public function agendaKomisioner() { return view('halaman.agenda.agenda-komisioner'); }
    public function jadwalSidang() { return view('halaman.agenda.jadwal-sidang'); }

    // === Method untuk Grup Laporan ===
    public function laporanKinerja() { return view('halaman.laporan.laporan-kinerja'); }
    public function laporanEvaluasiKIP() { return view('halaman.laporan.laporan-evaluasi-KIP'); }
    public function laporanKIP() { return view('halaman.laporan.laporan-KIP'); }

    // === Method untuk Grup Regulasi ===
    public function undangUndang() { return view('halaman.regulasi.undang-undang'); }
    public function peraturanPemerintahan() { return view('halaman.regulasi.peraturan-pemerintahan'); }
    public function peraturanDaerah() { return view('halaman.regulasi.peraturan-daerah'); }
    public function peraturanPresiden() { return view('halaman.regulasi.peraturan-presiden'); }
    public function peraturanMA() { return view('halaman.regulasi.peraturan-ma'); }
    public function peraturanMenteri() { return view('halaman.regulasi.peraturan-menteri'); }
    public function pengaturanKI() { return view('halaman.regulasi.pengaturan-ki'); }
    public function suratKeputusan() { return view('halaman.regulasi.surat-keputusan'); }
    public function suratEdaran() { return view('halaman.regulasi.surat-edaran'); }
    public function mou() { return view('halaman.regulasi.mou'); }

    // === Method untuk Grup Putusan ===
    public function putusan() { return view('halaman.putusan.putusan'); }
    public function putusanInformasiBerkala() { return view('halaman.putusan.informasi-berkala'); }
    public function putusanInformasiSetiapSaat() { return view('halaman.putusan.informasi-setiap-saat'); }
    public function putusanInformasiSertaMerta() { return view('halaman.putusan.informasi-serta-merta'); }
    public function dipa() { return view('halaman.putusan.dipa'); }
    public function formPermohonanPsi() { return view('halaman.putusan.form-permohonan-psi'); }
}
