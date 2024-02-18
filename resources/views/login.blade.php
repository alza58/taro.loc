<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/style.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="wrap">
    <nav>
    <ul>
        <li><a href="{{ url('/log') }}">Авторизация</a></li>
        <li><a href="#">Регистрация</a></li>
        <li><a href="#">Личный кабинет</a></li>
    </ul>



    </nav>
        <div class="container">
            <div class="box">
                <div>
                <h1> Авторизация</h1>

                <form action="{{ url('/log') }}">
                <label for="email">Email:</label>
                <input type="Email" name = "email" required placeholder="excample@yandex.ru">
                <label for="password">Password:</label>
                <input type="Password"name = "password" required placeholder="Введите пароль">
                <!--required = обязательное поле для заполнения-->
                <button type="submimt" class="btn">Войти</button>
                </form>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>
