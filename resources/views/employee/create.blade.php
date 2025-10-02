@extends('layouts.basic')

@section('title', 'Создание сотрудников')

@section('content')
    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="fio" class="form-label">Имя</label>
            <input type="text" class="form-control" id="fio" aria-describedby="emailHelp" name="fio">
            @error('fio')
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
            <label for="image" class="form-label">Изображение</label>
            <input class="form-control" type="file" id="image" name="image">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (count($data) > 0)
        <div class="team-category-container">
            @foreach ($data as $value)
                <div class="team-category-card">
                    <img src="{{ $value->image }}" alt="{{ $value->image }}" />
                    <p>{{ $value->fio }}</p>
                    <div class="team-description">
                        <p>{{ $value->description }}</p>
                        <form method="post" action="{{ route('employee.delete', ['employee' => $value->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
