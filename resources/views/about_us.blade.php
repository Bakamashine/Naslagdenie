@extends('layouts.basic')

@section('title', 'О нас')

@section('content')
    <h1>О нашем магазине</h1>
    <div class="info-section">
        <h1>Добро пожаловать в кондитерский магазин "Наслаждение"!</h1>
        <p>Мы рады предложить вам широкий ассортимент вкусных и качественных сладостей, сделанных с любовью и вниманием к
            деталям.</p>
    </div>
    <div class="offers-section">
        <h2>Что мы предлагаем:</h2>
        <b>
            <p><a href="/cakes.php">Торты на заказ</a>
        </b>: У нас вы можете заказать торты на любой праздник — дни рождения, свадьбы, юбилеи и другие торжества.</p>
        <b>
            <p><a href="/pastries.php">Пирожные и десерты</a>
        </b>: Наши пирожные и десерты порадуют вас своим вкусом и разнообразием.</p>
        <b>
            <p><a href="/pastries.php">Сладости для детей</a>
        </b>: Мы предлагаем специальные десерты для детей: веселые пирожные, конфеты и сладкие подарки.</p>
        <b>
            <p><a href="/pastries.php">Кондитерские изделия</a>
        </b>: У нас всегда в наличии разнообразные печенья, пряники и другие десерты.</p>
    </div>
    <div class="why-choose-us-section">
        <h2>Почему выбирают нас:</h2>
        <b>
            <p><a href="#">Качество</a>
        </b>: Мы используем только свежие и натуральные ингредиенты.</p>
        <b>
            <p><a href="#">Индивидуальный подход</a>
        </b>: Каждый заказ для нас уникален.</p>
        <b>
            <p><a href="#">Приемлемые цены</a>
        </b>: Мы стремимся сделать наши десерты доступными.</p>
        <b>
            <p><a href="#">Доставка</a>
        </b>: Мы предлагаем доставку по городу.</p>
    </div>
    <h2 class="text-center">Мы - команда высококлассных кондитеров, которые стремятся создавать только лучшие сладости.</h2>
        <a href="{{ route('feedback') }}" class="button">Отзывы</a>
    <h3>Наша команда:</h3>
    {{-- <div class="team-category-container">
        <?php include 'project/team_conditers.php'; ?>
    </div> --}}
    <h3>Видео о нашем магазине:</h3>
    <div
        style="max-width: 800px; margin: auto; border-radius: 12px; overflow: hidden; position: relative; padding-bottom: 37.5%; height: 0;">
        <iframe src="https://rutube.ru/play/embed/c47156125b4f2f57b323a801283f65b6"
            style="border: none; border-radius: 12px; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
            allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>

@endsection
