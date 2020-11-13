@if($books->isEmpty())
    <p>
        Никаких книг нет!
    </p>
@else

    <ul class="list-group">
        @foreach($books as $book)
            <li>
                <button type="submit" class="btn btn-link">
                    <a class="btn btn-dark" href="{{ route('books.show', $book) }}">{{ $book->title }}</a>
                </button>
            </li>
        @endforeach
    </ul>

    {{ $books->links() }}

@endif
