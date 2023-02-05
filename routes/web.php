<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Alternatif\Index as AlternatifIndex;
use App\Http\Livewire\Alternatif\Create as AlternatifCreate;
use App\Http\Livewire\Alternatif\Edit as AlternatifEdit;
use App\Http\Livewire\Kriteria\Index as KriteriaIndex;
use App\Http\Livewire\Kriteria\Create as KriteriaCreate;
use App\Http\Livewire\Kriteria\Edit as KriteriaEdit;
use App\Http\Livewire\Penilaian\Index as PenilaianIndex;
use App\Http\Livewire\Penilaian\Edit as PenilaianEdit;
use App\Http\Livewire\Subkriteria\Create as SubkriteriaCreate;
use App\Http\Livewire\Proses\Index as ProsesIndex;


// BAGIAN ROUTE YANG TIDAK BUTUH AKSES LOGIN
Route::get('/', function () {
	// return view('welcome');
	return redirect()->route('login');
});

// BAGIAN ROUTE YANG HARUS LOGIN TERLEBIH DAHULU
Route::middleware([
	'auth:sanctum',
	config('jetstream.auth_session'),
	'verified'
])->group(function () {
	// MULAI DARI SINI, ROUTE BUTUH AUTENTIKASI LOGIN	

	// route halaman dashboard
	Route::get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	// route data alternatif index
	Route::get('/alternatif', AlternatifIndex::class)->name('alternatif.index');
	// route data alternatif create
	Route::get('/alternatif/create', AlternatifCreate::class)->name('alternatif.create');
	// route data alternatif edit
	Route::get('/alternatif/{id}/edit', AlternatifEdit::class)->name('alternatif.edit');

	// route data kriteria
	Route::get('/kriteria', KriteriaIndex::class)->name('kriteria.index');
	Route::get('/kriteria/create', KriteriaCreate::class)->name('kriteria.create');
	Route::get('/kriteria/{id}/edit', KriteriaEdit::class)->name('kriteria.edit');

	// route data sub kriteria
	Route::get('/subkriteria/{kriteria}/create', SubkriteriaCreate::class)->name('subkriteria.create');

	// route penilaian
	Route::get('/penilaian', PenilaianIndex::class)->name('penilaian.index');
	Route::get('/penilaian/{altId}/edit', PenilaianEdit::class)->name('penilaian.edit');
	Route::get('/penilaian/proses', ProsesIndex::class)->name('penilaian.proses');
});