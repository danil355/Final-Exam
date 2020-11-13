@extends('layouts.main')

@section('content')

    <div>

    @if($book->image_path)
        <div>
            <img style="max-width: 100%;" src="{{ Storage::url($book->image_path) }}">
        </div>
    @endif

    <div style="margin-left: 200px; margin-top: -160px;">

        <table class="compact">
            <tr>
                <td style="font-weight: bold; padding-right: 6px;">Название: </td>
                <td><cite>{{ $book->title }}</cite></td>
            </tr>
            <tr>
                <td style="font-weight: bold; padding-right: 6px;">Автор: </td>
                <td><cite>{{ $book->author }}</cite></td>
            </tr>

            <tr>
                <td style="font-weight: bold; padding-right: 6px;">Год издания: </td>
                <td><cite>{{ $book->year  }}</cite></td>
            </tr>

            <tr>
                <td style="font-weight: bold; padding-right: 6px;">Описание: </td>
                <td><cite>{{ $book->content  }}</cite></td>
            </tr>
        </table>



    </div>
    <br><br><br>

    @auth
        <button type="submit" class="btn btn-light" id="favorite-button" data-id="{{ $book->id }}">
            {{ auth()->user()->isFavorite($book) ? 'В избранном' : 'Добавить в избранное' }}
        </button>
    @endauth

        <br><br>

        <div style="display: flex">
            @can('update', $book)
                <button class="btn btn-primary"><a style="color: #e2e8f0" href="{{ route('books.edit', $book) }}">Редактировать</a></button>
            @endcan

            @can('delete', $book)
                <button class="btn btn-danger"><a style="color: #e2e8f0" href="{{ route('books.destroy', $book) }}"
                                                  onclick="event.preventDefault(); document.getElementById('delete-form').submit()">
                        Удалить
                    </a>
                </button>
                <form id="delete-form" action="{{ route('books.destroy', $book) }}" method="post">
                    @csrf @method('delete')
                </form>
            @endcan
        </div>

    </div>


@endsection
