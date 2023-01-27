<?php

namespace App\Http\Livewire\Kriteria;

use App\Models\Kriteria;
use Livewire\Component;

class Create extends Component
{
	public $kode;
	public $nama;
	public $bobot;
	public $type = '1';

	public function render()
	{
		return view('livewire.kriteria.create');
	}

	public function store()
	{
		Kriteria::create([
			'kode'	=> $this->kode,
			'name'	=> $this->nama,
			'bobot'	=> $this->bobot,
			'type'	=> $this->type == '1' ? true : false,
		]);

		$this->reset();
		$this->emit('saved');
	}
}