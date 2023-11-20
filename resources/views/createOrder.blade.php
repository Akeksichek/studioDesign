<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/hallStyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />

    <title>halls</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="textNav">
                    <a class="textNavA" href="/">Главная</a>
                </div>
                <div class="textNav">
                    <a class="textNavA" href="{{ route('equipment') }}">Оборудование</a>
                </div>
                <div class="logoNav">
                    <a href="{{ route('index') }}"><img src="../src/logo.png" alt="" /></a>
                </div>
                @if(Auth::check())
                    <div class="textNav">
                    <a class="textNavA" href="{{ route('appelation') }}">Помощь</a>
                    </div>
                    <div class="textNav">
                        @if(Auth::check())
                            <form action="{{ route('logout') }}" method="post">
                        @csrf
                                <button style="border: none; background-color: rgb(0,0,0,0); font-family: Inter; font-size: 16px;">
                                    <a type="submit" class="textNavA btnNav">выход</a>
                                </button>
                            </form>
                        @endif
                    </div>
                @else
                    <div class="textNav">
                        <a class="textNavA btnNav" id="logOpen">Вход</a>
                    </div>
                    <div class="textNav">
                        <a class="textNavA btnNav" id="regOpen">Регистрация</a>
                    </div>          
                @endif
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="formContainer">
            <form action="../broncategory.php" method="post" class="formOrder">
                <h1 class="orderTitle">Оформление заказа</h1>
                <input type="text" name="email" placeholder="Email" /><br />
                <div class="category">
                    <label class="orderTitle">Выбор категории</label>
                    <span id="selected-category"></span>
                    <select name="category" id="category">
                        <option value="albom">Фото на альбом</option>
                        <option value="passport">Фото на паспорт</option>
                        <option value="marry">Свадебные фото</option>
                        <option value="crutoe">Художественные фото</option>
                        <option value="advert">Рекламные фото</option>
                        <option value="family">Семейные фото</option>
                    </select>
                </div>
                <br />
                <div class="category">
                    <label class="orderTitle">Выбор студии</label>
                    <span id="selected-study"></span>
                    <select name="study" id="study">
                        <option value="study-berlin">Берлин</option>
                        <option value="study-astrahan">Астрахань</option>
                    </select>
                </div>
                <input class="date" type="datetime" name="datetime" placeholder="Укажите время" />
                <button type="submit" class="btnFormOrder">
                    Отправить
                </button>
            </form>
        </div>
    </div>

    <script src="../js/main.js"></script>
</body>


    <div style="bottom" class="modalLog open" id="modalLog">
        <form action="{{ route('login') }}" class="formmodalLog" method="post">
            @csrf
            <h1 class="titleLog">Вход</h1>
            <input type="text" name="name" placeholder="Введите логин" />
            <input type="text" name="password" placeholder="Введите пароль" />
            <button type="submit" class="btnLog">Подтвердить</button>
            <button type="button" class="btnLog" id="logClose">
                Отмена
            </button>
        </form>
    </div>


    <div class="modalReg" id="modalReg">
        <form action="{{ route('register') }}" class="formmodalReg" method="POST">
        @csrf
            <h1 class="titleLog">Регистрация</h1>
            <input type="text" name="name" placeholder="Введите логин" />
            <input type="email" name="email" placeholder="Введите email" />
            <input type="text" name="password" placeholder="Введите пароль" />
            <input type="text" name="password_confirmation" placeholder="Повторите пароль" />
            <button type="submit" class="btnLog">Подтвердить</button>
            <button href="" type="button" class="btnLog" id="regClose">Отмена</button>
        </form>
    </div>

</html>
