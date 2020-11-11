<?php
$book = $book ?? null;
?>
@extends('layouts.main')

@section('content')
    <h1>{{ $book ? 'Изменить книгу' : 'Новая книга' }}</h1>

    @include('components.form-errors')

    <form enctype="multipart/form-data" action="{{ $book ? route('books.update', $book) : route('books.store') }}" method="post">
        @csrf

        @if($book)
            @method('put')
        @endif

        <div>
            <label for="image">Изображение</label>
        </div>

        <div>
            <input type="file" name="image" id="image" accept="image/*" />
        </div>

        <div>
            <label for="title">Название</label>
        </div>
        <div>
            <input value="{{ old('title', $book->title ?? null) }}"
                   type="text"
                   id="title"
                   name="title"
                   placeholder="Введите заголовок...">
        </div>

        <div>
            <label for="author">Автор</label>
        </div>
        <div>
            <textarea name="author"
                      id="author"
                      placeholder="Автор..."
            >{{ old('author', $book->author ?? null) }}</textarea>
        </div>

        <button>Сохранить</button>

    </form>

@endsection
