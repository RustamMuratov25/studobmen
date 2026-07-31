<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <script src="{{ asset('javascript/code.js') }}"></script>
    @vite(['resources/css/2.css'])


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
            border: 2px solid #2cb33c; /* Тот самый фирменный зеленый ТПУ */
            border-radius: 16px;
            padding: 16px;
            color:white;
            background-color: #2f2f2f;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08); /* Мягкая тень */
            display: flex;
            flex-direction: column;
        }
        .notice-card p{
            text-align: left;
        }

        .notice-card img.product_image {
            width: 100%;
            height: 190px;
            border:2px solid #2cb33c;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 12px;
        }

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
            <a href="{{ route('home.v2') }}">
                <img src="{{ asset('images/лого_белое.svg') }}" id="tpu_logo" alt="Лого ТПУ" >
            </a>
        </div>

        <div class="right">
            <div>
                <a href="{{ route('selected.v2') }}">
                    <img src="{{ asset('images/white_full_heart.svg') }}" alt="избранное" >
                </a>
            </div>

            <div>
                <a href="{{ route('basket.v2') }}">
                    <img src="{{ asset('images/white_cart.svg') }}" alt="корзина" >
                </a>
            </div>


            <div id="acc">
                <img src="{{ asset('images/white_account.svg') }}">
            </div>
        </div>
</header>

<div class="underhead">
    <a href="{{ route('create.v2') }}">
        <button >Разместить объявление</button>
    </a>

    <a href="{{ route('my_notices.v2') }}">
        <button>Мои объявления</button>
    </a>

    <div class="search">
        <img id="magni" src="{{ asset('images/magnifier.svg') }}">
        {{-- Добавили action и метод для работы поиска на темной теме --}}
        <form action="{{ route('ads.search') }}" method="GET">
            <input type="text" name="search" value="{{ $query ?? request('search') }}" placeholder="Поиск объявлений">
            <input type="submit" value="Найти">
        </form>
    </div>

            <div id="main">
                <a href="{{ route('home.v2') }}">
                    <img src="{{ asset('images/house_icon_187945.svg') }}" alt="главная" >
                </a>
            </div>

    <div id="moon">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/white_moon.svg') }}">
        </a>
    </div>
</div>

    <main>
        <div class="categories">
            <div class="row">
                <div class="icon">
                    <a href="{{ route('posuda2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                        <div class="content">
                            <img src="{{ asset('images/dishes.svg') }}">
                            <span class="name">Посуда</span>
                        </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('kantselarya2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/chancery.svg') }}">
                        <span class="name">Канцелярия</span>
                    </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('tekstyle2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/textile.svg') }}">
                        <span class="name">Текстиль</span>
                    </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('peryferya2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/periphery.svg') }}">
                        <span class="name">Периферия</span>
                    </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('gadjet2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/gadgets.svg') }}">
                        <span class="name">Гаджеты</span>
                    </div>
                    </a>
                </div>

                <div class="icon" id="merch">
                    <a href="{{ route('merch2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content" >
                        <img src="{{ asset('images/лого_без_надписи.svg') }}">
                        <span class="name">Мерч</span>
                    </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="icon">
                    <a href="{{ route('sport2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                        <div class="content">
                            <img src="{{ asset('images/dishes.svg') }}">
                            <span class="name">Спорт</span>
                        </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('nastolky2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/boardgames.svg') }}">
                        <span class="name">Настолки</span>
                    </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('gameing2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/gaming.svg') }}">
                        <span class="name">Гейминг</span>
                    </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('tvorchestvo2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/creation.svg') }}">
                        <span class="name">Творчество</span>
                    </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="icon">
                    <a href="{{ route('odejda2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/outerwear.svg') }}">
                        <span class="name">Верхняя одежда</span>
                    </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('uchebniky2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/books.svg') }}">
                        <span class="name">Учебники и пособия</span>
                    </div>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('komplect2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
                    <div class="content">
                        <img src="{{ asset('images/components.svg') }}">
                        <span class="name">Комплектующие</span>
                    </div>
                    </a>
                </div>
            </div>

            <div class="row">
    <div class="icon">
        <a href="{{ route('kursovye2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
            <div class="content">
                <img src="{{ asset('images/coursework.svg') }}">
                <span class="name">Курсовые и проекты</span>
            </div>
        </a>
    </div>

    <div class="icon">
        <a href="{{ route('technika2') }}" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
            <div class="content">
                <img src="{{ asset('images/household.svg') }}">
                <span class="name">Бытовая техника</span>
            </div>
        </a>
    </div>
</div>

                   <div class="headline mb-4 font-bold text-xl" style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem;">
            @if(isset($query) && $query !== '')
                Результаты поиска по запросу: "{{ $query }}"
            @else
                Последние объявления
            @endif
        </div>

        {{-- Контейнер изменен на notices-container для применения Flexbox --}}
        <div class="notices-container">
            @forelse($ads as $ad)
                <div class="notice-card">
                    {{-- Корректный поиск главной или первой картинки по полю image_url --}}
                    @php
                        $mainImage = $ad->images->firstWhere('is_main', true) ?? $ad->images->first();
                    @endphp

                    @if($mainImage)
                        <img src="{{ asset($mainImage->image_url) }}" class="product_image" alt="{{ $ad->title }}">
                    @else
                        <img src="{{ asset('images/white_account.svg') }}" class="product_image" alt="Нет фото">
                    @endif

                    <p class="font-bold mt-2" style="font-weight: bold; margin-top: 0.5rem;">{{ $ad->title }}</p>
                    <p class="text-green-600 font-semibold" style="color: #2cb33c; font-weight: 600;">{{ number_format($ad->price, 0, '.', ' ') }} ₽</p>
                    <p class="text-gray-500 text-sm" style="font-size: 0.875rem;">Адрес: {{ $ad->address }}</p>
                    <p class="text-gray-500 text-sm" style="font-size: 0.875rem;">Номер: {{ $ad->number }}</p>
                </div>
            @empty
                <div style="width: 100%; text-align: center; padding: 2rem 0; color: #6b7280;">
                    По вашему запросу ничего не найдено.
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
