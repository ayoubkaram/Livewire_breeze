<form>
    <div>
        <x-label for="exampleFormControlInput1">Agriculteur nom</x-label>
        <x-input type="text" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="agr_nom" />
        @error('agr_nom')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <x-label for="exampleFormControlInput1">Agriculteur prenom </x-label>
        <x-input type="text" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Enter prenom" wire:model="agr_prn" />
        @error('agr_prn')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <x-label for="exampleFormControlInput1">Agriculteur Resid</x-label>
        <x-input type="text" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Enter Resid" wire:model="agr_resid" />
        @error('agr_resid')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <x-button wire:click.prevent="store()" class="mt-4">Save</x-button>
</form>
