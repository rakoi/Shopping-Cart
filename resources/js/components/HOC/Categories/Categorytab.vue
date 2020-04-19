<template>
<div  >
  <div class="tab-content">
      <h1>Fester</h1>
        
<!--         
          <product-thumbnail v-for="product in samplecategory"  
           
              v-bind:key="product.id"
              v-bind:product="product"
          ></product-thumbnail> -->

      </div>
</div>
</template>
<style>
.tab-content {
    border-top: 2px solid #1d1b1b1f;
}
</style>

<script>
import {mapActions,mapGetters} from 'vuex'
export default {
    props:['category'],
    computed:mapGetters(['samplecategory']),
    data(){
        return {
          
        }
    },
    props:['categoryId'],

    created(){
        this.fetchSampleCategories(1);
    
        
    },
    methods:{
        ...mapActions(['fetchSampleCategories'])
    }
}
</script>