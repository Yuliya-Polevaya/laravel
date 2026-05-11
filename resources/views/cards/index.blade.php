<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: Arial, sans-serif;
    min-height:100vh;
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
}

.menu{
    display:flex;
    justify-content:center;
    gap:25px;
    padding:20px;
}

.menu a{
    color:white;
    text-decoration:none;
    font-size:16px;
    transition:0.3s;
}

.menu a:hover{
    opacity:0.7;
}

h1{
    text-align:center;
    margin:30px 0;
    color:white;
}

.content{
    display:flex;
    flex-wrap:wrap;
    gap:25px;
    justify-content:center;
    padding:20px;
}

.card{
    width:300px;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    transition:0.4s;
}

.card:hover{
    transform:scale(1.05);
    box-shadow:0 12px 25px rgba(0,0,0,0.25);
}

.img_card{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-body{
    padding:15px;
}

.title{
    font-size:20px;
    font-weight:bold;
    margin-bottom:10px;
}

.desc{
    color:#666;
    margin-bottom:15px;
    font-size:14px;
}

.btn{
    display:inline-block;
    padding:10px 15px;
    background:#2575fc;
    color:white;
    text-decoration:none;
    border-radius:8px;
    transition:0.3s;
}

.btn:hover{
    background:#1a5fd1;
}

footer{
    margin-top:50px;
    color:white;
    text-align:center;
    padding:20px;
}
</style>
</head>

<body>

<div class="menu">
    <a href="/">Главная</a>
    <a href="/cards">Карточки</a>
    <a href="/about">О нас</a>
</div>

<h1>Каталог кошек</h1>

<div class="content">
    @foreach ($cards as $value)
        <div class="card">
            <img class="img_card" src="{{ $value->image }}" alt="">
            <div class="card-body">
                <div class="title">{{ $value->title }}</div>
                <div class="desc">{{ $value->description }}</div>
                <a href="#" class="btn">Подробнее</a>
            </div>
        </div>
    @endforeach
</div>

<footer>
    © Каталог
</footer>

</body>
</html>