<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебники и пособия</title>

    {{-- Подключаем CSS через Vite, как и на главной --}}
    @vite(['resources/css/1.css'])

    {{-- Добавляем те же стили отображения сеткой по 4 в ряд --}}
    <style>
        .notices-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Отступ между карточками */
            width: 100%;
            box-sizing: border-box;
            margin-top: 15px;
        }

        .notice-card {
            /* Высчитываем ширину для 4 колонок с учетом отступов (gap) */
            flex: 0 0 calc(25% - 15px);
            box-sizing: border-box;
            border: 2px solid #2cb33c; /* Фирменный зеленый ТПУ */
            border-radius: 16px;
            padding: 16px;
            background-color: #ffffff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08); /* Мягкая тень */
            display: flex;
            flex-direction: column;
            position: relative; /* Чтобы позиционировать сердечко */
        }

        .notice-card img.product_image {
            width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 12px;
        }

        /* Позиционирование кнопки избранного (сердечка) поверх картинки */
        .notice-card #heart {
            position: absolute;
            top: 25px;
            right: 25px;
            width: 24px;
            height: 24px;
            cursor: pointer;
            z-index: 10;
        }

        /* Стили для текстовых полей, если Tailwind не подгрузился */
        .notice-card #name {
            font-weight: bold;
            margin-top: 0.5rem;
            margin-bottom: 0.25rem;
        }

        .notice-card #price {
            color: #2cb33c;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .notice-card #adress {
            color: #6b7280;
            font-size: 0.875rem;
            margin: 0;
        }

        /* Адаптивность: на планшетах по 2 в ряд */
        @media (max-width: 992px) {
            .notice-card {
                flex: 0 0 calc(50% - 10px);
            }
        }

        /* Адаптивность: на мобильных телефонах по 1 в ряд */
        @media (max-width: 576px) {
            .notice-card {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-wrapper">
    <header>
        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/лого_с_надписью.svg') }}" id="tpu_logo" alt="Лого ТПУ" >
            </a>
        </div>

        <div class="right">
            <div>
                <a href="{{ route('selected') }}">
                    <img src="{{ asset('images/selected.svg') }}" alt="избранное" >
                </a>
            </div>

            <div>
                <a href="{{ route('basket') }}">
                    <img src="{{ asset('images/basket.svg') }}" alt="корзина" >
                </a>
            </div>

            <div id="acc">
                <img src="{{ asset('images/account.svg') }}">
            </div>
        </div>
    </header>

    <div class="underhead">
        <a href="{{ route('create') }}">
            <button>Разместить объявление</button>
        </a>

        <a href="{{ route('my_notices') }}">
            <button>Мои объявления</button>
        </a>

        <div class="search">
            <img id="magni" src="{{ asset('images/magnifier.svg') }}" alt="Лупа">

            <form action="{{ route('ads.search') }}" method="GET">
                <input type="hidden" name="category_id" value="{{ request('category_id', 12) }}">
                <input type="text" name="search" value="{{ $query ?? request('search') }}" placeholder="Поиск по названию">
                <input type="submit" value="Найти">
            </form>
        </div>

        <div id="main">
                <a href="{{ route('home.v2') }}">
                    <img src="{{ asset('images/house_icon_187945.svg') }}" alt="главная" >
                </a>
            </div>

        <div id="moon">
            <a href="{{ route('uchebniky2') }}">
                <img src="{{ asset('images/moon.svg') }}">
            </a>
        </div>
    </div>

    <main>
        <div class="headline" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Учебники и пособия</div>

        {{-- Контейнер для сетки карточек --}}
        <div class="notices-container">

            {{-- Отфильтровываем коллекцию, оставляя только category_id равный 7 (Спорт) --}}
            @forelse($ads->where('category_id', 12) as $ad)
                <div class="notice-card">
                    {{-- Поиск главной или первой картинки --}}
                    @php
                        $mainImage = $ad->images->firstWhere('is_main', true) ?? $ad->images->first();
                    @endphp

                    @if($mainImage)
                        <img src="{{ asset($mainImage->image_url) }}" class="product_image" alt="{{ $ad->title }}">
                    @else
                        <img src="{{ asset('images/white_account.svg') }}" class="product_image" alt="Нет фото">
                    @endif

                    {{-- Кнопка избранного (сердечко) --}}
                    <img id="heart" src="{{ asset('images/heart_void.svg') }}" alt="В избранное">

                    {{-- Данные объявления --}}
                    <p class="font-bold mt-2" style="font-weight: bold; margin-top: 0.5rem;">{{ $ad->title }}</p>
                    <p class="text-green-600 font-semibold" style="color: #2cb33c; font-weight: 600;">{{ number_format($ad->price, 0, '.', ' ') }} ₽</p>
                    <p class="text-gray-500 text-sm" style="color: #6b7280; font-size: 0.875rem;">Адрес: {{ $ad->address }}</p>
                    <p class="text-gray-500 text-sm" style="color: #6b7280; font-size: 0.875rem;">Номер: {{ $ad->number }}</p>
                </div>
            @empty
                {{-- Вывод сообщения, если товаров в категории Спорт нет --}}
                <div style="width: 100%; text-align: center; padding: 2rem 0; color: #6b7280;">
                    В этой категории пока нет объявлений.
                </div>
            @endforelse

        </div>
    </main>

    <footer>
        <div class="connection">
            <a href="https://vk.com/id589845030" target="_blank" class="social_networks" >
                <img width="40px" src="../../images/Vk.svg" alt="Связаться с нами в вк" >
            </a>

            <a href="" target="_blank" class="social_networks" target="_blank" >
                <img width="40px" src="../../images/GitHub.svg" alt="Наш гитхабчик">
            </a>

            <a href="https://t.me/@Komolaich" target="_blank" class="social_networks" target="_blank" >
                <img width="40px" src="../../images/telega.svg" alt="Связаться с нами в телеграме">
            </a>

        </div>
        <p>Национальный исследовательский Томский политехнический университет</p>
        <p><b>Студобмен - ИШИТР+</b></p>
    </footer>
    </div>
</body>
</html>
