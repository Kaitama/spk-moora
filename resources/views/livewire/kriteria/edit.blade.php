<div class="mt-6 mx-6">
	<x-jet-form-section submit="update">
		<x-slot name="title">
			Ubah Kriteria
		</x-slot>
		
		<x-slot name="description">
			Ubah data kriteria penilaian beserta bobotnya.
		</x-slot>
		
		<x-slot name="form">
			{{-- input kode --}}
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="kode" value="Kode Kriteria" />
				<x-jet-input id="kode" wire:model="kriteria.kode" type="text" class="mt-1 block w-full" autofocus />
				<x-jet-input-error for="kode" class="mt-2" />
			</div>
			{{-- input nama alternatif --}}
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="name" value="Nama Kriteria" />
				<x-jet-input id="name" wire:model="kriteria.name" type="text" class="mt-1 block w-full" />
				<x-jet-input-error for="name" class="mt-2" />
			</div>
			{{-- input lainnya dst --}}
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="bobot" value="Bobot Kriteria" />
				<x-jet-input id="bobot" wire:model="kriteria.bobot" type="number" step="any" class="mt-1 block w-full" />
				<x-jet-input-error for="bobot" class="mt-2" />
			</div>
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="type" value="Jenis Kriteria" />
				<x-select id="type" wire:model="kriteria.type" type="text" class="mt-1 block w-full">
					<option value="1">Benefit</option>
					<option value="0">Cost</option>
				</x-select>
				<x-jet-input-error for="type" class="mt-2" />
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
