{{-- @include('layouts.navigation') --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarifs') }}
        </h2>
    </x-slot>
    <br>
    @if(Auth::user()->hasRole('admin|editor'))
            @if ($isOpen)
                @include('livewire.tarifs.update')
            @else
                @include('livewire.tarifs.create')
            @endif
        @endif

    <br>
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
        <tr>
            <th>Tarif description</th>
            <th>Tarif ero</th>
            @if(Auth::user()->hasRole('editor|admin'))
                <th>Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($tarif as $value)
            <tr>
                <td>{{ $value->tar_description }}</td>
                <td>{{ $value->tar_ero }}</td>
                @if(Auth::user()->hasRole('editor|admin'))
                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                        <x-button wire:click="edit({{ json_encode($value->tar_description) }})">Edit
                        </x-button>
                        @if(Auth::user()->hasRole('admin'))
                            <x-button wire:click="delete({{ json_encode($value->tar_description) }})"
                                      class="text-sm text-gray bg-red-400 rounded">Delete</x-button>
                        @endif
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>




    <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>
