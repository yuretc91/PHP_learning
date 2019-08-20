<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Device</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
    <header>
        <div class="headerLogo"><img src="{{asset('images/logo.png')}}" alt="logo"></div>
        <ul class="headerMiniMenu">
            <li class="headerMiniMenuItem headerSearch"><a href="#">Поиск по сайту</a></li>
            <li class="headerMiniMenuItem headerUser"><a href="#">Войти</a></li>
            <li class="headerMiniMenuItem headerCompare"><a href="#">Сравнить</a></li>
            <li class="headerMiniMenuItem headerCart"><a href="#">Корзина</a></li>
        </ul>
        <ul class="headerSecondMenu">
            <li class="headerSecondMenuItem headerCatalog"><a href="#">КАТАЛОГ ТОВАРОВ</a> <img src="main-page/header/icons/plus.png" alt="plus"></li>
            <li class="headerSecondMenuItem headerDelivery"><a href="#">ДОСТАВКА</a></li>
            <li class="headerSecondMenuItem headerGarant"><a href="#">ГАРАНТИЯ</a></li>
            <li class="headerSecondMenuItem headerContacts"><a href="#">КОНТАКТЫ</a></li>
        </ul>
    </header>
    <main>
        <section class="slider slider-position">

            <div class="slider__slideImage slideActive" id="slideImage"><img src="main-page/main/slider/images/slider1.png" alt="slider" ></div>
            <div class="slider__slideImage"><img src="main-page/main/slider/images/slider2.png" alt="slider" ></div>
            <div class="slider__slideImage"><img src="main-page/main/slider/images/slider3.png" alt="slider" ></div>
            <div class="slider__slideAside slideActive">
                <div class="slider__slideAside__tagline">Делай селфи, <br> как Бен Стиллер!</div>
                <div class="slider__slideAside__slideDescription">Самая длинная палка для селфи доступна в нашем магазине. <br>
                    Восемь (Восемь, Карл!) метров длиной и весом всего 5 килограмм.</div>
                <div class="slider__slideAside__sliderButtons">
                    <div class="slider__slideAside__sliderButtons__info"><a href="#" class="btn_orange-black">ПОДРОБНЕЕ</a></div>
                    <div class="slider__slideAside__sliderButtons__indicator">
                        <img src="main-page/main/slider/images/sliderButtonFull.png" alt="sliderButtonFull">
                        <img src="main-page/main/slider/images/sliderButtonEmpty.png" alt="sliderButtonEmpty">
                        <img src="main-page/main/slider/images/sliderButtonEmpty.png" alt="sliderButtonEmpty">
                    </div>
                </div>
                <div class="slider__slideAside__slideSpecifications">
                    <div>8,5 м</div>
                    <div>5 кг</div>
                    <div>Карбон</div>
                </div>
                <div class="slider__slideAside__slideLegend">
                    <div>Длина палки</div>
                    <div>Вес палки</div>
                    <div>Материал</div>
                </div>
            </div>


            <div class="slider__slideAside">
                <div class="slider__slideAside__tagline">Худеем <br> правильно!</div>
                <div class="slider__slideAside__slideDescription">Самая длинная палка для селфи доступна в нашем магазине. <br>
                    Восемь (Восемь, Карл!) метров длиной и весом всего 5 килограмм.</div>
                <div class="slider__slideAside__sliderButtons">
                    <div class="slider__slideAside__sliderButtons__info" ><a href="#" class="btn_orange-black">ПОДРОБНЕЕ</a></div>
                    <div class="slider__slideAside__sliderButtons__indicator">
                        <img src="main-page/main/slider/images/sliderButtonFull.png" alt="sliderButtonFull">
                        <img src="main-page/main/slider/images/sliderButtonEmpty.png" alt="sliderButtonEmpty">
                        <img src="main-page/main/slider/images/sliderButtonEmpty.png" alt="sliderButtonEmpty">
                    </div>
                </div>
                <div class="slider__slideAside__slideSpecifications">
                    <div>8,5 м</div>
                    <div>5 кг</div>
                    <div>Карбон</div>
                </div>
                <div class="slider__slideAside__slideLegend">
                    <div>Длина палки</div>
                    <div>Вес палки</div>
                    <div>Материал</div>
                </div>
            </div>


            <div class="slider__slideAside">
                <div class="slider__slideAside__tagline">Порхает как бабочка, <br> жалит как пчела!</div>
                <div class="slider__slideAside__slideDescription">Самая длинная палка для селфи доступна в нашем магазине. <br>
                    Восемь (Восемь, Карл!) метров длиной и весом всего 5 килограмм.</div>
                <div class="slider__slideAside__sliderButtons">
                    <div class="slider__slideAside__sliderButtons__info"><a href="#" class="btn_orange-black">ПОДРОБНЕЕ</a></div>
                    <div class="slider__slideAside__sliderButtons__indicator">
                        <img src="main-page/main/slider/images/sliderButtonFull.png"  alt="sliderButtonFull">
                        <img src="main-page/main/slider/images/sliderButtonEmpty.png"  alt="sliderButtonEmpty">
                        <img src="main-page/main/slider/images/sliderButtonEmpty.png" alt="sliderButtonEmpty">
                    </div>
                </div>
                <div class="slider__slideAside__slideSpecifications">
                    <div>8,5 м</div>
                    <div>5 кг</div>
                    <div>Карбон</div>
                </div>
                <div class="slider__slideAside__slideLegend">
                    <div>Длина палки</div>
                    <div>Вес палки</div>
                    <div>Материал</div>
                </div>
            </div>
        </section>
        <section class="popular">
            <div class="popular__popularImg">
                <div class=""><img src="main-page/main/popular/images/popular-1.png" alt="popular-1"></div>
                <div class=""><img src="main-page/main/popular/images/popular-2.png" alt="popular-2"></div>
                <div class=""><img src="main-page/main/popular/images/popular-3.png" alt="popular-3"></div>
                <div class=""><img src="main-page/main/popular/images/popular-4.png" alt="popular-4"></div>
                <div class=""><img src="main-page/main/popular/images/popular-5.png" alt="popular-5"></div>
                <div class=""><img src="main-page/main/popular/images/popular-6.png" alt="popular-6"></div>
            </div>
            <div class="popular__popularDescription">
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
                <p><a href="#" class="btn_orange-black">ДОСТАВКА</a></p>
                <p><a href="#" class="btn_orange-black">ГАРАНТИЯ</a></p>
                <p><a href="#" class="btn_orange-black">КРЕДИТ</a></p>
            </div>
            <div class="servicesMain">
                <p class="activeService">Доставка</p>
                <p class="activeServiceDescription">Мы с удовольствием доставим ваш товар прямо к вашему подъезду совершенно бесплатно!
                    Ведь мы неплохо заработаем, поднимая его на ваш этаж</p>
            </div>
            <div class="servicesLogo">
                <img src="main-page/main/services/images/delivery.png" alt="">
            </div>
        </section>
        <section class="logotypes">
            <div class="logotype"><img src="main-page/main/logotypes/images/dji.png" alt=""></div>
            <div class="logotype"><img src="main-page/main/logotypes/images/spgadgets.png" alt=""></div>
            <div class="logotype"><img src="main-page/main/logotypes/images/gopro.png" alt=""></div>
            <div class="logotype"><img src="main-page/main/logotypes/images/vive.png" alt=""></div>
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
                <div class="infoAndContactsBtn"><a href="#" class="btn_orange-black">ПОДРОБНЕЕ О НАС</a></div>

            </div>
            <div class="contacts">
                <div class="line"></div>
                <div class="contactsName">Контакты</div>
                <div class="contactsDescription">Вы можете забрать товар сами, заехав в наш офис.
                    Заодно, вы сможете проверить работоспособность покупки. Всякое бывает</div>
                <div class="map"><img src="main-page/main/info-and-contacts/images/map.png" alt="map"></div>
                <div class="infoAndContactsBtn"><a href="#" class="btn_orange-black">НАПИШИТЕ НАМ</a></div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footerFirstRow">
            <div class="footerLogo"><img src="main-page/footer/images/logo.png" alt="logo"></div>
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
                <a href="#" class="facebook"><img src="main-page/footer/icons/fb.png" alt="facebook"></a>
                <a href="#" class="instagramm"><img src="main-page/footer/icons/inst.png" alt="instagramm"></a>
                <a href="#" class="twitter"><img src="main-page/footer/icons/twit.png" alt="twitter"></a>
            </div>
            <div class="footerLogoShevron"><img src="main-page/footer/images/shevron.png" alt="miniLogo"></div>
        </div>
    </footer>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>

    </body>

</html>
