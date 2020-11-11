@extends('layouts.main')
@section('content')
    <h1>Книги</h1>

{{--    @can('create', 'App\Models\Book')--}}
{{--        <p>--}}
{{--            <a href="{{ route('books.create') }}">Новая книга</a>--}}
{{--        </p>--}}
{{--    @endcan--}}

    @include('components.books-list')

@endsection
