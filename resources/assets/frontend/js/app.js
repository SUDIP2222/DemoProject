
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueRouter from "vue-router";
import App from "./components/App.vue";
import Home from "./components/Home.vue";
import Dashboard from "./components/Dashboard.vue";
import Register from "./components/Register.vue";
import Signin from "./components/Signin.vue";
import Test from "./components/Test.vue";
import VuetableDemo1 from "./components/VuetableDemo1.vue";
import VuetableDemo2 from "./components/VuetableDemo2.vue";

var VueResource = require('vue-resource');

Vue.use(VueResource);
Vue.use(VueRouter);
Vue.http.interceptors.push((request, next) => {
    request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;
    next();
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        { path: '/', component: Home },
        { path: '/home', component: Home },
        { path: '/dashboard', component: Dashboard },
        { path: '/test', component: Test },
        { path: '/register', component: Register },
        { path: '/signin', component: Signin },
        { path: '/vuetable_demo1', component: VuetableDemo1 },
        { path: '/vuetable_demo2', component: VuetableDemo2 },

    ]
});
new Vue(Vue.util.extend({router}, App)).$mount('#app');