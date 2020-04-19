/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import JQuery from 'jquery'
import LoadScript from 'vue-plugin-load-script';
import VueRouter from 'vue-router'
import { homedir } from 'os';
import VModal from 'vue-js-modal'
import axios from 'axios'
import VueToastr from '@deveodk/vue-toastr'
import '@deveodk/vue-toastr/dist/@deveodk/vue-toastr.css'
import Routes from '../js/components/Routes/routes'
import store from './Store/index'






let $ = JQuery


require('./bootstrap');
require('jquery')





window.Vue = require('vue');
window.Vue.use(LoadScript);


window.Vue.use(LoadScript);
Vue.use(VModal, { dynamic: true, injectModalsContainer: true })
window.Vue.use(axios);

Vue.use(VueToastr, {
    defaultPosition: 'toast-top-right',
    defaultType: 'info',
    defaultTimeout: 4000
});


window.$ = require('jquery')
window.JQuery = require('jquery')
Vue.loadScript('./javascript/jquery-2.1.1.min.js')
Vue.loadScript('./javascript/global.js')
Vue.loadScript('./javascript/template_js/template.js')
Vue.loadScript('./javascript/template_js/template.js')
Vue.loadScript('./javascript/owl-carousel/owl.carousel.min.js')


// //modal
// Vue.component('continuemodal', require('./components/Modals/continuemodal.vue').default);

//header
Vue.component('myheader', require('./components/layout/myHeader.vue').default);
//mainbanner
Vue.component('mainbanner', require('./components/layout/mainBanner.vue').default);
//products
Vue.component('products', require('./components/HOC/Products/Products.vue').default);
//product thumbnail
Vue.component('product-thumbnail', require('./components/HOC/Products/ProductThumbnail.vue').default);
//categories list
Vue.component('categories', require('./components/HOC/Categories/Categories.vue').default);

//categoris tab
Vue.component('categoriestab', require('./components/HOC/Categories/Categorytab.vue').default);


//newsletter
Vue.component('mynewsletter', require('./components/layout/NewsLetter.vue').default);

//footer
Vue.component('myfooter', require('./components/layout/Footer.vue').default);

                // PAGES
//home
Vue.component('home', require('./components/layout/Home.vue').default);
//single product
Vue.component('singleproduct', require('./components/HOC/Products/SingleProduct.vue').default);
//cart
Vue.component('cart', require('./components/HOC/Products/Cart.vue').default);

                //WIDGETS
Vue.component('productpagination', require('./components/widgets/productsPagination.vue').default);

//  CHECKOUT 
//Vue.component('checkout', require('./components/widgets/Checkout.vue').default);


const app = new Vue({
    store,
    el: '#app',
   
    router:Routes,
 
});
