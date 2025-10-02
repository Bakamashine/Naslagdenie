<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js?id=104275297', 'ym');

        ym(104275297, 'init', {
            ssr: true,
            webvisor: true,
            clickmap: true,
            ecommerce: "dataLayer",
            accurateTrackBounce: true,
            trackLinks: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/104275297" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <header>
        <div class="head-logo">
            <a href="{{ route('main') }}"><img src="/img/logo.png" alt="Логотип"></a>
        </div>
        <div class="head-menu">
            <div class="search-container">
                <form action="search.php" method="GET" class="search-form">
                    <input type="text" name="query" class="search-input" placeholder="Поиск" required>
                    <button class="search-button" type="submit"><img src="/img/search.svg" alt="Поиск"></button>
                </form>
            </div>
        </div>
    </header>
    <nav>
        <button id="toggleSidebar" class="hidden">☰</button>
        <div class="side-menu">
            <button class="close-btn" id="close-btn">✖</button>
            <ul class="list-unstyled">
                <li><b><a class="a-head" href="{{ route('main') }}">Главная</a></b></li>
                <li><b><a class="a-head" href="{{ route('about_us') }}">О нас</a></b></li>
                <li><b><a class="a-head" href="{{ route('cake') }}">Торты на заказ</a></b></li>
                <li><b><a class="a-head" href="#">Пирожные и десерты</a></b></li>
                <li><b><a class="a-head" href="#">Подарочные наборы</a></b></li>
                <li><b><a class="a-head" href="#">Сезонные предложения</a></b></li>
                <li><b><a class="a-head" href="#">Статьи и рецепты</a></b></li>
                <li><b><a class="a-head" href="{{ route('contacts') }}">Контакты</a></b></li>
                <li><b><a class="a-head" href="#">Корзина</a></b></li>

                <li><b><a class="a-head" href="#">Заказы</a></b></li>
                <li class="cart-container" id="cart-container">
                    <a class="a-head" href="cart.php">
                        <img src="/img/cart.svg" alt="Корзина" class="cart-icon" id="cart-icon">
                    </a>
                    <span class="cart-count" id="cart-count"></span>
                </li>
                <li class="social-icons" id="profile-link">
                    <img src="/img/profile.svg" alt="">
                    <a class="a-head" href="profile.php">Профиль</a>
                </li>
                @auth
                    <a id="logout" href="#" class="btn btn-danger">Выйти</a>';
                    <form id="logout_form" class="d-none" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                @endauth
                @guest
                    {{-- <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#loginModal">Вход</a> --}}
                    <a href="{{ route('register') }}" class="button">Регистрация</a>
                    <a href="{{ route('login') }}" class="button">Авторизация</a>

                @endguest
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    {{-- @include('components/LoginModalWindow')
    @include('components/RegisterModalWindow') --}}
    <!-- Скрипты -->

    <script>
        // Скрытая форма для выхода
        document.addEventListener('DOMContentLoaded', function() {
            const logoutLink = document.getElementById('logout');
            const logoutForm = document.getElementById('logout_form');

            if (logoutLink && logoutForm) {
                logoutLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    logoutForm.submit();
                });
            }
        });
    </script>
    <script>
        // Скрипт для шторки
        const side_menu = document.querySelector(".side-menu");
        const close_btn = document.getElementById("close-btn");
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            side_menu.classList.toggle("show");
        });
        close_btn.addEventListener('click', function() {
            side_menu.classList.toggle("show");
        });

        // Обновление счетчика корзины
        document.addEventListener('DOMContentLoaded', function() {
            // card_count is undefined
            const initialCartCount = 3
            const cartCountElement = document.getElementById('cart-count');
            cartCountElement.textContent = initialCartCount;
        });
    </script>
    <!-- Модальные окна и другие скрипты -->
    <script>
        const modalElements = document.querySelectorAll('.modal');
        const openButtons = document.querySelectorAll('.open-modal-btn');
        const closeButtons = document.querySelectorAll('[data-close]');

        openButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const modalId = btn.getAttribute('data-modal');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('show');
                    document.body.classList.add('modal-open');
                }
            });
        });

        closeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const modal = btn.closest('.modal');
                if (modal) {
                    modal.classList.remove('show');
                    document.body.classList.remove('modal-open');
                }
            });
        });

        modalElements.forEach(modal => {
            modal.addEventListener('click', e => {
                if (e.target === modal) {
                    modal.classList.remove('show');
                    document.body.classList.remove('modal-open');
                }
            });
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
