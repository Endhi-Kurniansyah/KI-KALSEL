<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Method untuk Halaman Beranda (YANG HILANG)
     * Fungsi ini akan menampilkan file 'beranda.blade.php'.
     */
    public function beranda()
    {
        return view('halaman.beranda');
    }

    // === Method untuk Grup Profil ===
    public function visiMisi() { return view('halaman.profil.visi-misi'); }
    public function tugasFungsi() { return view('halaman.profil.tugas-fungsi'); }
    public function maklumatPelayanan() { return view('halaman.profil.maklumat-pelayanan'); }
    public function tentangKami() { return view('halaman.profil.tentang-kami'); }
    public function lhkpn() { return view('halaman.profil.lhkpn'); }
    public function koordinasiRutin() { return view('halaman.profil.koordinasi-rutin'); }
    public function syaratKeberatan() { return view('halaman.profil.syarat-keberatan'); }

    // === Method untuk Grup Informasi Publik ===
    public function sopPpid() { return view('halaman.informasi-publik.sop-ppid'); }
    public function tataCara() { return view('halaman.informasi-publik.tata-cara'); }
    public function informasiBerkala() { return view('halaman.informasi-publik.berkala'); }
    public function informasiSetiapSaat() { return view('halaman.informasi-publik.setiap-saat'); }
    public function informasiSertaMerta() { return view('halaman.informasi-publik.serta-merta'); }
    public function informasiDikecualikan() { return view('halaman.informasi-publik.dikecualikan'); }
    public function daftarOnline() { return view('halaman.informasi-publik.daftar-online'); }
    public function pengadaan() { return view('halaman.informasi-publik.pengadaan'); }
}
