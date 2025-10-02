@extends('layouts.basic')

@section('title', 'Главная страница')

@section('content')
    <h1>Добро пожаловать в наш кондитерский магазин «Наслаждение»!</h1>
    <h2>Мы рады предложить вам широкий ассортимент вкусных и качественных сладостей, сделанных с любовью и вниманием к
        деталям.</h2>
    <a href="katalog.php" class="button-katalog">Перейти в каталог</a><br><br>
    <h3>Для любых событий и дорогих вам людей</h3>
    <div class="cards">
        @if (count($data) > 0)
            @foreach ($data as $value)
                <div class="card">
                    <img src="{{ $value->image }}" />
                    <h2>{{ $value->name }}</h2>
                    <h3>{{ $value->price }}</h3>
                    <a href="{{ route('card.show', ['card' => $value->id]) }}">Подробнее</a>
                </div>
            @endforeach
        @endif
    </div>
@endsection
