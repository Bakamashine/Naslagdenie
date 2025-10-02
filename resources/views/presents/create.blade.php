@extends('layouts.basic')

@section('title', 'Галерея подарков')

@section('content')
    <form action="{{ route('present.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Изображения</label>
            <input class="form-control" type="file" id="image" name="image[]" multiple>
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    @if (count($data) > 0)
        <h3>Галерея:</h3>
        <div class="cake-cards">
            <div class="cards">
                @foreach ($data as $value)
                    <div class="card">
                        <img src="{{ $value->image }}" alt="{{ $value->image }}" />
                        <form method="POST" action="{{ route('present.delete', ['presentGallery' => $value->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
