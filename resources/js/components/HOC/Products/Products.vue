<template>
<div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <h3 class="productblock-title"> Products</h3>
        <div class="row">
        
          <product-thumbnail
         
           v-for="product in customerProducts"  
           
              v-bind:key="product.id"
              v-bind:product="product"
          ></product-thumbnail>


        
           
         </div>
         <div class="row">
           <div class="col col-md-12">
            <productpagination ></productpagination>
           </div>
         </div>
        </div>
      </div>
    
    </div>
     
 
</template>
<script>
import {mapGetters,mapActions  } from 'vuex';

export default {
 
  data(){
    return {
     
      product:{
        name:'',
        price:'',
        rating:'',
        image:''
      },
      pagination:{},
    }
  },

 
  computed:mapGetters(['customerProducts']),
 methods:{
  ...mapActions(['fetchCustomerProducts']),
 
 },
 created(){
   this.fetchCustomerProducts();
   
 }, 
 

}
</script>