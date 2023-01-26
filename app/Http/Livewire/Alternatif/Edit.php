<?php

namespace App\Http\Livewire\Alternatif;

use App\Models\Alternatif;
use Livewire\Component;

class Edit extends Component
{
	// property penampung data alternatif yang dikirim dari route
	public $alternatif;

	// syarat rules untuk validasi input
	protected $rules = [
		'alternatif.kode'	=> 'required',
		'alternatif.name'	=> 'required',
	];

	// method mount dieksekusi sebelum method render
	public function mount($id)
	{
		$this->alternatif = Alternatif::find($id);
	}

	public function render()
	{
		return view('livewire.alternatif.edit');
	}

	public function update()
	{
		$this->alternatif->update();
		$this->emit('saved');
		// jika ingin pindah halaman ke index
		// return redirect()->route('alternatif.index');
	}
}