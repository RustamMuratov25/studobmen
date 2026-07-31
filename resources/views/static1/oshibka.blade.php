<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка авторизации | ТПУ</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            /* Фоновое изображение здания ТПУ */
            background: url('fonlogin.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            .left-side img {
    width: 300px;  /* Добавлено px */
    height: 300px; /* Добавлено px */}
        }

        .container {
            display: flex;
            width: 800px;
            height: 400px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            border-radius: 12px;
            overflow: hidden;
        }

        /* Левая белая часть */
        .left-side {
            background-color: #ffffff;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }

        .left-side h1 {
            font-size: 22px;
            color: #000;
            text-transform: uppercase;
            line-height: 1.4;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .logo-img {
            width: 80px;
            height: auto;
        }

        /* Правая зеленая часть */
        .right-side {
            background-color: #32cd32; /* Тот самый зеленый ТПУ */
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            color: white;
            text-align: center;
        }

        .error-text {
            font-size: 20px;
            line-height: 1.5;
            margin-bottom: 40px;
            font-weight: 500;
        }

        /* Кнопка "Попробовать ещё" */
        .retry-btn {
            background-color: white;
            color: #32cd32;
            text-decoration: none;
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .retry-btn:hover {
            background-color: #f8f8f8;
            transform: scale(1.05);
        }

        /* Адаптация под мобильные устройства */
        @media (max-width: 820px) {
            .container {
                flex-direction: column;
                width: 90%;
                height: auto;
            }
            .left-side, .right-side {
                padding: 50px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="left-side">
            <img src="{{ asset('images/лого_с_надписью.svg') }}">

        </div>

        <div class="right-side">
            <div class="error-text">
                Логин или пароль были<br>введены неправильно
            </div>

            <a href="{{ url('/') }}" class="retry-btn">Попробовать ещё</a>
        </div>
    </div>

</body>
</html>
