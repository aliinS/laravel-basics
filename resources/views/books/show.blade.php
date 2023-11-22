<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="max-w-2xl mx-auto text-xl p-4 sm:p-6 lg:p-8">
                        <p>
                            <span class="font-bold">Title:</span>
                            <span>{{ $book->title }}</span>
                        </p>

                        <p>
                            <span class="font-bold">Release year:</span>
                            <span>{{ $book->release_date }}</span>
                        </p>

                        <p>
                            <span class="font-bold">Author(s):</span>
                            @foreach ($book->authors as $author)
                            <div>{{ $author->first_name }} {{ $author->last_name }}</div>
                            @endforeach
                        </p>

                        <p>
                            <span class="font-bold">Price:</span>
                            <div>{{ $book->price }} €</div>
                        </p>

                        <p>
                            <span class="font-bold">Language:</span>
                            <div>{{ $book->language }}</div>
                        </p>

                        <p>
                            <span class="font-bold">Summary:</span>
                            <div>{{ $book->summary }}</div>
                        </p>

                        <p>
                            <span class="font-bold">Image:</span>
                            <div>{{ $book->cover_path }}</div>
                        </p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
