<template>
    <main>
        <section class="posts-section">
            <article class="article-left">
                <img src="images/sakura.png" alt="rrjrjr" class="img-procedure">
            </article>
            <article class="article-right">
                <p id="permanent">Тут должен быть конкретный пост из БД </p>
                <router-link tag="a" to="/" class="main-paragraph-link">На главную</router-link>
            </article>
        </section>

    </main>
</template>

<script>
    export default {
        mounted() {
            console.log('Current Post page mounted')
        }
    }
</script>
