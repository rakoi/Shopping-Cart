import axios from 'axios';


const state={
    cartItemCount:0,
    cartItems:[]
};
const getters={
    cartItemCount: state => {
        return state.cartItemCount
    },
    cartItems:state=>{
        return state.cartItems
    }
};


const actions={
    async getCartItemCount({commit}){
        const response=await axios.get('/api/cart/cartItemCount')
       
        commit('setCartItemCount',response.data);

     },

     async addCartItem({commit},id,quantity){
        let url=`/api/cart/add/${id}/${quantity}`;

        const response=axios.get(url);
        commit('setCartItems',response.data)

        //get new item Count 
        const resp=await axios.get('/api/cart/cartItemCount')
       
        commit('setCartItemCount',resp.data);


     },


     async getCartItems({commit}){
         const response=await axios.get('/api/cart');
         commit('setCartItems',response.data)


     },
     async removeCartItem({commit},index){
         const response=await axios.get(`/api/cart/remove/${index}`);
         const resp=await axios.get('/api/cart/cartItemCount')
       
         commit('setCartItemCount',resp.data);
         commit('setCartItems',response.data);

     }

};
const mutations={
    setCartItemCount:(state,count)=>state.cartItemCount=count,

    setCartItems:(state,cartItems)=>state.cartItems=cartItems
};


export default({
    state,
    actions,
    getters,
    mutations
})