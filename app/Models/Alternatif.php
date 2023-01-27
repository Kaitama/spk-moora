<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
	use HasFactory;

	// lepaskan proteksi mass assignment
	protected $guarded = [];

	// relasi ke tabel kriteria
	public function kriteria()
	{
		return $this->belongsToMany(Kriteria::class)->withPivot('nilai');
	}
}