<?php

namespace App\Http\Livewire\Penilaian;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Livewire\Component;

class Index extends Component
{
	public function render()
	{
		$alternatifs = Alternatif::orderBy('kode')->get();
		$kriterias = Kriteria::orderBy('kode')->get();
		return view('livewire.penilaian.index', compact('alternatifs', 'kriterias'));
	}
}