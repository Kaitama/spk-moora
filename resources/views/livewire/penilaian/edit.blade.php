<div class="mt-6 mx-6">
	<x-jet-form-section submit="update">
		<x-slot name="title">
			{{ $alternatif->kode }}
		</x-slot>
		
		<x-slot name="description">
			Lakukan penilaian untuk {{ $alternatif->name }}.
		</x-slot>
		
		<x-slot name="form">
			
			@foreach ($kriterias as $krit)
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="kode" value="{{ $krit->kode }} - {{ $krit->name }}" />
				<x-select id="kode" wire:model="nilai.{{ $krit->id }}" type="text" class="mt-1 block w-full">
					<option value="0" disabled selected>Pilih salah satu</option>
					@foreach ($krit->subkriteria as $sub)
							<option value="{{ $sub->bobot }}">{{ $sub->name }}</option>
					@endforeach
				</x-select>
				<x-jet-input-error for="kode" class="mt-2" />
			</div>
			@endforeach
			
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
