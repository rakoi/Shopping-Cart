import Vue from 'vue';
import VueRouter from 'vue-router'

import SingleProduct from '../HOC/Products/SingleProduct'
import Home from '../layout/Home'
import Cart from '../HOC/Products/Cart'
Vue.use(VueRouter)

const router=new VueRouter({
    mode:'history',
    routes:[
        {
            path:"/"   ,
            name:'home',
            component:Home
        },

        {
            path:"/product/:id"   ,
            name:'product',
            component:SingleProduct,
            props:true
           },
           {
            path:"/cart"   ,
            name:'cart',
            component:Cart,
            props:true
           },
           
    ]
});

export default router;