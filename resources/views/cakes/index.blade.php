@extends('layouts.basic')

@section('title', 'Торты на заказ')
@section('content')
    <h1>Торты на заказ</h1>
    <h2>Здесь вы можете заказать торты на любой праздник — дни рождения, свадьбы, юбилеи и другие торжества. Мы предложим
        вам множество вариантов начинок и дизайна.</h2>
    <h3>Категории тортов:</h3>
    <div class="cake-category-container">
    </div>
    <h3>Закажите торт для себя или для знакомых:</h3>
    <h1>* Оплата пока только наличными</h1>

    <form method="POST">
        <div class="cake-order-container">
            <h1 class="cake-order-title">Заказать торт</h1>
            <label class="cake-order-label" for="category">Выберите категорию торта:</label>
            <select class="cake-order-select" id="category" name="category" required onchange="calculateTotal()">
                <option value="на день рождения">На день рождения</option>
                <option value="детский">Детский</option>
                <option value="свадебный">Свадебный</option>
                <option value="тематический">Тематический</option>
                <option value="мультоторт">МультоТорт</option>
            </select>
            <label class="cake-order-label" for="flavor">Выберите вкус:</label>
            <select class="cake-order-select" id="flavor" name="flavor" required onchange="calculateTotal()">
                <option value="шоколадный">Шоколадный</option>
                <option value="ванильный">Ванильный</option>
                <option value="фруктовый">Фруктовый</option>
            </select>
            <label class="cake-order-label" for="design">Выберите дизайн:</label>
            <select class="cake-order-select" id="design" name="design" required onchange="calculateTotal()">
                <option value="классический">Классический</option>
                <option value="современный">Современный</option>
                <option value="тематический">Тематический</option>
            </select>
            <label class="cake-order-label" for="details">Напишите дополнительные детали к вашему заказу:</label>
            <textarea class="cake-order-textarea" id="details" name="details" required
                placeholder="Адрес куда нужен торт, самовывоз/доставкой, что добавить к торту (Свечки на торт с цифрой, сладкое изображение, статуэтку)"></textarea>
            <label class="cake-order-label" for="date">Выберите дату, когда нужен торт:</label>
            <input class="cake-order-input" type="date" id="date" name="date" required>
            <label class="cake-order-label" for="email">Введите свою почту:</label>
            <input class="cake-order-input" type="email" id="email" name="email" required>
            <label class="cake-order-label" for="phone">Введите свой телефон:</label>
            <input class="cake-order-input" type="tel" id="phone" name="phone" required>
            <p id="total-cost" class="cake-order-total"></p>
            <button class="cake-order-button" type="submit">Заказать</button>
        </div>
        <p id="total-cost" class="cake-order-total"></p>
    </form>
    @if (count($data) > 0)
        <h3>Примеры заказов от наших клиентов:</h3>
        <div class="cake-cards">
            <div class="cards">
                @foreach ($data as $value)
                    <div class="card">
                        <img src="{{ $value->image }}" alt="{{ $value->image }}" />
                    </div>
                @endforeach
            </div>

        </div>
    @endif
@endsection
