<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сайт</title>
    <link rel="stylesheet" href="{{ asset('css/style.css?v=10') }}">
</head>
<body>

<header>
    <ul class="menu">
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="{{ route('main') }}">Котики</a></li>
        <li><a href="{{ route('user') }}">Пользователь</a></li>
        <li><a href="{{ route('myadmin') }}">Админка</a></li>
        <li><a href="{{ route('about') }}">О нас</a></li>
    </ul>
</header>

<main>
    @yield('index')
    @yield('main')
    @yield('user')
    @yield('admin')
    @yield('about')
</main>

<footer>
    <p>© 2026</p>
</footer>

</body>
</html>