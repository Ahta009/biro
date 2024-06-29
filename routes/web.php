<?php

use App\Models\Agenda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengumumanController;

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

Route::get('/', [BerandaController::class, 'index']);

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