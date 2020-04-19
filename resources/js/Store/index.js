import Vuex from 'vuex'
import Vue from 'vue';
import Products from './modules/Products.js'
import Cart from './modules/Cart'


Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
        Products,
        Cart
    }
})