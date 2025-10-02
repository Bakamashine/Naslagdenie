@extends('layouts.basic')

@section('title')
    {{ $data->name }}
@endsection

@section('content')
    <div class="card">
        <img src={{ $data->image }} alt={{ $data->image }} />
        <h2>{{ $data->name }}</h2>
        <p>{{ $data->description }}</p>
        <h3>{{ $data->price }}</h3>
        <a href="{{ route('main') }}">На главную</a>
    </div>
@endsection
