@extends('front.basa')
@section('cards')

<div class="content">
    @foreach ($cards as $card)
        <p>
            🐱 Котик = {{ $card->title }}
            | описание: {{ $card->description }}
        </p>
    @endforeach
</div>

@endsection