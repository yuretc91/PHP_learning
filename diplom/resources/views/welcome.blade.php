@extends('layouts.main-page')

@section('content')
    <main>
        <section class="slider slider-position">

            <div class="slider__slideImage slideActive" id="slideImage"><img src="{{asset('images/slider/slider1.png')}}" alt="slider" ></div>


            <div class="slider__slideAside slideActive">
                <div class="slider__slideAside__tagline">Делай селфи, <br> как Бен Стиллер!</div>
                <div class="slider__slideAside__slideDescription">Самая длинная палка для селфи доступна в нашем магазине. <br>
                    Восемь (Восемь, Карл!) метров длиной и весом всего 5 килограмм.</div>
                <div class="slider__slideAside__sliderButtons">
                    <div class="slider__slideAside__sliderButtons__info"><a href="#" class="btn_orange-black">ПОДРОБНЕЕ</a></div>
                    <div class="slider__slideAside__sliderButtons__indicator">
                        <img src="{{asset('images/slider/sliderButtonFull.png')}}" alt="sliderButtonFull">
                        <img src="{{asset('images/slider/sliderButtonEmpty.png')}}" alt="sliderButtonEmpty">
                        <img src="{{asset('images/slider/sliderButtonEmpty.png')}}" alt="sliderButtonEmpty">
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

            <div class="slider__slideImage"><img src="{{asset('images/slider/slider2.png')}}" alt="slider" ></div>
            <div class="slider__slideAside">
                <div class="slider__slideAside__tagline">Худеем <br> правильно!</div>
                <div class="slider__slideAside__slideDescription">Самая длинная палка для селфи доступна в нашем магазине. <br>
                    Восемь (Восемь, Карл!) метров длиной и весом всего 5 килограмм.</div>
                <div class="slider__slideAside__sliderButtons">
                    <div class="slider__slideAside__sliderButtons__info" ><a href="#" class="btn_orange-black">ПОДРОБНЕЕ</a></div>
                    <div class="slider__slideAside__sliderButtons__indicator">

                        <img src="{{asset('images/slider/sliderButtonEmpty.png')}}" alt="sliderButtonEmpty">
                        <img src="{{asset('images/slider/sliderButtonFull.png')}}" alt="sliderButtonFull">
                        <img src="{{asset('images/slider/sliderButtonEmpty.png')}}" alt="sliderButtonEmpty">
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

            <div class="slider__slideImage"><img src="{{asset('images/slider/slider3.png')}}" alt="slider" ></div>
            <div class="slider__slideAside">
                <div class="slider__slideAside__tagline">Порхает как бабочка, <br> жалит как пчела!</div>
                <div class="slider__slideAside__slideDescription">Самая длинная палка для селфи доступна в нашем магазине. <br>
                    Восемь (Восемь, Карл!) метров длиной и весом всего 5 килограмм.</div>
                <div class="slider__slideAside__sliderButtons">
                    <div class="slider__slideAside__sliderButtons__info"><a href="#" class="btn_orange-black">ПОДРОБНЕЕ</a></div>
                    <div class="slider__slideAside__sliderButtons__indicator">
                        <img src="{{asset('images/slider/sliderButtonEmpty.png')}}" alt="sliderButtonEmpty">
                        <img src="{{asset('images/slider/sliderButtonEmpty.png')}}" alt="sliderButtonEmpty">
                        <img src="{{asset('images/slider/sliderButtonFull.png')}}" alt="sliderButtonFull">
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
                <div class=""><img src="{{asset('images/popular/popular-1.png')}}" alt="popular-1"></div>
                <div class=""><img src="{{asset('images/popular/popular-2.png')}}" alt="popular-2"></div>
                <div class=""><img src="{{asset('images/popular/popular-3.png')}}" alt="popular-3"></div>
                <div class=""><img src="{{asset('images/popular/popular-4.png')}}" alt="popular-4"></div>
                <div class=""><img src="{{asset('images/popular/popular-5.png')}}" alt="popular-5"></div>
                <div class=""><img src="{{asset('images/popular/popular-6.png')}}" alt="popular-6"></div>
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
                <img src="{{asset('images/services/delivery.png')}}" alt="">
            </div>
        </section>
        <section class="logotypes">
            <div class="logotype"><img src="{{asset('images/logotypes/dji.png')}}" alt=""></div>
            <div class="logotype"><img src="{{asset('images/logotypes/spgadgets.png')}}" alt=""></div>
            <div class="logotype"><img src="{{asset('images/logotypes/gopro.png')}}" alt=""></div>
            <div class="logotype"><img src="{{asset('images/logotypes/vive.png')}}" alt=""></div>
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
                <div class="map"><img src="{{asset('images/info-and-contacts/map.png')}}" alt="map"></div>
                <div class="infoAndContactsBtn"><a href="#" class="btn_orange-black">НАПИШИТЕ НАМ</a></div>
            </div>
        </section>
    </main>

    <script>
        var leftSlide = document.getElementsByClassName("slider__slideImage");
        var rightSlide = document.getElementsByClassName("slider__slideAside");
        var imgIndex = 0;

        setInterval(function () {
            leftSlide[imgIndex].classList.remove("slideActive");
            rightSlide[imgIndex].classList.remove("slideActive");
            if (imgIndex === 2){
                imgIndex = 0;
            } else imgIndex++;
            leftSlide[imgIndex].classList.add("slideActive");
            rightSlide[imgIndex].classList.add("slideActive");
        }, 5000);
    </script>
@endsection