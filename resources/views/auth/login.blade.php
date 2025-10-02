@extends('layouts.basic')

@section('title', 'Авторизация')

@section('content')

    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Введите E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                required>
            @error('email')
                <p class="text-danger">{{ $message }}
                @enderror

            <div id="emailHelp" class="form-text">Мы не сообщаем вашу почту сторонним лицам.</div>
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"required>
            @error('password')
                <p class="text-danger">{{ $message }}
                @enderror
        </div>
        <div class="mb-2 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Я согласен войти</label>
        </div>
        <a href="{{ route('register') }}" data-bs-toggle="modal" data-bs-dismiss="modal">Регистрация</a>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
    @error('failed')
        <p class="text-danger">{{ $message }}</p>
    @enderror

@endsection
