require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter);

import routers from './routes';

const router = new VueRouter({
    mode: 'history',
    routes: routers
})

const app = new Vue({
    el: '#app',
    router
});
