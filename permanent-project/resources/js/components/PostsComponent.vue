<template>
    <main>
        <section class="posts-section">
            <article class="article-left">
                <img src="images/permanent.jpg" alt="permanent" class="img-procedure">
            </article>
            <article class="article-right">
                <p id="permanent">Перманентный макияж - отличная возможность выглядеть в любой ситуации безупречно! </p>
                <router-link tag="a" to="/posts/curpost" class="main-paragraph-link">Открыть конкретный пост</router-link>
            </article>
        </section>

    </main>
</template>

<script>
    export default {
        mounted() {
            console.log('Posts page mounted')
        }
    }
</script>
