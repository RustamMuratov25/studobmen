<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>

        @vite(['resources/css/2.css'])
</head>
<body>
    <div class="main-wrapper">
    <header>
        <div>
            <a href="{{ route('home.v2') }}">
                <img src="{{ asset('images/ТПУ лого белый8.svg') }}" id="tpu_logo" alt="Лого ТПУ" >
            </a>

        </div>

        <div class="right">
            <div>
                <a href="{{ route('selected.v2') }}">
                    <img src="{{ asset('images/heart_green-white.svg') }}" alt="избранное" >
                </a>

            </div>


            <div >
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
        <form>
            <input type="text" placeholder="Поиск объявлений">
            <input type="submit" value="Найти">
        </form>
    </div>
    <div id="moon">
        <a href="{{ route('selected') }}"><img src="{{ asset('images/white_moon.svg') }}"></a>
    </div>

</div>
    <main>
        <div class="headline">Избранное</div>
        <div class="list of notices">

            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/../../images/account.svg?q=tbn:ANd9GcTBXeX1ZkrPbHF9oueV_j_k1ll1YDT32oIx7A&s" class="product_image" alt="Здесь могли быть фотографии вашего товара">

                <a><img id="heart" src="{{ asset('images/white_heart.svg') }}"></a>

                <p id="name">SuperMegaUltraDooperClass</p>
                <p id="price">Вагон говяжей тушенки</p>
                <p id="adress">Адрес: город Москва, 3 улица Строителей, дом 1, кв 12</p>


            </div>

        </div>
    </main>


    <footer>
        <p>Томский политехнический университет 2026<br>Студобмен</p>
        <div class="connection">
            <a href="https://vk.me/join/AGcUKMcOAg6Lru/28YKDQQNoup9gEvd0IiM=" target="_blank" class="social_networks" alt="Связаться с нами в вк" >
                <img width="40px" src="https://images.icon-icons.com/3781/PNG/512/vk_icon_231956.png" alt="">
            </a>

            <a href="https://t.me/@Komolaich" class="social_networks" target="_blank" alt="Связаться с нами в вк" >
                <img width="40px" src="https://freesvg.org/img/new-instagram-logo-glyph.png" alt="">
            </a>

            <a href="" target="_blank" class="social_networks">
                <img width="70px" src="https://svgsilh.com/png-512/2071331.png" alt="">
            </a>

            <a href="" target="_blank" class="social_networks">
                <img width="40px" src="https://www.svgrepo.com/show/342286/telegram.svg" alt="">
            </a>
        </div>
    </footer>
    </div>

</body>
</html>
