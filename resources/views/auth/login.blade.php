@extends('layouts.main')

@section('content')

    <h1>Вход</h1>

    @include('components.form-errors')

    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ old('email') }}" class="form-control" aria-describedby="emailHelp" type="email" id="email" name="email" placeholder="someone@example.com">
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>

        <div>
            <label>
                <input {{ old( 'remember') ? 'checked' : '' }} type="checkbox" name="remember" value="1">
                Запомнить меня
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>

    </form>

@endsection
