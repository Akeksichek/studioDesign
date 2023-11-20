<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style/reset.css">
    <link rel="stylesheet" href="css/adminStyle.css">

    <title>StudioDesign</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="admPanel">
                <nav class="nav">
                    <div class="textNav"><a class="textNavA" href="halls/createOrder.php">Почта: {{Auth::user()->email}}</a></div>
                    <div style="padding: 5px 0;" class="textNav"><a class="textNavA" id=""
                            href="{{ route('records_list') }}">Записи</a></div>
                    <div class="textNav"><a class="textNavA" href="{{ route('appDef') }}">Помощь</a></div>
                    @if(Auth::check())
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" style="
                        background-color: rgb(0,0,0,0);
                        border:none;
                        padding: 0;
                        font-size: 24px;
                        cursor: pointer;
                        " >выход</button>
                    </form>
                    @endif
                </nav>
            </div>

        </div>
    </header>
</body>
