<?php

namespace App\Http\Livewire\Kriteria;

use App\Models\Kriteria;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Edit extends Component
{
	public $kriteria;

	protected $rules = [
		'kriteria.kode'	=> 'required',
		'kriteria.name'	=> 'required',
		'kriteria.bobot' => 'required',
		'kriteria.type'	=> 'nullable',
	];

	public function mount($id)
	{
		$this->kriteria = Kriteria::find($id);
	}

	public function render()
	{
		return view('livewire.kriteria.edit');
	}

	public function update()
	{
		$this->kriteria->update();
		return to_route('kriteria.index');
	}
}