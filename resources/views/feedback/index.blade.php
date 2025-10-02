@extends('layouts.basic')

@section('title', 'Отзывы')

@section('content')
    <div class="reviews-section">
        <h3>Отзывы наших клиентов:</h3>
        <div class="existing-reviews">
            @if (count($data) > 0)
                @foreach ($data as $value)
                    <div class="review-card">
                        <div class="review-header">
                            <strong>{{ $value->user->fio }}</strong>
                            <span>{{ $value->created_at }}</span>
                        </div>
                        <div class="review-body">
                            <p><strong>Оценка: @php echo str_repeat("⭐", intval($value->rate)) @endphp </strong></p>
                            <p>{{ $value->description }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    @auth
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <textarea name="description" required placeholder="Ваш отзыв"></textarea>
            <input type="number" name="rate" min="1" max="5" required placeholder="Оценка от 1 до 5">
            <button class="button-add" type="submit">Добавить отзыв</button>
        </form>

        <h3>Ваши 5 последних отзывов</h3>
        @foreach ($current_user as $value)
            <div class="review-card">
                <div class="review-header">
                    <strong>{{ $value->user->fio }}</strong>
                    <span>{{ $value->created_at }}</span>
                </div>
                <div class="review-body">
                    <p><strong>Оценка: @php echo str_repeat("⭐", intval($value->rate)) @endphp </strong></p>
                    <p>{{ $value->description }}</p>
                </div>
            </div>
        @endforeach
    @endauth
    @guest
        <p class="text-center">Незарегистрированные пользователи не могут оставлять отзывы</p>
        <a href="{{ route('login') }}" class="button">Авторизация</a>
    @endguest
@endsection
