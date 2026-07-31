<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ТПУ Регистрация</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://poisknews.ru/wp-content/uploads/2024/11/dzz10k9fx8dmhi5gvjpfa2uibs1eavba.jpg') no-repeat center center/cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-box {
            display: flex;
            width: 750px;
            height: 400px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
        }
        .left {
            background: white;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
        }
        .right {
            background: #32cd32; /* Фирменный зеленый */
            flex: 1;
            padding: 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .input-field {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border: 1px solid white;
            border-radius: 25px;
            background: transparent;
            color: white;
            outline: none;
            box-sizing: border-box;
        }
        .input-field::placeholder { color: rgba(255,255,255,0.7); }
        .btn {
            width: 100%;
            padding: 14px;
            border-radius: 25px;
            border: none;
            background: white;
            color: #32cd32;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: 0.3s;
        }
        .btn:hover { background: #f0f0f0; }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="left">
            <h2 style="color: #333;">ТОМСКИЙ ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ</h2>
            <img src="{{ asset('images/лого_с_надписью.svg') }}" width="60" alt="лого">
        </div>
        <div class="right">
            <form action="{{ route('registr.store') }}" method="POST">
                @csrf
                <label>Придумайте логин*</label>
                <input type="text" name="username" class="input-field" placeholder="Ваш логин" required>

                <label>Придумайте пароль*</label>
                <input type="password" name="password" class="input-field" placeholder="••••••••" required>

                <button type="submit" class="btn">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</body>
</html>
