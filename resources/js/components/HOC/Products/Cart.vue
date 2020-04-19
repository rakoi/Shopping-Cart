<template>
    <div>
        <myheader></myheader>
     
        <div class="row" id="cart">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-center">Image</td>
                <td class="text-left">Product Name</td>
               
                <td class="text-left">Quantity</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
            <tbody>
             
              <tr v-for="(item,index) in cartItems.items" v-bind:key=item.id>
                  
                <td class="text-center"><a ><img  class="img-thumbnail" :title="item.name" :alt="item.name" :src="item.image"></a></td>
                <td class="text-left">{{item.name}}</td>
               
                <td class="text-left"><div style="max-width: 200px;" class="input-group btn-block">
                    <input type="text" class="form-control quantity" readonly  size="1" :value="item.quantity" name="quantity">
                    <span class="input-group-btn">
                    
                    <button  class="btn btn-danger" title="" data-toggle="tooltip" @click="removeItem(index)" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                    </span></div></td>
                <td class="text-right">{{item.price}}</td>
              
              </tr>
            </tbody>
          </table>
        </div>
        
        <table class="pull-right">
            <td>
                <tr>Net Total {{cartItems.netTotal}}</tr>
            </td>
        </table>
        <br><br>
        <button class="btn btn-block button pull-right"> Checkout</button>
            </div>
        </div>
        
    </div>

</template>

<script>
import {mapActions,mapGetters} from 'vuex';
export default {
    data(){
        return{
        
        }           
    },
    methods:{
         ...mapActions(['getCartItems','removeCartItem']),
        removeItem(index){
            this.removeCartItem(index);    
               this.$toastr('success', 'Cart Item Removed', 'Done!');
        }
    },
    computed:{
       ...mapGetters(['cartItems']) 
    },
    created(){
        this.getCartItems().then((data)=>{
            console.log(this.cartItems.items)
        });

        
    }
}
</script>


<style scoped>
    #cart{
        padding-top: 70px;
    }
    .img-thumbnail{
        width: 10px;
        height: 50px;
    }
</style>