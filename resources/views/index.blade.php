<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />

    <title>StudioDesign</title>
</head>

<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="textNav">
                    <a class="textNavA" href="{{ route('createOrder')}}">Записаться</a>
                </div>
                <div class="textNav">
                    <a class="textNavA" href="{{ route('equipment') }}">О нас</a>
                </div>
                <div class="logoNav">
                    <a href="{{ route('index') }}"><img src="{{ asset('src/logo.png') }}" alt="" /></a>
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
        <div class="services">
            <div class="twoBlocks">
                <div class="leftBlock">
                    <div class="albom">
                        <img src="src/albomPhoto.png" alt="" />
                        <p class="albomtext">Фото на альбом</p>
                    </div>
                    <div class="rightphoto">
                        <div class="pasblock">
                            <img src="src/pasPhoto.png" alt="" />
                            <p class="pastexttop">Фото на паспорт</p>
                        </div>
                        <div class="marryphoto">
                            <img src="src/marryphoto.png" alt="" />
                            <p class="marrytext">Свадебные фото</p>
                        </div>
                    </div>
                </div>
                <div class="rightBlock">
                    <div class="rightblockphoto2">
                        <div class="epick">
                            <img src="src/epick.png" alt="" />
                            <p class="pastext">Художественные фото</p>
                        </div>
                        <div class="marryphoto">
                            <img src="src/advertisementphoto.png" alt="" />
                            <p class="marrytext">Рекламные фото</p>
                        </div>
                    </div>

                    <div class="albom albomR">
                        <img src="src/familyphoto.png" alt="" />
                        <p class="albomtext">Семейные фото</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script>
    
</body>

    <div class="modalLog" id="modalLog">
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
