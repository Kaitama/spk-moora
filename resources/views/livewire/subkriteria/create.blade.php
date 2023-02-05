<div>
	<div class="mt-6 mx-6">
		<x-jet-form-section submit="store">
			<x-slot name="title">
				{{ $kriteria->name }}
			</x-slot>
			
			<x-slot name="description">
				Tambah data sub kriteria  {{ $kriteria->name }}.
			</x-slot>
			
			<x-slot name="form">
				{{-- input nama sub kriteria --}}
				<div class="col-span-6 sm:col-span-4">
					<x-jet-label for="name" value="Nama Sub Kriteria" />
					<x-jet-input id="name" wire:model="name" type="text" class="mt-1 block w-full" autofocus />
					<x-jet-input-error for="name" class="mt-2" />
				</div>
				{{-- input nilai bobot --}}
				<div class="col-span-6 sm:col-span-4">
					<x-jet-label for="bobot" value="Nilai Bobot" />
					<x-jet-input id="bobot" wire:model="bobot" type="text" class="mt-1 block w-full" autofocus />
					<x-jet-input-error for="bobot" class="mt-2" />
				</div>
				
			</x-slot>
			
			<x-slot name="actions">
				<x-jet-action-message class="mr-3" on="saved">
					Tersimpan.
				</x-jet-action-message>
				
				<x-jet-button>
					Simpan
				</x-jet-button>
			</x-slot>
		</x-jet-form-section>
	</div>
	
	<div class="mt-6 mx-6">
		<x-jet-form-section submit="">
			<x-slot name="title">
				Data Sub Kriteria
			</x-slot>
			
			<x-slot name="description">
				List data sub kriteria beserta bobot.
			</x-slot>
			
			<x-slot name="form">
				@if (!$kriteria->subkriteria->count())
				<div class="col-span-6 sm:col-span-4">
					Belum ada data sub kriteria.
				</div>
				@else
				<div class="col-span-6">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									{{ $kriteria->name }}
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Bobot
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider"></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($kriteria->subkriteria as $sub)
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $sub->name }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $sub->bobot }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex justify-end">
										<x-jet-button class="button" wire:click.prevent="delete({{ $sub->id }})">Hapus</x-jet-button>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				@endif			
			</x-slot>
		</x-jet-form-section>
	</div>
</div>
