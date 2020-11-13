<?php
$book = $book ?? null;
?>
@extends('layouts.main')

@section('content')

<h1 style="font-family: Arial Narrow, sans-serif">{{ $book ? 'Изменить книгу' : 'Новая книга' }}</h1>

@include('components.form-errors')

<form enctype="multipart/form-data" action="{{ $book ? route('books.update', $book) : route('books.store') }}" method="post">
    @csrf

    @if($book)
        @method('put')
    @endif

    <div><label for="image">  Изображение</label></div>

    <div><input class="form-control-file" type="file" name="image" id="image" accept="image/*" /></div>
    <br>

    <div><label for="title">Название</label></div>

    <div><input value="{{ old('title', $book->title ?? null) }}"
               type="text"
               class="form-control input-lg"
               id="title"
               name="title"
               placeholder="Введите название книги..."></div>
    <br>

    <div><label for="author">Автор</label></div>

    <div><input value="{{ old('author', $book->author ?? null) }}"
               type="text"
               class="form-control input-lg"
               id="author"
               name="author"
               placeholder="Введите автора..."></div>
    <br>

    <div><label for="year">Год издания</label></div>

    <div><input value="{{ old('year', $book->year ?? null) }}"
               type="text"
               class="form-control input-lg"
               id="year"
               name="year"
               placeholder="Введите год издания..."></div>
    <br>

    <div><label for="content">Напиши описание книги</label></div>

    <div><textarea name="content"
                      id="content"
                      class="form-control"
                      cols="30" rows="5"
                      placeholder="Введите описание книги">{{ old('content', $book->content ?? null) }}</textarea></div>
    <br>

    <button class="btn btn-outline-secondary">Сохранить</button>

</form>

@endsection
