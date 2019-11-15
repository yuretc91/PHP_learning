<template>

       <main>
           <section class="main-section">
               <img src="images/mainbgimg.jpg" alt="main-bg" class="main-bg-img">
               <p class="main-paragraph">Устали каждое утро тратить время на нанесение макияжа? <br>Значит вы попали по адресу!</p>
               <p class="main-paragraph">Сертифицированный мастер Ирина поможет подчеркнуть Вашу красоту на долгое время.</p>
               <p class="main-paragraph">Наши услуги:</p>
               <ul class="main-services">
                   <li>Перманентный макияж (брови, губы, межресничка)</li>
                   <li>Шугаринг (сахарная депиляция)</li>
                   <li>Прокол мочек ушей</li>
               </ul>

               <p class="main-paragraph">Записаться на процедуру, а также получить бесплатную консультацию вы можете по телефону или в нашей группе в
                   <a href="#" class="main-paragraph-link">Instagramm</a></p>
               <ul class="tel">
                   <li>8(029)381-61-00</li>
               </ul>
               <p class="main-paragraph">Если вы еще сомневаетесь и хотите получить больше информации по данной процедуре, рекоммендуем посетить раздел
                   <router-link tag="a" to="/posts" class="main-paragraph-link">Статьи</router-link></p>
           </section>
            <!--<section class="main-section">

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
            </section>-->
        </main>


</template>

<script>
    export default {
        data:  function () {
            return {
                page: null
            };
        },
        mounted() {
            this.getPage();
        },
        methods: {
            getPage: function () {
                axios
                    .get('api/page')
                    .then(response => (this.page = response));
            }
        }

    }
</script>
<style>

</style>
