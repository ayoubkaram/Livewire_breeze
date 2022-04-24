<form>
    <div>
        <x-label for="exampleFormControlInput1">Tarif descriptions</x-label>
        <x-input type="text" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Enter description" wire:model="tar_description" />
        @error('tar_description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <x-label for="exampleFormControlInput2">Tarif ero</x-label>
        <x-input type="text" class="block mt-1 w-full" id="exampleFormControlInput2" placeholder="Enter ero" wire:model="tar_ero" />
        @error('tar_ero')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <x-button wire:click.prevent="store()" class="mt-4">Save</x-button>
</form>
