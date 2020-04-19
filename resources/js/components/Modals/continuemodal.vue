<template>
     <div class="container">
          <div class="row" id="buttons">
               <div class="col-md-4">
                    <a  class="btn " @click="$emit('close')" > Back to shopping</a> 
               </div>

                <div class="col-md-4">
                    <a class="btn" href="/cart" >View Cart and Checkout</a> 
               </div>
          </div>
     </div> 
</template>

<style scoped>
     
     #buttons{
          padding-left: 20px;
           padding-right: 20px;
          padding-top: 30px;
          margin-top: 30px;
     }
</style>

<script>
export default {
 
}
</script>