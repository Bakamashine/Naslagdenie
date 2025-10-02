@extends('layouts.basic')

@section('title', 'Административная страница')


@section('content')
    <h1 class="text-center">Добро пожаловать на административную страницу</h1>
    <a href="{{ route('card.create')}}">Создание карточек</a>
    <a href="{{ route("employee.create")}}">Создание сотрудников</a>
    <a href="#">Торты на заказ</a>
    <a href="#">Пироженные и десерты</a>
    <a href="#">Подарочные наборы</a>
    <a href="#">Сезонные предложения</a>
    <a href="#">Статьи и рецепты</a>
@endsection
