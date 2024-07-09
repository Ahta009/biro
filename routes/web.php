<?php

use App\Models\Agenda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\SubmisiController;
use App\Http\Controllers\AuthBiroController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AuthProdiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\AuthMahasiswaController;
use App\Http\Controllers\AuthOrganisasiController;

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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/pengumuman', [PengumumanController::class, 'index']);

Route::get('/pengumuman/detail/{notice}', [PengumumanController::class, 'show'])->name('pengumuman.show');

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/detail/{news}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/agenda', [KegiatanController::class, 'index']);

Route::get('/agenda/detail/{agenda}', [KegiatanController::class, 'show'])->name('kegiatan.show');

//controller pengumuman
Route::get('admin/notice', [NoticeController::class, 'index']);

Route::get('admin/notice/store', [NoticeController::class, 'create']);

Route::get('admin/notice/{notice}/edit', [NoticeController::class, 'edit']);

Route::PUT('/notices/{notice}', [NoticeController::class, 'update']);

Route::delete('/notices/{notice}', [NoticeController::class, 'destroy']);

Route::post('notice/store', [NoticeController::class, 'store'])->name('notice.store');

Route::get('admin/notice/search', [NoticeController::class, 'search']);


// controller berita
Route::get('admin/news', [NewsController::class, 'index']);

Route::get('admin/news/store', [NewsController::class, 'create']);

Route::get('admin/news/{news}/edit', [NewsController::class, 'edit']);

Route::PUT('/newss/{news}', [NewsController::class, 'update']);

Route::delete('/newss/{news}', [NewsController::class, 'destroy']);

Route::post('news/store', [NewsController::class, 'store']);

Route::get('admin/news/search', [NewsController::class, 'search']);

// controller agenda
Route::get('admin/agenda', [AgendaController::class, 'index']);

Route::get('admin/agenda/store', [AgendaController::class, 'create']);

Route::get('admin/agenda/{agenda}/edit', [AgendaController::class, 'edit']);

Route::PUT('/agendas/{agenda}', [AgendaController::class, 'update']);

Route::delete('/agendas/{agenda}', [AgendaController::class, 'destroy']);

Route::post('/store', [AgendaController::class, 'store']);

Route::get('admin/agenda/search', [AgendaController::class, 'search']);

// controller submisi pemohon

Route::get('pemohon/submisi', [SubmisiController::class, 'index']);

Route::get('pemohon/submisi/{submisi}/show', [SubmisiController::class, 'show']);

Route::get('pemohon/submisi/store', [SubmisiController::class, 'create']);

Route::post('/submisi/store', [SubmisiController::class, 'store']);

// controller submisi termohon

Route::get('admin/submisi', [PengajuanController::class, 'index']);

Route::get('/pdf/{file}', [PdfController::class, 'show'])->name('pdf.show');

Route::get('admin/submisi/{submisi}/edit', [PengajuanController::class, 'edit']);

Route::PUT('/submisis/{submisi}', [PengajuanController::class, 'update']);

// controller organisasi
Route::get('pemohon/organisasi', [OrganisasiController::class, 'index']);

Route::get('pemohon/organisasi/{organisasi}/show', [OrganisasiController::class, 'show']);

Route::get('pemohon/organisasi/store', [OrganisasiController::class, 'create']);

Route::post('/organisasi/store', [OrganisasiController::class, 'store']);

//controller verifikator organisasi
Route::get('admin/organisasi', [OrganizationController::class, 'index']);

Route::get('/pdf/{file}', [PdfController::class, 'show'])->name('pdf.show');

Route::get('admin/organisasi/{organisasi}/edit', [OrganizationController::class, 'edit']);

Route::PUT('/organisasis/{organisasi}', [OrganizationController::class, 'update']);

// controller rencana
Route::get('pemohon/rencana', [RencanaController::class, 'index']);

Route::get('pemohon/rencana/{rencana}/show', [RencanaController::class, 'show']);

Route::get('pemohon/rencana/store', [RencanaController::class, 'create']);

Route::post('/rencana/store', [RencanaController::class, 'store']);


// controller verifikator rencana
Route::get('admin/rencana', [PlanController::class, 'index']);

Route::get('/pdf/{file}', [PdfController::class, 'show'])->name('pdf.show');

Route::get('admin/rencana/{rencana}/edit', [PlanController::class, 'edit']);

Route::PUT('/rencanas/{rencana}', [PlanController::class, 'update']);

// controller registrasi
Route::get('/registrasi/mahasiswa', [MahasiswaController::class, 'show']);
Route::post('/registrasi/mahasiswa', [MahasiswaController::class, 'register'])->name('register.mahasiswa');

// controller Authentifikasi
Route::get('/login-mahasiswa', [AuthMahasiswaController::class, 'showLoginForm'])->name('login.mahasiswa');
Route::post('/login-mahasiswa', [AuthMahasiswaController::class, 'login']);
Route::post('/logout-mahasiswa', [AuthMahasiswaController::class, 'logout'])->name('logout.mahasiswa');

// Organisasi Mahasiswa routes
Route::get('/login-organisasi', [AuthOrganisasiController::class, 'showLoginForm'])->name('login.organisasi');
Route::post('/login-organisasi', [AuthOrganisasiController::class, 'login']);
Route::post('/logout-organisasi', [AuthOrganisasiController::class, 'logout'])->name('logout.organisasi');

// Biro routes
Route::get('/login-biro', [AuthBiroController::class, 'showLoginForm'])->name('login.biro');
Route::post('/login-biro', [AuthBiroController::class, 'login']);
Route::post('/logout-biro', [AuthBiroController::class, 'logout'])->name('logout.biro');

// Prodi routes
Route::get('/login-prodi', [AuthProdiController::class, 'showLoginForm'])->name('login.prodi');
Route::post('/login-prodi', [AuthProdiController::class, 'login']);
Route::post('/logout-prodi', [AuthProdiController::class, 'logout'])->name('logout.prodi');