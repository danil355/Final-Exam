@extends('layouts.main')

@section('content')

    <h1>Регистрация</h1>

    @include('components.form-errors')

    <form method="post" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Имя</label>
            <input value="{{ old('name') }}" class="form-control" type="text" id="name" name="name" placeholder="Иван...">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ old('email') }}" class="form-control" aria-describedby="emailHelp" type="email" id="email" name="email" placeholder="someone@example.com">
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Подтверждение</label>
            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>

    </form>

@endsection
