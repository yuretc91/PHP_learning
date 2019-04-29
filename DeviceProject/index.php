<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Device</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header class="container">
        <ul class="headerMiniMenu row">
            <li class="headerMiniMenuItem col-6 headerSearch">Поиск по сайту</li>
            <li class="headerMiniMenuItem col-3 headerUser">Войти</li>
            <li class="headerMiniMenuItem col headerCompare">Сравнить</li>
            <li class="headerMiniMenuItem col headerCart">Корзина</li>
        </ul>
        <ul class="headerSecondMenu row">
            <li class="headerSecondMenuItem col-6">КАТАЛОГ ТОВАРОВ <img src="icons/header/plusIcon.png" alt="plus"></li>
            <li class="headerSecondMenuItem col-2">ДОСТАВКА</li>
            <li class="headerSecondMenuItem col-2">ГАРАНТИЯ</li>
            <li class="headerSecondMenuItem col-2">КОНТАКТЫ</li>
        </ul>
    </header>
    <main>
        <section class="slider">

                <div class="slideImage col-6"><img src="images/slider/slider1.png" alt="slider"></div>
                <div class="slideAside col-6">
                    <div class="tagline row">Делай селфи, <br> как Бен Стиллер!</div>
                    <div class="description row">Самая длинная палка для селфи доступна в нашем магазине. <br>
                        Восемь (Восемь, Карл!) метров длиной и весом всего 5 килограмм.</div>
                    <div class="sliderButtons row">
                        <div class="sliderInfo col-8">ПОДРОБНЕЕ</div>
                        <div class="col-auto">Картинки</div>
                    </div>
                    <div class="specifications row">
                        <div class="col-3">8,5 м</div>
                        <div class="col-3">5 кг</div>
                        <div class="col-4">Карбон</div>
                    </div>
                    <div class="legend row">
                        <div class="col-3">Длина палки</div>
                        <div class="col-3">Вес палки</div>
                        <div class="col-4">Материал</div>
                    </div>
                </div>
        </section>
        <section class="popular">
            <div class="popularImg">
                <div class=""><img src="images/popular/popular-1.png" alt="popular-1"></div>
                <div class=""><img src="images/popular/popular-2.png" alt="popular-2"></div>
                <div class=""><img src="images/popular/popular-3.png" alt="popular-3"></div>
                <div class=""><img src="images/popular/popular-4.png" alt="popular-4"></div>
                <div class=""><img src="images/popular/popular-5.png" alt="popular-5"></div>
                <div class=""><img src="images/popular/popular-6.png" alt="popular-6"></div>
            </div>
            <div class="popularDescription">
                <p>Виртуальная реальность</p>
                <p>Моноподы для селфи</p>
                <p>Экшн-камеры</p>
                <p>Фитнес-браслеты</p>
                <p>Умные часы</p>
                <p>Квадрокоптеры</p>
            </div>
        </section>
        <section class="services">
            <div class="servicesMenu">
                <p>ДОСТАВКА</p>
                <p>ГАРАНТИЯ</p>
                <p>КРЕДИТ</p>
            </div>
            <div class="servicesMain">
                <p class="activeService">Доставка</p>
                <p class="activeServiceDescription">Мы с удовольствием доставим ваш товар прямо к вашему подъезду совершенно бесплатно!
                    Ведь мы неплохо заработаем, поднимая его на ваш этаж</p>
            </div>
            <div class="servicesLogo">
                <img src="images/services/delivery.png" alt="">
            </div>
        </section>
        <section class="logotypes">
            <div class="logotype"><img src="images/logotypes/dji.png" alt=""></div>
            <div class="logotype"><img src="images/logotypes/spgadgets.png" alt=""></div>
            <div class="logotype"><img src="images/logotypes/gopro.png" alt=""></div>
            <div class="logotype"><img src="images/logotypes/vive.png" alt=""></div>
        </section>
        <section class="infoAndContacts">
            <div class="info">
                <div class="line"></div>
                <div class="infoName">О нас</div>
                <div class="infoDescription">Огромный выбор гаджетов не оставит равнодушным гика, который есть в каждом из нас.</div>
                <div class="infoDescription">Мы можем доставить наш товар в самые отдалённые точки России! DEVICE работает со многими транспортными компаниями.</div>
                <ul class="partners">
                    <li><a href="#">Деловые Линии</a></li>
                    <li><a href="#">Автотрейдинг</a></li>
                    <li><a href="#">ЖелДорЭкспедиция</a></li>
                </ul>
                <div class="infoAndContactsBtn"><a href="#">ПОДРОБНЕЕ О НАС</a></div>

            </div>
            <div class="contacts">
                <div class="line"></div>
                <div class="contactsName">Контакты</div>
                <div class="contactsDescription">Вы можете забрать товар сами, заехав в наш офис.
                    Заодно, вы сможете проверить работоспособность покупки. Всякое бывает</div>
                <div class="map"><img src="images/contacts/map.png" alt="map"></div>
                <div class="infoAndContactsBtn"><a href="#">НАПИШИТЕ НАМ</a></div>
            </div>
        </section>



    </main>
    <footer>
        <div class="footerFirstRow">
            <div class="footerLogo"><img src="images/footer/logo.png" alt="logo"></div>
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
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>
