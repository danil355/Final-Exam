@extends('layouts.main')
@section('content')

    <!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background: url({{ asset('images/3.jpg') }}); /* Цвет фона и путь к файлу */

        }
    </style>
</head>
<body>
<h1 style="font-family: Arial Narrow, sans-serif">Книги</h1>
{{--<img style="width: 100%;" src="{{ asset('images/3.jpg') }}" alt="">--}}
@include('components.books-list')

</body>
</html>




{{--    @can('create', 'App\Models\Book')--}}
{{--        <p>--}}
{{--            <a href="{{ route('books.create') }}">Новая книга</a>--}}
{{--        </p>--}}
{{--    @endcan--}}



@endsection
