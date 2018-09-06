
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import swal from 'sweetalert';

window.Vue.use(VueRouter, swal);

import LoginForm from './components/LoginForm.vue';
import Beranda from './components/lecturer/Beranda.vue';
import ETugas from './components/lecturer/ETugas.vue';
import Jadwal from './components/lecturer/Jadwal.vue';
import Materi from './components/lecturer/Materi.vue';
import Faq from './components/lecturer/Faq.vue';

// all component
Vue.component('example', require('./components/Example.vue'));
Vue.component('login', require('./components/LoginForm.vue'));
Vue.component('beranda', require('./components/lecturer/Beranda.vue'));
Vue.component('e-tugas', require('./components/lecturer/ETugas.vue'));
Vue.component('jadwal', require('./components/lecturer/Jadwal.vue'));
Vue.component('materi', require('./components/lecturer/Materi.vue'));
Vue.component('faq', require('./components/lecturer/Faq.vue'));

const routes = [{
        path: '/login',
        component: LoginForm,
        name: 'login'
    },
    {
        path: '/beranda',
        component: Beranda,
        name: 'beranda',
        meta: { title: 'Beranda - Dosen Jaga'}
    },
    {
        path: '/e-tugas',
        component: ETugas,
        name: 'e-tugas',
        meta: { title: 'E-Tugas - Dosen Jaga'}
    },
    {
        path: '/materi',
        component: Materi,
        name: 'materi',
        meta: { title: 'Materi - Dosen Jaga'}
    },
    {
        path: '/jadwal',
        component: Jadwal,
        name: 'jadwal',
        meta: { title: 'Jadwal - Dosen Jaga'}
    },
    {
        path: '/faq',
        component: Faq,
        name: 'faq',
        meta: { title: 'FAQ - Dosen Jaga'}
    }
]

const router = new VueRouter({
    routes
})

// Add title in header
router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    next()
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    router
}).$mount('#app')
