<template>
 <div class="container">

  <div class="row">
    <div class="content col-sm-12">
      <div class="customtab">
        <h3 class="productblock-title">Categories</h3>
        <div id="tabs" class="customtab-wrapper">
          <ul class='customtab-inner'>
              <li class='tab' v-for="category in categories" v-bind:key="category.id"  >
                <a :href=category.tag @click="getCategories(category.id)"  >{{category.name}}</a>
              </li>
            
          </ul>
        </div>
      </div>

      
              

        <product-thumbnail v-for="product in samplecategory"  
           
              v-bind:key="product.id"
              v-bind:product="product"
          ></product-thumbnail> 
    
   
    
    
  
    
      
     
    </div>
  </div>
</div>
</template>

<script>

import {mapActions,mapGetters} from 'vuex'

export default{
  data(){
    return {
      categories:[],
    }
  },
  computed:mapGetters(['samplecategory']),
  methods:{
    getCategories:function(categoryId){
          this.fetchSampleCategories(categoryId);
    },
    ...mapActions(['fetchSampleCategories'])
  },
  created(){
    fetch('/api/categories').then((resp)=>resp.json()).then((resp)=>{
      this.categories=resp;
    });
    
    this.fetchSampleCategories(1);
   
   
  }
};
</script>