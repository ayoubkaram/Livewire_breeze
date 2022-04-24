<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>


            @if(Auth::user()->hasRole('admin'))
                @if($isOpen)
                    @include('livewire.users.update')
                @else
                    @include('livewire.users.create')
                @endif
            @else
                @if($isOpen)
                    @include('livewire.users.update')
                @endif
            @endif

                    <table class="table table-bordered mt-5" id="sampleTable">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Role</th>
                            <th>Email</th>
                            @if(Auth::user()->hasRole('editor|admin'))
                                <th>Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($user as $value)
                            <tr class="whitespace-nowrap">
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->role }}</td>
                                <td>{{ $value->email }}</td>
                                @if(Auth::user()->hasRole('admin|editor'))
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        <x-button wire:click="edit({{ $value->id }})" class="">
                                            Edit</x-button>
                                        @if(Auth::user()->hasRole('admin'))
                                            <x-button wire:click="delete({{ $value->id }})"
                                                      class="text-sm text-gray bg-red-400 rounded">Delete
                                            </x-button>
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

