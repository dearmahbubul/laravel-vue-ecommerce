/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Swal from 'sweetalert2'
window.Swal = Swal;
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.toast = toast;
/*End toast or sweetalert2*/
window.Fire = new Vue();

import VueRouter from 'vue-router'
Vue.use(VueRouter);
/*----Start vue-progressbar*/
import VueProgressBar from 'vue-progressbar'
/*Progress bar registration*/
const options = {
    color: '#54fa0b',
    failedColor: '#fa4b41',
    thickness: '5px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
};

Vue.use(VueProgressBar, options)
/*End progress bar*/

/*Vue routes*/
let routes = [
    { path: '/', component: require('./components/Home.vue')},
    { path: '/carts', component: require('./components/Cart.vue')},
    { path: '*', component: require('./components/NotFound.vue') }
];

const router = new VueRouter({
    routes // short for `routes: routes`
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('cart-component', require('./components/Cart.vue').default);
Vue.component('invoice-component', require('./components/Invoice.vue').default);
Vue.component('all-invoice-component', require('./components/AllInvoice.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 * php artisan make:migration create_products_table
 */

const app = new Vue({
    el: '#app',
    router,
});
