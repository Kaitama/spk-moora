<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Alternatif\Index as AlternatifIndex;
use App\Http\Livewire\Alternatif\Create as AlternatifCreate;
use App\Http\Livewire\Alternatif\Edit as AlternatifEdit;

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
	Route::get('/alternatif', AlternatifIndex::class)
		->name('alternatif.index');
	// route data alternatif create
	Route::get('/alternatif/create', AlternatifCreate::class)
		->name('alternatif.create');
	// route data alternatif edit
	Route::get('/alternatif/{id}/edit', AlternatifEdit::class)
		->name('alternatif.edit');

	// route data kriteria

});