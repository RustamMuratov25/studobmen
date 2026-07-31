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
                <a href="{{ route('selected') }}">
                    <img src="{{ asset('images/white_full_heart.svg') }}" alt="избранное" >
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
        <a href="{{ route('toggle-theme') }}"><img src="{{ asset('images/white_moon.svg') }}"></a>
    </div>

</div>
    <main>
        <div class="headline">Название товара</div>

        <div class="product">
            <div><img src="" alt="Изображение товара"></div>
            <p>1000 p</p>
        </div>


    </main>


    <footer>
        <p>Томский политехнический университет 2026<br>Студобмен</p>
        <div class="connection">
            <a href="https://vk.me/join/AGcUKMcOAg6Lru/28YKDQQNoup9gEvd0IiM=" target="_blank" class="social_networks" alt="Связаться с нами в вк" >
                <img width="40px" src="https://icons.com/3781/PNG/512/vk_icon_231956.png" alt="">
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
