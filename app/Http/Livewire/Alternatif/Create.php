<?php

namespace App\Http\Livewire\Alternatif;

use App\Models\Alternatif;
use Livewire\Component;

class Create extends Component
{
	// variabel penampung data dari input
	public $kode;
	public $nama;

	public function render()
	{
		return view('livewire.alternatif.create');
	}

	// method untuk simpan data alternatif
	public function store()
	{
		Alternatif::create([
			'kode'	=> $this->kode,
			'name'	=> $this->nama
		]);
		$this->reset();
		$this->emit('saved');
	}
}