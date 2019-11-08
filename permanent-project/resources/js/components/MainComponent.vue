<template>
    <div>
        <header id="header">
            <div class="logo">

                <div class="logo-text">
                    <p>Permanent</p>
                    <p>Makeup</p>
                    <p>Gomel</p>
                </div>

                <img :src="asset('images/sakura.png')" alt="sakura" id="logoImg">
            </div>
            <ul class="menu" id="mainMenu">
                <!--<li><a href="{{route('main')}}" class="menu-btn">Главная</a></li>
                <li><a href="{{route('posts')}}" class="menu-btn">Статьи</a></li>
                <li><a href="{{route('getPosts')}}" class="menu-btn">Галерея</a></li>
                <li><a href="#" class="menu-btn">Контакты</a></li>-->
            </ul>

        </header>
       <!-- <main id="main">
            <section class="main-section">

                <article class="article-left">
                    <p>АКЦИЯ!</p>

                    <img src="{{asset('images/skidka.png')}}" alt="skidka" id="img-skidka">
                    <p>
                        До конца месяца записывайтесь онлайн и получайте скидку
                    </p>
                    <a href="#" class="article-button">Записаться</a>
                </article>
                <article class="article-right">
                    <p>
                        Время работы: <br> вторник - суббота <br> 9:00 - 20:00 <br>
                        <span class="consult">Получить консультацию можно по телефону:</span>
                    </p>
                    <ul class="tel">
                        <li>8(029)1234567</li>
                        <li>8(033)9876543</li>
                    </ul>
                    <span>Мы будем рады видеть Вас в качестве наших клиентов!</span>
                </article>
            </section>
            <hr>
            <section class="main-section">
                <article class="article-left">
                    <img src="{{asset('images/permanent.jpg')}}" alt="permanent" class="img-procedure">
                </article>
                <article class="article-right">
                    <p id="permanent">Перманентный макияж - отличная возможность выглядеть в любой ситуации безупречно! </p>
                    <a href="#" class="article-button">Узнать больше</a>
                </article>
            </section>
            <hr>
            <section class="main-section">
                <article class="article-left">
                    <p>Шугаринг - <br>Ваша кожа долгое время будет гладкая и шелковистая! </p>
                    <a href="#" class="article-button">Узнать больше</a>
                </article>
                <article class="article-right">
                    <img src="{{asset('images/shugaring.jpg')}}" alt="shugaring" class="img-procedure">
                </article>
            </section>
            <hr>
            <section class="main-section">
                <article class="article-left">
                    <img src="{{asset('images/prokol.jpg')}}" alt="prokol ushey" class="img-procedure">
                </article>
                <article class="article-right">
                    <p>
                        Прокол мочек ушей - <br>быстро и безболезненно!
                    </p>
                    <a href="#" class="article-button">Узнать больше</a>
                </article>
            </section>
        </main>
        <footer>
            <p class="seti">Мы в социальных сетях:</p>
            <a href="#"><img src="{{asset('images/icons/ok.png')}}/" alt="ok" class="icon"></a>
            <a href="#"><img src="{{asset('images/icons/mail.png')}}" alt="mail" class="icon"></a>
            <a href="#"><img src="{{asset('images/icons/vk.png')}}" alt="vk" class="icon"></a>
            <a href="#"><img src="{{asset('images/icons/fb.png')}}" alt="fb" class="icon"></a>
            <a href="#"><img src="{{asset('images/icons/twitter.png')}}" alt="twitter" class="icon"></a>
            <a href="#"><img src="{{asset('images/icons/g.png')}}" alt="g+" class="icon"></a>
        </footer>-->
    </div>


</template>

<script>
    export default {

        props: {
            imagesrc: Object
        },

        mounted() {
            console.log('imagesrc')
        }

        /*data: function() {
            return{
                postdata:[],
                is_refresh: false
            }
        },
        mounted(){
            this.update();
        },
        methods:{
            update: function(){
                main.$refs.foo.show();
            }
        }*/
    }
</script>
<style>

</style>
