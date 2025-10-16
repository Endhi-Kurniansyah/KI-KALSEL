<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute untuk Halaman Beranda
Route::get('/', [HalamanController::class, 'beranda'])->name('beranda');


// === GRUP RUTE UNTUK MENU PROFIL ===
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/profil-komisioner', [HalamanController::class, 'profilKomisioner'])->name('profil-komisioner');
    Route::get('/struktur-komisioner', [HalamanController::class, 'strukturKomisioner'])->name('struktur-komisioner');
    Route::get('/tentang', [HalamanController::class, 'tentang'])->name('tentang');
    Route::get('/visi-misi', [HalamanController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/struktur-sekretariat', [HalamanController::class, 'strukturSekretariat'])->name('struktur-sekretariat');
    Route::get('/tugas-fungsi', [HalamanController::class, 'tugasFungsi'])->name('tugas-fungsi');
    Route::get('/daftar-pejabat', [HalamanController::class, 'daftarPejabat'])->name('daftar-pejabat');
});

// === GRUP RUTE UNTUK MENU AGENDA ===
// Diperbaiki agar sesuai dengan pemanggilan route('agenda.*')
Route::prefix('agenda')->name('agenda.')->group(function () {
    Route::get('/agenda-komisioner', [HalamanController::class, 'agendaKomisioner'])->name('agenda-komisioner');
    Route::get('/jadwal-sidang', [HalamanController::class, 'jadwalSidang'])->name('jadwal-sidang');
});

// === GRUP RUTE UNTUK MENU LAPORAN ===
Route::prefix('laporan')->name('laporan.')->group(function () {
    Route::get('/laporan-kinerja', [HalamanController::class, 'laporanKinerja'])->name('laporan-kinerja');
    Route::get('/laporan-evaluasi-KIP', [HalamanController::class, 'laporanEvaluasiKIP'])->name('laporan-evaluasi-KIP');
    Route::get('/laporan-KIP', [HalamanController::class, 'laporanKIP'])->name('laporan-KIP');
});

// === GRUP RUTE UNTUK MENU REGULASI ===
Route::prefix('regulasi')->name('regulasi.')->group(function () {
    Route::get('/undang-undang', [HalamanController::class, 'undangUndang'])->name('undang-undang');
    Route::get('/peraturan-pemerintahan', [HalamanController::class, 'peraturanPemerintahan'])->name('peraturan-pemerintahan');
    Route::get('/peraturan-daerah', [HalamanController::class, 'peraturanDaerah'])->name('peraturan-daerah');
    Route::get('/peraturan-presiden', [HalamanController::class, 'peraturanPresiden'])->name('peraturan-presiden');
    Route::get('/peraturan-ma', [HalamanController::class, 'peraturanMA'])->name('peraturan-ma');
    Route::get('/peraturan-menteri', [HalamanController::class, 'peraturanMenteri'])->name('peraturan-menteri');
    Route::get('/pengaturan-ki', [HalamanController::class, 'pengaturanKI'])->name('pengaturan-ki');
    Route::get('/surat-keputusan', [HalamanController::class, 'suratKeputusan'])->name('surat-keputusan');
    Route::get('/surat-edaran', [HalamanController::class, 'suratEdaran'])->name('surat-edaran');
    Route::get('/mou', [HalamanController::class, 'mou'])->name('mou');
});

// === GRUP RUTE UNTUK MENU PUTUSAN ===
Route::prefix('putusan')->name('putusan.')->group(function () {
    Route::get('/putusan', [HalamanController::class, 'putusan'])->name('putusan');
    Route::get('/informasi-berkala', [HalamanController::class, 'putusanInformasiBerkala'])->name('informasi-berkala');
    Route::get('/informasi-setiap-saat', [HalamanController::class, 'putusanInformasiSetiapSaat'])->name('informasi-setiap-saat');
    Route::get('/informasi-setiap-merta', [HalamanController::class, 'putusanInformasiSertaMerta'])->name('informasi-setiap-merta');
    Route::get('/dipa', [HalamanController::class, 'dipa'])->name('dipa');
    Route::get('/form-permohonan-psi', [HalamanController::class, 'formPermohonanPsi'])->name('form-permohonan-psi');
});
