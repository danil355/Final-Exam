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
                background-color: peru; /* Цвет текста */
            }
        </style>
    </head>
    <body>
    <br>
    <h1 style="text-align: center; color: linen"><em>Добро пожаловать в библиотеку книг!</em></h1>
    <br>
    <img style="width: 65%; margin-left: 190px;" src="{{ asset('images/blog.svg') }}" alt="">


    </body>
    </html>


@endsection
