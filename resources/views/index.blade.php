@include('partials.header')

<div class="container mx-auto px-4 py-8">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-red-500 text-white">
                <tr>
                    <th class="py-2 px-4">ISBN</th>
                    <th class="py-2 px-4">Title</th>
                    <th class="py-2 px-4">Author</th>
                    <th class="py-2 px-4">Description</th>
                    <th class="py-2 px-4">Date Published</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($books as $book)
                <tr class="border-b border-gray-200">
                    <td class="py-2 px-4">{{ $book->isbn }}</td>
                    <td class="py-2 px-4">{{ $book->title }}</td>
                    <td class="py-2 px-4">{{ $book->author }}</td>
                    <td class="py-2 px-4">{{ $book->description }}</td>
                    <td class="py-2 px-4">{{ $book->date_published }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('partials.footer')