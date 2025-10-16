<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

// Rute untuk Halaman Beranda
Route::get('/', [HalamanController::class, 'beranda'])->name('beranda');

// === GRUP RUTE UNTUK MENU PROFIL ===
// URL akan memiliki awalan /profil/...
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/visi-misi', [HalamanController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/tugas-fungsi', [HalamanController::class, 'tugasFungsi'])->name('tugas-fungsi');
    Route::get('/maklumat-pelayanan', [HalamanController::class, 'maklumatPelayanan'])->name('maklumat-pelayanan');
    Route::get('/tentang-kami', [HalamanController::class, 'tentangKami'])->name('tentang-kami');
    Route::get('/lhkpn', [HalamanController::class, 'lhkpn'])->name('lhkpn');
    Route::get('/koordinasi-rutin', [HalamanController::class, 'koordinasiRutin'])->name('koordinasi-rutin');
    Route::get('/syarat-keberatan', [HalamanController::class, 'syaratKeberatan'])->name('syarat-keberatan');
});

// === GRUP RUTE UNTUK MENU INFORMASI PUBLIK ===
// URL akan memiliki awalan /informasi-publik/...
Route::prefix('informasi-publik')->name('informasi-publik.')->group(function () {
    Route::get('/sop-ppid', [HalamanController::class, 'sopPpid'])->name('sop-ppid');
    Route::get('/tata-cara-pelayanan', [HalamanController::class, 'tataCara'])->name('tata-cara');
    Route::get('/informasi-berkala', [HalamanController::class, 'informasiBerkala'])->name('berkala');
    Route::get('/informasi-setiap-saat', [HalamanController::class, 'informasiSetiapSaat'])->name('setiap-saat');
    Route::get('/informasi-serta-merta', [HalamanController::class, 'informasiSertaMerta'])->name('serta-merta');
    Route::get('/informasi-dikecualikan', [HalamanController::class, 'informasiDikecualikan'])->name('dikecualikan');
    Route::get('/daftar-informasi-publik-online', [HalamanController::class, 'daftarOnline'])->name('daftar-online');
    Route::get('/informasi-pengadaan-barang-jasa', [HalamanController::class, 'pengadaan'])->name('pengadaan');
});
