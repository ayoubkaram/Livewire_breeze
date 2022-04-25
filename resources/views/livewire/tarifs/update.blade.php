<form>
    <div>
        <x-label for="exampleFormControlx-input2">Tarif ero</x-label>
        <x-input class="mt-1 w-full" type="text" id="exampleFormControlx-input2" wire:model="tar_ero" />
        @error('tar_ero')
        <span class="text-rose-700">{{ $message }}</span>
        @enderror
    </div>
    <x-button wire:click.prevent="update()" class="mt-4">Update</x-button>
    <x-button wire:click.prevent="cancel()" class="mt-4 text-sm text-gray bg-red-400 rounded">Cancel</x-button>
</form>



