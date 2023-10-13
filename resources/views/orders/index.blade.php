<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Authors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($orders as $order)
                        <li>
                            <div class="flex border-b justify-between items-center">
                                <p>{{ $order->delivery_address }} {{ $order->order_date }}</p>
                                <div class="grid grid-cols-2 gap-2 pt-2">
                                    <x-primary-button>Edit</x-primary-button>
                                    <x-danger-button>Delete</x-danger-button>
                                </div>

                            </div>
                            
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>