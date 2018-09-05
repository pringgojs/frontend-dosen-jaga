
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import LoginForm from './components/LoginForm.vue';

// all component
Vue.component('login', require('./components/LoginForm.vue'));

const routes = [{
        path: '/login',
        component: LoginForm,
        name: 'login'
    },
    // { path: '/admin/companies/edit/:id', component: CompaniesEdit, name: 'editCompany' },
]

const router = new VueRouter({
    routes
})


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    router
}).$mount('#app')
