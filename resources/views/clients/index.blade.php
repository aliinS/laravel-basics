<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($clients as $client)
                        <li>
                            <div class="flex border-b justify-between items-center">
                                <div class="flex flex-col">
                                    <p class="font-bold">Username:</p>
                                    <p>{{ $client->username }} </p>
                                    <p class="font-bold">Name:</p>
                                    <p>{{ $client->first_name }} {{ $client->last_name }} </p>
                                    <p class="font-bold">Address:</p>
                                    <p>{{ $client->address }} </p>
                                    <p class="font-bold">Email:</p>
                                    <p>{{ $client->email }}</p>
                                </div>    
                                <div class="grid grid-cols-2 gap-2 pt-2">
                                    <x-primary-button>Edit</x-primary-button>
                                    <form method="POST" action="{{ route('clients.destroy', $client) }}">
                                        @csrf
                                        @method('delete')
                                        <x-danger-button onclick="event.preventDefault(); this.closest('form').submit();">
                                            delete
                                        </x-danger-button>
                                    </form>
                                </div>

                            </div>
                            
                        </li>
                        @endforeach
                    </ul>
                </div>
                {{$clients}}
            </div>
        </div>
    </div>
</x-app-layout>
