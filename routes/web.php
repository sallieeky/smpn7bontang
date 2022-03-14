<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SambutanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, "beranda"]);
Route::get('/profile', [LandingController::class, "profile"]);
Route::get('/pegawai', [LandingController::class, "pegawai"]);
Route::get('/perpustakaan', [LandingController::class, "perpustakaan"]);
Route::get('/ekskul', [LandingController::class, "ekskul"]);

Route::get('/contact', [LandingController::class, "contact"]);
Route::post('/kirim-pesan', [LandingController::class, "kirimPesan"]);


Route::get('/karya', [LandingController::class, "karya"]);
Route::get('/informasi', [LandingController::class, "informasi"]);
Route::get('/informasi/{informasi}', [LandingController::class, "informasiDetail"]);

Route::get('/login', [AuthController::class, "login"])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, "loginPost"]);


Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, "home"]);
  Route::post('/ubah-struktur-organisasi', [DashboardController::class, "ubahStrukturOrganisasi"]);
  Route::get('/logout', [AuthController::class, "logout"]);

  Route::get('/kelola-informasi', [DashboardController::class, "kelolaInformasi"]);
  Route::post('/kelola-informasi/tambah', [InformasiController::class, "tambahInformasi"]);
  Route::post('/kelola-informasi/edit', [InformasiController::class, "editInformasi"]);
  Route::get('/kelola-informasi/hapus/{informasi}', [InformasiController::class, "hapusInformasi"]);

  Route::get('/kelola-beranda', [DashboardController::class, "kelolaBeranda"]);
  Route::post('/kelola-sambutan/ubah', [SambutanController::class, "ubahSambutan"]);

  Route::get('/kelola-karya', [DashboardController::class, "kelolaKarya"]);
  Route::get('/kelola-karya/lihat/{karya}', [KaryaController::class, "showKarya"]);
  Route::post('/kelola-karya/tambah', [KaryaController::class, "tambahKarya"]);
  Route::post('/kelola-karya/edit', [KaryaController::class, "editKarya"]);
  Route::get('/kelola-karya/hapus/{karya}', [KaryaController::class, "hapusKarya"]);

  Route::get('/kelola-pegawai', [DashboardController::class, "kelolaPegawai"]);
  Route::post('/kelola-pegawai/tambah', [PegawaiController::class, "tambahPegawai"]);
  Route::post('/kelola-pegawai/edit', [PegawaiController::class, "editPegawai"]);
  Route::get('/kelola-pegawai/hapus/{pegawai}', [PegawaiController::class, "hapusPegawai"]);
});
