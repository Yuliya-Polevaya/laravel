<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>🐱</title>
</head>
<body>

<header>
    <ul class="menu">
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('cards') }}">Котики</a></li>
        <li><a href="{{ route('user') }}">Пользователь</a></li>
        <li><a href="{{ route('myadmin') }}">Админка</a></li>
        <li><a href="#">О нас</a></li>
    </ul>
</header>

<main>
    @yield('cards')
    @yield('main')
    @yield('user')
    @yield('admin')
</main>

<footer>
    <p>© {{ date('Y') }}</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>

