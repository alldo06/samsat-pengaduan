<?php

use App\Http\Controllers\DashboardOverviewController;
use App\Http\Controllers\DashboardPengaduanController;
use App\Http\Controllers\DashboardTanggapanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TanggapanController;
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

Route::get('/', function () {
	return view('pages.homepage', [
		"title" => "Home"
	]);
});

// Profil
Route::get('/profil/visi-misi', function () {
	return view('pages.profil.visi-misi');
});
Route::get('/profil/struktur-organisasi', function () {
	return view('pages.profil.struktur-organisasi');
});

// Layanan
Route::get('/layanan/mekanisme-layanan', function () {
	return view('pages.layanan.mekanisme-layanan');
});
Route::get('/layanan/samsat-keliling', function () {
	return view('pages.layanan.samsat-keliling');
});
Route::get('/layanan/samsat-gendong', function () {
	return view('pages.layanan.samsat-gendong');
});
Route::get('/layanan/samsat-kecamatan', function () {
	return view('pages.layanan.samsat-kecamatan');
});
Route::get('/layanan/samsat-desa', function () {
	return view('pages.layanan.samsat-desa');
});

// Wilayah
Route::get('/wilayah', function () {
	return view('pages.wilayah');
});

// Samsat
Route::get('/samsat/e-samsat', function () {
	return view('pages.samsat.e-samsat');
});
Route::get('/samsat/t-samsat', function () {
	return view('pages.samsat.t-samsat');
});

// Route::get('/form-pengaduan', function () {
// 	return view('form.index', [
// 		"title" => "Pengaduan"
// 	]);
// });
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/dashboard', function () {
// 	return view('dashboard.index');
// })->middleware('auth');
Route::get('/dashboard', [DashboardOverviewController::class, 'index'])->middleware('auth');

Route::get('/dashboard/pengaduan/export-pengaduan', [DashboardPengaduanController::class, 'exportPDF']);
Route::resource('/dashboard/pengaduan', DashboardPengaduanController::class)->middleware('auth');
Route::post('/dashboard/pengaduan', [DashboardPengaduanController::class, 'destroy']);
// Route::get('/dashboard/pengaduan/{aduan:id}', TanggapanShowController::class, 'show')->middleware('auth');
Route::get('/dashboard/tanggapan/export-tanggapan', [DashboardTanggapanController::class, 'exportPDF']);
Route::resource('/dashboard/tanggapan', DashboardTanggapanController::class)->middleware('auth');

Route::resource('/pengaduan', PengaduanController::class);
Route::resource('/tanggapan', TanggapanController::class);
