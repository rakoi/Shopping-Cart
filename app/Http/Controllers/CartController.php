<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
class CartController extends Controller
{
  
   var $cart;
    
   public function getUserId(){

     return $user_ip=str_replace(".","",request()->ip());
   }
    
    public function index()
    {
     
        cart()->setUser($this->getUserId());
       
        
        return cart()->toArray();
    
    }
   

    public function add(Request $request,$id,$quantity){

        

         cart()->setUser($this->getUserId());
        
            
        $cart = Product::addToCart($id);
       
        return  cart()->toArray();
    }

    public function cartItemCount(Request $request){
        cart()->setUser($this->getUserId());
        return count(cart()->items());
        
        
    }

    
    public function empty()
    {
        cart()->setUser($this->getUserId());
        cart()->clear();
        
        return cart()->toArray();
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   public function removeCartItem(Request $request,$index){
    cart()->setUser($this->getUserId());
     cart()->removeAt($index);

    
    return cart()->toArray();
   }

    
}
