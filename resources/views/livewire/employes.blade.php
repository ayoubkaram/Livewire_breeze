<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employes') }}
        </h2>
    </x-slot>
    <br>
    @if(Auth::user()->hasRole('admin'))
        @if($isOpen)
            @include('livewire.employes.update')
        @else
            @include('livewire.employes.create')
        @endif
    @else
        @if($isOpen)
            @include('livewire.employes.update')
        @endif
    @endif


    <br>
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
        <tr>
            <th>Emp_nss</th>
            <th>Emp_nom</th>
            <th>Emp_prn</th>
            <th>Emp_tarif</th>
            @if(Auth::user()->hasRole('editor|admin'))
                <th>Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($employe as $value)
            <tr>
                <td>{{ $value->emp_nss }}</td>
                <td>{{ $value->emp_nom }}</td>
                <td>{{ $value->emp_prn }}</td>
                <td>{{ $value->emp_tarif }}</td>
                @if(Auth::user()->hasRole('editor|admin'))
                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                        <x-button wire:click="edit({{ json_encode($value->emp_nss) }})">Edit
                        </x-button>
                        @if(Auth::user()->hasRole('admin'))
                            <x-button wire:click="delete({{ json_encode($value->emp_nss) }})"
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

