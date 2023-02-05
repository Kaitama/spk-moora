<div id="ranking">
	
	@if ($alternatifs->count() > 0)
		
	{{-- tabel data alternatif --}}
	<div class="container mx-auto px-4 sm:px-8">
		<div class="py-8">
			<div class="flex items-center justify-between">
				<h2 class="text-2xl font-semibold leading-tight">Hasil Perankingan</h2>
				<x-jet-button class="button" wire:click="print">Cetak</x-jet-button>
			</div>
			<p>Data berikut diurutkan berdasarkan nilai tertinggi.</p>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									No
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Kode
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nama
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nilai
								</th>
							</tr>
						</thead>
						<tbody>
							@php $no = 1 @endphp
							@forelse ($alternatifs->sortByDesc('nilai') as $index => $alt)
							
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $no++ }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $alt->kode }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $alt->name }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $alt->nilai }}
								</td>
								
							</tr>

							@empty

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="{{ $kriterias->count() + 4 }}">Belum ada data alternatif.</td>
							</tr>
							
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	@endif
</div>