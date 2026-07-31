<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>

    {{-- Подключаем CSS через Vite --}}
    @vite(['resources/css/1.css'])
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
                    {{-- Обновлено имя файла иконки корзины из вашего кода --}}
                    <img src="{{ asset('images/fluent_cart-24-filled.svg') }}" alt="корзина" >
                </a>
            </div>

            <div>
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
            <img id="magni" src="{{ asset('images/magnifier.svg') }}">
            <form>
                <input type="text" placeholder="Поиск объявлений">
                <input type="submit" value="Найти">
            </form>
        </div>

        <div id="main">
                <a href="{{ route('home.v2') }}">
                    <img src="{{ asset('images/house_icon_187945.svg') }}" alt="главная" >
                </a>
            </div>

        <div id="moon">
            <a href="{{ route('basket.v2') }}">
                <img src="{{ asset('images/moon.svg') }}">
            </a>
        </div>
    </div>

    <main>
        <div class="headline">Корзина</div>
        <div class="list of notices">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBXeX1ZkrPbHF9oueV_j_k1ll1YDT32oIx7A&s" class="product_image" alt="Фото товара">

                <img id="heart" src="{{ asset('images/heart_void.svg') }}">

                <p id="name">SuperMegaUltraDooperClass</p>
                <p id="price">Вагон говяжей тушенки</p>
                <p id="adress">Адрес: город Москва, 3 улица Строителей, дом 1, кв 12</p>
            </div>
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
