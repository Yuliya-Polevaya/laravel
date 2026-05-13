@extends('front.basa')

@section('main')

<div class="intro-section">
    <h2>Добро пожаловать в мир котиков 🐱</h2>
    <p>
        Здесь ты найдёшь самых милых, пушистых и красивых котиков.
        Выбирай своего любимца и наслаждайся просмотром!
    </p>
</div>

<div class="content">
    @foreach ($cards as $value)
        <div class="card">
            <img class="img_card" src="{{ $value->image }}" alt="cat">
            <div class="card-body">
                <div class="title">{{ $value->title }}</div>
                <div class="desc">{{ $value->description }}</div>
                <a href="#" class="btn">Подробнее 🐾</a>
            </div>
        </div>
    @endforeach
</div>

@endsection