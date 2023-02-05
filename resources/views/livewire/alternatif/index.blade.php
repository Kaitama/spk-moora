<div>
	
	{{-- tabel data alternatif --}}
	<div class="container mx-auto px-4 sm:px-8">
		<div class="py-8">
			<div class="flex items-center justify-between">
				<h2 class="text-2xl font-semibold leading-tight">Data Alternatif</h2>
				<x-button-link href="{{ route('alternatif.create') }}">Tambah Alternatif</x-button-link>
			</div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									No
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Kode Alternatif
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nama Alternatif
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider"></th>
							</tr>
						</thead>
						<tbody>
							@forelse ($alternatifs as $index => $alt)
									
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $index + 1 }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $alt->kode }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $alt->name }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center justify-end gap-4">
										<a href="{{ route('alternatif.edit', $alt->id) }}" class="uppercase font-medium text-xs text-gray-700">Ubah</a>
										<x-jet-button wire:click="delete({{ $alt->id }})">Hapus</x-jet-button>
									</div>
								</td>
							</tr>

							@empty

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="6">
									Data alternatif masih kosong.
								</td>
							</tr>

							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>