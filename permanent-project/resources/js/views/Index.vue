<template>
    <div>
        <header id="header">
            <div class="logo">

                <div class="logo-text">
                    <p>Permanent</p>
                    <p>Makeup</p>
                    <p>Gomel</p>
                </div>

                <img src="images/sakura.png" alt="sakura" id="logoImg">
            </div>
            <ul class="menu" id="mainMenu">

                <li><router-link tag="a" to="/" class="menu-btn">Главная</router-link></li>
                <li><router-link tag="a" to="/posts" class="menu-btn">Статьи</router-link></li>
                <li><router-link tag="a" to="/gallery" class="menu-btn">Галерея</router-link></li>
                <li><router-link tag="a" to="/contacts" class="menu-btn">Контакты</router-link></li>
            </ul>

        </header>

        <router-view></router-view>

         <footer>
             <p class="seti">Мы в социальных сетях:</p>
             <a href="#"><img src="images/icons/ok.png" alt="ok" class="icon"></a>
             <a href="#"><img src="images/icons/mail.png" alt="mail" class="icon"></a>
             <a href="#"><img src="images/icons/vk.png" alt="vk" class="icon"></a>
             <a href="#"><img src="images/icons/fb.png" alt="fb" class="icon"></a>
             <a href="#"><img src="images/icons/twitter.png" alt="twitter" class="icon"></a>
             <a href="#"><img src="images/icons/g.png" alt="g+" class="icon"></a>
         </footer>


    </div>
</template>
<script>
    export default {};
</script>
<style>

</style>