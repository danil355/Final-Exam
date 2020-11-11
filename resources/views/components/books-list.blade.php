@if($books->isEmpty())
    <p>
        Никаких книг нет!
    </p>
@else

    <ul class="list-group">
        @foreach($books as $book)
            <li>
                <a href="{{ route('books.show', $book) }}">
                    {{ $book->title }}

                </a>
            </li>
        @endforeach
    </ul>

    {{ $books->links() }}

@endif
