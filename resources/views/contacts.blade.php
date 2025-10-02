@extends('layouts.basic')

@section('title', 'Контакты')

@section('content')
    <div class="flex-center">
        <div class="wrapper">
            <iframe width="700" height="400" style="border:0" loading="lazy" allowfullscreen
                src="https://maps.google.com/maps?q=Парковая+улица,+3,+посёлок+Солнечный,+Яменское+сельское+поселение,+Рамонский+район,+Воронежская+область,+396005&hl=ru&z=15&output=embed">
            </iframe>
        </div>

    </div>
    <div class="text-center">
        <h1>Контактные данные:</h1>
        <p>Телефон: +7 (123) 456-7890</p>
        <p>Email: info@naslazhdenie.ru</p>
        <p>Адрес: Парковая улица, 3, посёлок Солнечный, Яменское сельское поселение, Рамонский район, Воронежская область,
            396005</p>
    </div>
@endsection
