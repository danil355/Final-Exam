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
        body{
            background: #e0dcde;
        }
    </style>

</head>
<body>

<h2 style="color: chocolate; font-family: Arial Narrow, sans-serif">Любимые книги</h2>
</body>
</html>


    @include('components.books-list')

@endsection
