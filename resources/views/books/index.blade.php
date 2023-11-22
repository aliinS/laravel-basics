<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($books as $book)
                        <li>
                            <div class="flex border-b justify-between items-center">
                                <div class="flex flex-col">
                                    <p class="font-bold">Title:</p>
                                    <a href="{{ route('books.show', $book)  }}">{{ $book->title }}</a>
                                    <p class="font-bold">In stock:</p>
                                    <p>{{ $book->stock_saldo }} pc</p>
                                    
                                </div>
                                <div class="grid grid-cols-2 gap-2 pt-2">
                                    <a href="{{ route('books.edit', $book)  }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit</a>
                                    <form method="POST" action="{{ route('books.destroy', $book) }}">
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
                {{$books}}
            </div>
        </div>
    </div>
</x-app-layout>
