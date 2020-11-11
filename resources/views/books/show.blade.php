@extends('layouts.main')

@section('content')


    @if($book->image_path)
        <div>
            <img style="max-width: 100%;" src="{{ Storage::url($book->image_path) }}">
        </div>
    @endif

    <div style="margin-left: 200px; margin-top: -200px;">
    <p>Название книги: {{ $book->title }}</p>
        <p>Автор:  {{ $book->author }}</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    @auth
        <button id="favorite-button" data-id="{{ $book->id }}">
            {{ auth()->user()->isFavorite($book) ? 'В избранном' : 'Добавить в избранное' }}
        </button>
    @endauth

    <div>

        @can('update', $book)
            <a href="{{ route('books.edit', $book) }}">Редактировать</a>
        @endcan

        @can('delete', $book)
            <a href="{{ route('books.destroy', $book) }}"
               onclick="event.preventDefault(); document.getElementById('delete-form').submit()">
                Удалить
            </a>
            <form id="delete-form" action="{{ route('books.destroy', $book) }}" method="post">
                @csrf @method('delete')
            </form>
        @endcan

    </div>


@endsection
