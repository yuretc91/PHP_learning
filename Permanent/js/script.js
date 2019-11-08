/*
$(function () {
    var main = $("main");
    var btn = $('.btn');
    var menu = $('.menu');


    $('.btn').each(function (index, value){
        $(this).on('click', function() {
            //this.addClass("active");
            console.log($(this).text());

            $.ajax({
                url: "serv.php",
                type: "POST",
                data: {
                    btn : $(this).text()
                }
            }).done(function(response) {
                console.log(response);
                main.html(response);
            });
        });
    });

});*/
import MainPage from 'MainComponent.vue';
import Router from 'vue-router';
const page = (title, content) => ({title, content});
const pagesContent = [
    page('Главная', 'page1 page1 page1 page1 page1 page1 page1 v page1 page1 page1 page1 page1 page1 '),
    page('Статьи','page2 page2 page2 page2 page2 page2 page2 page2 page2 page2 page2 page2 page2 '),
    page('Галерея','page3 page3 page3 page3 page3 page3 page3 page3 page3 page3 page3 page3 page3 page3 '),
    page('Контакты','page4 page4 page4 page4 page4 page4 page4 page4 page4 page4 page4 page4 page4 ')
];
const router = new Router({
    routes: [
        {
            path: '/',
            name:'main',
            component: MainPage
        }
    ]
});

Vue.component('main-content', {
    data: function () {
        return {
            count: 0
        }
    }

});
new Vue({
    el: '#body',
    router,
    data: {
        pagesContent:pagesContent,
        curPageContent:pagesContent[1],
        selectedIndex: 0
    },
    methods: {
        showContent: function (index) {
            this.curPageContent = pagesContent[index];
            this.selectedIndex = index;


        }
    }
});
