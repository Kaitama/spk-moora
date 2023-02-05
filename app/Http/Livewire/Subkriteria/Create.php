<?php

namespace App\Http\Livewire\Subkriteria;

use App\Models\Kriteria;
use Livewire\Component;

class Create extends Component
{
	public $kriteria;

	public $name, $min, $max, $bobot;

	public function store()
	{
		$this->kriteria->subkriteria()->create([
			'name'	=> $this->name,
			'min'		=> $this->min,
			'max'		=> $this->max,
			'bobot'	=> $this->bobot
		]);
		$this->reset('name', 'min', 'max', 'bobot');
		$this->emit('saved');
	}

	public function mount($kriteria)
	{
		$this->kriteria = Kriteria::find($kriteria);
	}

	public function render()
	{
		return view('livewire.subkriteria.create');
	}
}