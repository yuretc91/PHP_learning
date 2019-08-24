<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Device</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}" />

</head>
<body>
<header>
    <div class="headerLogo"><img src="{{asset('images/header/logo.png')}}" alt="logo"></div>
    <ul class="headerMiniMenu">
        <li class="headerMiniMenuItem headerSearch"><a href="#">Поиск по сайту</a></li>
        <li class="headerMiniMenuItem headerUser"><a href="#">Войти</a></li>
        <li class="headerMiniMenuItem headerCompare"><a href="#">Сравнить</a></li>
        <li class="headerMiniMenuItem headerCart"><a href="#">Корзина</a></li>
    </ul>
    <ul class="headerSecondMenu">
        <li class="headerSecondMenuItem headerCatalog"><a href="#">КАТАЛОГ ТОВАРОВ</a> <img src="{{asset('images/icons/header/plus.png')}}" alt="plus"></li>
        <li class="headerSecondMenuItem headerDelivery"><a href="#">ДОСТАВКА</a></li>
        <li class="headerSecondMenuItem headerGarant"><a href="#">ГАРАНТИЯ</a></li>
        <li class="headerSecondMenuItem headerContacts"><a href="#">КОНТАКТЫ</a></li>
    </ul>
</header>

@yield('content')

<footer>
    <div class="footerFirstRow">
        <div class="footerLogo"><img src="{{asset('images/footer/logo.png')}}" alt="logo"></div>
        <ul class="footerMiniMenu">
            <li class="footerMiniMenuItem footerUser">Войти</li>
            <li class="footerMiniMenuItem footerCompare">Сравнить</li>
            <li class="footerMiniMenuItem footerCart">Корзина</li>
        </ul>

    </div>
    <div class="footerSecondRow">
        <div class="adress">г.Москва, ул.Строителей, 15</div>
        <ul class="footerSecondMenu">
            <li class="footerSecondMenuItem">ДОСТАВКА</li>
            <li class="footerSecondMenuItem">ГАРАНТИЯ</li>
            <li class="footerSecondMenuItem">КОНТАКТЫ</li>
        </ul>
        <div class="phone">+ 7(495)495-95-95</div>
    </div>
    <div class="footerThirdRow">
        <div class="footerLine"></div>
        <div class="socialNetwork">
            <a href="#" class="facebook"><img src="{{asset('images/icons/footer/fb.png')}}" alt="facebook"></a>
            <a href="#" class="instagramm"><img src="{{asset('images/icons/footer/inst.png')}}" alt="instagramm"></a>
            <a href="#" class="twitter"><img src="{{asset('images/icons/footer/twit.png')}}" alt="twitter"></a>
        </div>
        <div class="footerLogoShevron"><img src="{{asset('images/footer/shevron.png')}}" alt="miniLogo"></div>
    </div>
</footer>
<!--<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>-->

</body>
<!--<script src="{{mix('js/app.js')}}"></script>-->
<script>
    var leftSlide = document.getElementsByClassName("slider__slideImage");
    var rightSlide = document.getElementsByClassName("slider__slideAside");
    var imgIndex = 0;

    setInterval(function () {
        leftSlide[imgIndex].classList.remove("slideActive");
        rightSlide[imgIndex].classList.remove("slideActive");
        if (imgIndex == 2) {
            imgIndex = 0;
        } else imgIndex++;
        leftSlide[imgIndex].classList.add("slideActive");
        rightSlide[imgIndex].classList.add("slideActive");

    }, 5000);
</script>

</html>
