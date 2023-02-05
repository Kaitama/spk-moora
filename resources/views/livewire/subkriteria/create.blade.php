<div class="mt-6 mx-6">
	<x-jet-form-section submit="store">
		<x-slot name="title">
			Tambah Sub Kriteria
		</x-slot>
		
		<x-slot name="description">
			Tambah data sub kriteria.
		</x-slot>
		
		<x-slot name="form">
			{{-- input nama sub kriteria --}}
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="name" value="Nama Sub Kriteria" />
				<x-jet-input id="name" wire:model="name" type="text" class="mt-1 block w-full" autofocus />
				<x-jet-input-error for="name" class="mt-2" />
			</div>
			{{-- input nilai minimum --}}
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="min" value="Nilai Minimum" />
				<x-jet-input id="min" wire:model="min" type="text" class="mt-1 block w-full" autofocus />
				<x-jet-input-error for="min" class="mt-2" />
			</div>
			{{-- input nilai maksimum --}}
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="max" value="Nilai Maksimum" />
				<x-jet-input id="max" wire:model="max" type="text" class="mt-1 block w-full" autofocus />
				<x-jet-input-error for="max" class="mt-2" />
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
