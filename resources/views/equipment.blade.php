<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/eModal.css') }}" />
  <title>StudioDesign</title>
</head>
<body>
<header class="header">
    <div class="container">
      <nav class="nav">
        <div class="textNav"><a class="textNavA" href="{{ route('createOrder') }}">Записаться</a></div>
        <div class="textNav"><a class="textNavA" href="/">Главная</a></div>
        <div class="logoNav"><a href="{{ route('index') }}"><img src="src/logo.png" alt=""></a></div>
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
    <div class="text_qe">
      <div class="text_eq" >
      Жить на 100%! Создавать прекрасное. Вдохновлять. Все это и многое другое мы — фотостудия foto4ka(фоточка). В нашем портфолио большой опыт работы с крупнейшими компаниями и печатными СМИ, а также сотрудничество с известными мировыми брендами. Мы проводим рекламные и персональные съемки, смело беремся за сложные задачи и создаем невероятные проекты. Вы привыкли работать только с профессионалами, выбирать лучшее и не боитесь смелых импровизаций? Тогда мы нашли друг друга. Мы не ищем примитивных путей. Мы привыкли впечатлять наших клиентов. Мы уверены, что сможем впечатлить и Вас!
    
    <div class="company">
      <img src="/src/comp1.png" alt="">
      <img src="/src/comp2.png" alt="">
      <img src="/src/comp3.png" alt="">
      <img src="/src/comp4.png" alt="">
      <img src="/src/comp5.png" alt="">
    </div>
    </div>
    </div>
    
    
  </div>



  <script src="../js/main.js"></script>


</body>

<div class="container">
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
</div>
<div class="container">
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
</div>

</html>