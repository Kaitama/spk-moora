<?php

namespace App\Http\Livewire\Subkriteria;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Livewire\Component;

class Create extends Component
{
	public $kriteria_id;

	public $name, $min, $max, $bobot;

	public function store()
	{
		$kriteria = Kriteria::find($this->kriteria_id);
		$kriteria->subkriteria()->create([
			'name'	=> $this->name,
			// 'min'		=> $this->min,
			// 'max'		=> $this->max,
			'bobot'	=> $this->bobot
		]);
		$this->reset('name', 'min', 'max', 'bobot');
		$this->emit('saved');
	}

	public function mount($kriteria)
	{
		$this->kriteria_id = $kriteria;
	}

	public function render()
	{
		$kriteria = Kriteria::find($this->kriteria_id);
		return view('livewire.subkriteria.create', compact('kriteria'));
	}

	public function delete($id)
	{
		SubKriteria::find($id)->delete();
	}
}