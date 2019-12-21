/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter);
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
//Vue.component('all-invoice-component', require('./components/AllInvoice.vue').default);
/*End progress bar*/
import Home from './components/Home.vue';
import AllInvoice from './components/AllInvoice.vue';
import Cart from './components/Cart.vue';
import Invoice from './components/Invoice.vue';
/*Vue routes*/
let routes = [
    { path: '/home', component: Home,name:'Home'},
    { path: '/carts', component: Cart,name:'Cart'},
    { path: '/all-invoice', component: AllInvoice,name:'AllInvoice'},
    { path: '/invoice/:id', component: Invoice, name: 'Invoice'}
];

const router = new VueRouter({
    mode: 'history',
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
//console.log('app'+window.location.pathname);
Vue.component('index-component', require('./components/IndexComponent.vue').default);
/*Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('home-component', require('./components/Home.vue'));
Vue.component('cart-component', require('./components/Cart.vue'));
Vue.component('invoice-component', require('./components/Invoice.vue'));
Vue.component('all-invoice-component', require('./components/AllInvoice.vue'));
Vue.component('list-invoice-component', require('./components/InvoiceComponent.vue'));*/

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
