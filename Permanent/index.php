<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>PM Gomel</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
<div id="body">
    <header>
        <div class="logo">

            <div class="logo-text">
                <p>Permanent</p>
                <p>Makeup</p>
                <p>Gomel</p>
            </div>
            <img src="images/sakura.png" alt="sakura">
        </div>
        <ul class="menu">
            <li class="menuBtn" v-for="(pageContent, index) of pagesContent" v-on:click="showContent(index)" :class="{'menuBtnActive': selectedIndex === index}">
                <a href="#" class="btn">{{pageContent.title}}</a>
            </li>

        </ul>
    </header>
    <main id="main">
        {{curPageContent.content}}
        <main-content></main-content>

       <!-- <section class="main-section">
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
-->

    </main>
</div>


    <?php require_once "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
