@extends('layouts.basic')

@section('title', 'Создание карточки')

@section('content')
    <form action="{{ route('card.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price" value="1">
            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input class="form-control" type="file" id="image" name="image">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="cards">
    @if (count($data) > 0)
        @foreach ($data as $value)
            <div class="card">
                <img src="{{ $value->image }}" />
                <h2>{{ $value->name }}</h2>
                <h3>{{ $value->price }}</h3>
                <a href="{{ route('card.show', ['card' => $value->id]) }}">Подробнее</a>

                <form method="post" action="{{ route('card.delete', ['card' => $value->id])}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        Удалить
                    </button>
                </form>
            </div>
        @endforeach
    @endif
    </div>
@endsection
