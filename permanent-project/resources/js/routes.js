import Vue from 'vue';
import VueRouter from 'vue-router';

import Main from './components/MainComponent.vue';
import Posts from './components/PostsComponent.vue';
import CurPost from './components/CurPostComponent.vue';
import Gallery from './components/GalleryComponent.vue';
import Contacts from './components/ContactsComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'main',
            component: Main
        },
        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
        {
            path: '/posts/curpost',
            name: 'curpost',
            component: CurPost
        },
        {
            path: '/gallery',
            name: 'gallery',
            component: Gallery
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        }
    ]
});

export default router;