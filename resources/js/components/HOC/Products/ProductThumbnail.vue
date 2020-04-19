<template>
             <div  class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock">
                <a>
                <img :src="product.image" :alt="product.name" :title="product.name" width="300px"  height="300px" />
                <img :src="product.image" :alt="product.name" :title="product.name" width="300px"  height="300px" />
                </a>
                  <ul class="button-group">
                  
                    
                   
                    <li>
                    
                      <router-link  class="addtocart-btn" :to="{ name: 'product',params:{id:product.id} }">Add to Cart</router-link> 
                    </li>
                  </ul>
                </div>
                <div class="caption product-detail">
                   <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{product.name}}</a></h4>
                  <p class="price product-price">{{product.price}}<span class="price-tax"></span></p>
                </div>
              </div>
            </div>
            </div>
        
</template>

<style>
.mythumbnail img{
  width:3100px;
  height:1400px;
}
</style>

<script>

export default {
    props:['product'],
    data(){
      return{
        url:'',
      }
    },
   

}
</script>