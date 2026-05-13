@extends('front.basa')
@section('text')
    <h1>{{ $text }}</h1>
@endsection
@section('cards')
<div class="user-section">
    <h2>Добро пожаловать, {{ $name }}! 🐱</h2>
    <p>Это ваша персональная страница в кошачьем сайте.Здесь вы можете просматривать котиков, сохранять любимых и пользоваться функциями сайта.</p>
</div>
@endsection