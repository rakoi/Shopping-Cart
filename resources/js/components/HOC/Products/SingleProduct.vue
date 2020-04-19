<template>

<div>
<myheader></myheader>
<div class="container" id="singleproduct">
  <div class="row">
    <div class="content col-sm-12">
      <div class="row">
        <div class="col-sm-5">
             <div>
            	<a class="thumbnail fancybox" href="" v-bind:title="this.product.name">
                    <img v-bind:src="this.product.image" 
                    title="Casual Shirt With Ruffle Hem" 
                    v-bind:alt="this.product.name" /></a>
            </div>
        </div>
        <div class="col-sm-7 prodetail">
          <h1 class="productpage-title" >{{this.product.name}}</h1>
          <ul class="list-unstyled productinfo-details-top">
            <li>
              <h2 class="productpage-price">Ksh {{this.product.price}}</h2>
            </li>
            
          </ul>
          <hr>
          <ul class="list-unstyled product_info">
            <li>
              <label>Category:</label>
              <span> <a href="#">Apple</a></span></li>
            <li>
             
            <li>
              <label>Availability:</label>
              <span> {{this.product.quantity}} in Stock</span></li>
          </ul>
          <hr>
          <p class="product-desc"> {{this.product.description}}</p>
          <div id="product">
            <div class="form-group">
              <div class="row">
                <div class="Color col-md-6">
                  <label>Color</label>
                  <p>{{this.product.color}}</p>
                </div>
              </div>
              <div class="qty">
                <label>Qty</label>
                <input id="qty" v-model="quantity" type="number"> 
                <ul class="button-group list-btn">
                 
                  <li >
                    <button type="button" v-on:click="checkqty" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                   
                  </li>
              
                
                </ul>
                
              </div>
          </div>
          </div>
           <router-link  class="btn" :to="{ name: 'home'}">Back to shopping</router-link> 

        </div>
      </div>
     
      <div class="productinfo-tab">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
          <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab-description">
            <div class="cpt_product_description ">
              <div>
                <p>{{this.product.description}}</p>
                </div>
            </div>
            <!-- cpt_container_end --></div>
          <div class="tab-pane" id="tab-review">
            <form class="form-horizontal">
              <div id="review"></div>
              <h2>Write a review</h2>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-name">Your Name</label>
                  <input type="text" name="name" value="" id="input-name" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-review">Your Review</label>
                  <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                  <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label">Rating</label>
                  &nbsp;&nbsp;&nbsp; Bad&nbsp;
                  <input type="radio" name="rating" value="1" />
                  &nbsp;
                  <input type="radio" name="rating" value="2" />
                  &nbsp;
                  <input type="radio" name="rating" value="3" />
                  &nbsp;
                  <input type="radio" name="rating" value="4" />
                  &nbsp;
                  <input type="radio" name="rating" value="5" />
                  &nbsp;Good</div>
              </div>
              <div class="buttons clearfix">
                <div class="pull-right">
                  <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <h3 class="productblock-title">Related Products</h3>
      <div class="box">
        <div id="related-slidertab" class="row owl-carousel product-slider">
          <div class="item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html">
                <img src="image/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="image/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                </a>
                <ul class="button-group">
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="wishlist" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="compare" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="quick-view" type="button" data-original-title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button title="Add to Cart" class="addtocart-btn" type="button">Add to Cart</button>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
         
          <div class="item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html">
                <img src="image/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="image/product/product4-4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                </a>
                <ul class="button-group">
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="wishlist" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="compare" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="quick-view" type="button" data-original-title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button title="Add to Cart" class="addtocart-btn" type="button">Add to Cart</button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html">
                <img src="image/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="image/product/product5-5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                </a>
                <ul class="button-group">
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="wishlist" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="compare" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="quick-view" type="button" data-original-title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button title="Add to Cart" class="addtocart-btn" type="button">Add to Cart</button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html">
                <img src="image/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="image/product/product6-6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                </a>
                <ul class="button-group">
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="wishlist" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="compare" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="quick-view" type="button" data-original-title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button title="Add to Cart" class="addtocart-btn" type="button">Add to Cart</button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html">
                <img src="image/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="image/product/product7-7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                </a>
                <ul class="button-group">
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="wishlist" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="compare" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="quick-view" type="button" data-original-title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button title="Add to Cart" class="addtocart-btn" type="button">Add to Cart</button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html">
                <img src="image/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="image/product/product8-8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                </a>
                <ul class="button-group">
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="wishlist" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="compare" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button title="" data-placement="top" data-toggle="tooltip" class="quick-view" type="button" data-original-title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button title="Add to Cart" class="addtocart-btn" type="button">Add to Cart</button>
                  </li>
                  
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>


</template>


<script>
import continuemodal from '../../Modals/continuemodal'
import {mapActions,mapGetters} from 'vuex'

export default {

    data(){
        return {
            product:{
                name:'',
                price:'',
                rating:'',
                image:''
            },
            quantity:1,
        }
    },
    computed:mapGetters(['cartItems']),
    created(){
            window.scrollTo(0, 0); 

        let id=this.$route.params.id;
        axios.get('/api/products/'+id).then((response)=>{
            this.product=response.data;
            
        })
    },
   methods:{

     ...mapActions(['addCartItem']),
    
    checkqty:function(){

      if(this.product.quantity==1){

      }

       if(parseInt(this.quantity)>this.product.quantity){
           
           if(parseInt(this.product.quantity)>0){
               this.$toastr('error', 'Only '+this.product.quantity+ 'Items Available', 'sorry');
                this.quantity=this.product.quantity;
              
         }else{
              this.$toastr('error', 'Item No longer in stock', 'sorry');
           }


         
          

       }else{
         this.addCartItem(this.product.id,this.quantity);

      

             
       this.$modal.show(continuemodal, {
          text: 'Thank you'
        },
        {
          width: "50%",
          height: "40%"
        },
        {
          draggable: true
        });
                 this.$toastr('success', 'Item Added to Cart', 'done!');
        //   });
        
         }
    }
   }
}
</script>

<style scoped>
#singleproduct{
    padding-top: 40px;
}
</style>