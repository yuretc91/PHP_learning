<template>

    <div>

        <section class="main-section">

            <article class="article-left">
                <p>АКЦИЯ!</p>

                <img src="images/skidka.png" alt="skidka" id="img-skidka">
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
                <img src="images/permanent.jpg" alt="permanent" class="img-procedure">
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
                <img src="images/shugaring.jpg" alt="shugaring" class="img-procedure">
            </article>
        </section>
        <hr>
        <section class="main-section">
            <article class="article-left">
                <img src="images/prokol.jpg" alt="prokol ushey" class="img-procedure">
            </article>
            <article class="article-right">
                <p>
                    Прокол мочек ушей - <br>быстро и безболезненно!
                </p>
                <a href="#" class="article-button">Узнать больше</a>
            </article>
        </section>
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
