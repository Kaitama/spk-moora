<?php

namespace App\Http\Livewire\Penilaian;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Livewire\Component;

class Edit extends Component
{
	public $alternatif;
	public $kriterias;
	public $nilai = [];

	protected $rules = [
		'nilai.*'	=> 'required',
	];

	public function mount($altId)
	{
		$this->alternatif = Alternatif::find($altId);
		$this->kriterias = Kriteria::orderBy('kode')->get();
		foreach ($this->kriterias as $key => $value) {
			$this->nilai[$value->id] = 0;
		}
		foreach ($this->alternatif->kriteria as $krit) {
			$this->nilai[$krit->id] = $krit->pivot->nilai ?? 0;
		}
	}

	public function render()
	{
		return view('livewire.penilaian.edit');
	}

	public function update()
	{
		$penilaian = [];
		foreach ($this->nilai as $key => $value) {
			$penilaian[$key] = ['nilai' => $value];
		}

		$this->alternatif->kriteria()->sync($penilaian);
		return to_route('penilaian.index');
	}
}