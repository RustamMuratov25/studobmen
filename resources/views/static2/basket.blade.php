<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>

    {{-- Подключение темных стилей через asset (или замените на @vite(['resources/css/2.css'])) --}}
        @vite(['resources/css/2.css'])
</head>
<body>
    <div class="main-wrapper">
    <header>
        <div>
            <a href="{{ route('home.v2') }}">
                <img src="{{ asset('images/ТПУ лого белый8.svg') }}" id="tpu_logo" alt="Лого ТПУ">
            </a>
        </div>

        <div class="right">
            <div>
                <a href="{{ route('selected.v2') }}">
                    <img src="{{ asset('images/white_full_heart.svg') }}" alt="избранное">
                </a>
            </div>

            <div>
                <a href="{{ route('basket.v2') }}">
                    <img src="{{ asset('images/cart_green-white.svg') }}" alt="корзина">
                </a>
            </div>

            <div id="acc">
                <img src="{{ asset('images/white_account.svg') }}" alt="аккаунт">
            </div>
        </div>
    </header>

    <div class="underhead">
        <a href="{{ route('create.v2') }}">
            <button>Разместить объявление</button>
        </a>

        <a href="{{ route('my_notices.v2') }}">
            <button>Мои объявления</button>
        </a>

        <div class="search">
            <img id="magni" src="{{ asset('images/magnifier.svg') }}">
            <form action="#" method="GET">
                <input type="text" name="query" placeholder="Поиск объявлений">
                <input type="submit" value="Найти">
            </form>
        </div>

        <div id="moon">
            {{-- Ссылка ведет на роут переключения темы обратно на светлую --}}
            <a href="{{ route('basket') }}">
                <img src="{{ asset('images/white_moon.svg') }}" alt="Переключить тему">
            </a>
        </div>
    </div>

    <main>
        <div class="headline">Корзина</div>
        <div class="list of notices">

            {{-- Если вы будете передавать массив товаров из контроллера, раскомментируйте этот цикл: --}}
            {{-- @forelse($basketItems as $item) --}}
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBXeX1ZkrPbHF9oueV_j_k1ll1YDT32oIx7A&s" class="product_image" alt="Здесь могли быть фотографии вашего товара">

                <a href="#"><img id="heart" src="{{ asset('images/white_heart.svg') }}"></a>

                <p id="name">SuperMegaUltraDooperClass</p>
                <p id="price">Вагон говяжей тушенки</p>
                <p id="adress">Адрес: город Москва, 3 улица Строителей, дом 1, кв 12</p>
            </div>
            {{-- @empty --}}
            {{--     <p>Ваша корзина пуста</p> --}}
            {{-- @endforelse --}}

        </div>
    </main>

    <footer>
        <p>Томский политехнический университет 2026<br>Студобмен</p>
        <div class="connection">
            <a href="https://vk.me/join/AGcUKMcOAg6Lru/28YKDQQNoup9gEvd0IiM=" target="_blank" class="social_networks" title="Связаться с нами в ВК">
                <img width="40px" src="https://images.icon-icons.com/3781/PNG/512/vk_icon_231956.png" alt="VK">
            </a>

            <a href="https://t.me/@Komolaich" class="social_networks" target="_blank" title="Связаться с нами в Telegram">
                <img width="40px" src="https://freesvg.org/img/new-instagram-logo-glyph.png" alt="Instagram">
            </a>

            <a href="#" target="_blank" class="social_networks">
                <img width="70px" src="https://svgsilh.com/png-512/2071331.png" alt="">
            </a>

            <a href="#" target="_blank" class="social_networks">
                <img width="40px" src="https://www.svgrepo.com/show/342286/telegram.svg" alt="Telegram">
            </a>
        </div>
    </footer>
    </div>
</body>
</html>
