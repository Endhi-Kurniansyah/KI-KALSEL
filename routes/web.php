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

// Rute untuk Halaman Beranda (tetap sama)
Route::get('/', [HalamanController::class, 'beranda'])->name('beranda');

// URL akan memiliki awalan /profil/...
Route::prefix('profil')->name('profil.')->group(function () {
    // Rute baru sesuai navbar
    Route::get('/profil-komisioner', [HalamanController::class, 'profilKomisioner'])->name('profil-komisioner');
    Route::get('/struktur-komisioner', [HalamanController::class, 'strukturKomisioner'])->name('struktur-komisioner');
    Route::get('/tentang', [HalamanController::class, 'tentang'])->name('tentang');
    Route::get('/visi-misi', [HalamanController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/struktur-sekretariat', [HalamanController::class, 'strukturSekretariat'])->name('struktur-sekretariat');
    Route::get('/tugas-fungsi', [HalamanController::class, 'tugasFungsi'])->name('tugas-fungsi');
    Route::get('/daftar-pejabat', [HalamanController::class, 'daftarPejabat'])->name('daftar-pejabat');
});
Route::prefix('agenda/publik')->name('agenda.publik.')->group(function () {
    Route::get('/agenda-komisioner', [HalamanController::class, 'agendaKomisioner'])->name('agenda-komisioner');
    Route::get('/jadwal-sidang', [HalamanController::class, 'jadwalSidang'])->name('jadwal-sidang');
});
