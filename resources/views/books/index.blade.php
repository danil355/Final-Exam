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
            background: url({{ asset('images/list.jpg') }});

        }
    </style>
</head>
<body>
<h1 style="font-family: Arial Narrow, sans-serif">Список книг</h1>
@include('components.books-list')

</body>
</html>

{{--    @can('create', 'App\Models\Book')--}}
{{--        <p>--}}
{{--            <a href="{{ route('books.create') }}">Новая книга</a>--}}
{{--        </p>--}}
{{--    @endcan--}}



@endsection
