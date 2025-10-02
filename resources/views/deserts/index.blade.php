@extends('layouts.basic')

@section('title', 'Десерты')

@section('content')
    <h3>Пирожные и десерты:</h3>
    @if (count($data) > 0)
        <div class="cake-cards">
            <div class="cards">
            @foreach ($data as $value)
                <div class="card">
                    <img src="{{ $value->image }}" alt="{{ $value -> image }}" />
                </div>
            @endforeach
            </div>
        </div>
    @else
        <p class="text-center">Фотографий нет</p>
    @endif
@endsection
