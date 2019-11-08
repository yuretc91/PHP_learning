<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PM Gomel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body id="body">
<header id="header">
    <div class="logo">

        <div class="logo-text">
            <p>Permanent</p>
            <p>Makeup</p>
            <p>Gomel</p>
        </div>
        <img src="{{asset('images/sakura.png')}}" alt="sakura" id="logoImg">
    </div>
    <div id="mainMenu">

            <li><a href="{{route('main')}}" class="menu-btn">Главная</a></li>
            <li><a href="{{route('posts')}}" class="menu-btn">Статьи</a></li>
            <li><a href="{{route('getPosts')}}" class="menu-btn">Галерея</a></li>
            <li><a href="#" class="menu-btn">Контакты</a></li>
    </div>

</header>
    <main id="main">
        {{--<post-component ref="foo"></post-component>--}}
        {{--@yield('content')--}}
    </main>
<footer>
    <p class="seti">Мы в социальных сетях:</p>
    <a href="#"><img src="{{asset('images/icons/ok.png')}}/" alt="ok" class="icon"></a>
    <a href="#"><img src="{{asset('images/icons/mail.png')}}" alt="mail" class="icon"></a>
    <a href="#"><img src="{{asset('images/icons/vk.png')}}" alt="vk" class="icon"></a>
    <a href="#"><img src="{{asset('images/icons/fb.png')}}" alt="fb" class="icon"></a>
    <a href="#"><img src="{{asset('images/icons/twitter.png')}}" alt="twitter" class="icon"></a>
    <a href="#"><img src="{{asset('images/icons/g.png')}}" alt="g+" class="icon"></a>
</footer>

</body>

</html>
