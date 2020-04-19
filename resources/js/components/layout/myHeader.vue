<template>
   <div>

    <header>
    <!-- <router-link to="/product">Product></router-link> -->
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
            <div class="wel-come-msg"> Welcome to our online store! </div>
            <div class="language">
            
            </div>
            <div class="currency">
            </div>
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="register.html">Register</a></li>
                    <li><a href="login.html">Login</a></li>
                  </ul>
                </li>
                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
              </ul>
              <div id="search" class="input-group">
                <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                </span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-3 col-xs-3 header-left">
        <div id="logo"> <a href="/"><img src="/image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
      </div>
      <div class="col-sm-9 col-xs-9 header-right">
        <nav id="menu" class="navbar">
          <div class="nav-inner">
            <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
              <button type="button" class="btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse pull-left">
              <ul class="main-navigation">
                <li><a href="index.html"   class="parent"  >Home</a> </li>
                <li><a href="category.html"   class="parent"  >Lingerie</a> </li>
               <li><a href="about-us.html" >About us</a></li>
                <li><a href="contact.html" >Contact Us</a> </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="cart" class="btn-group btn-block">
          <a type="button" href="/cart" class="btn btn-inverse btn-block btn-lg "> <span id="cart-total">{{this.cartItemCount}}</span> </a>
        
        </div>
      </div>
    </div>
  </div>
</header>
    </div>
</template>

<script>
import {mapActions,mapGetters} from 'vuex';

export default {

  

  data(){
    return {
    
    }
  },

  computed:mapGetters(['cartItemCount']),
  methods:{
   ...mapActions(['getCartItemCount'])
  },
  created(){
    this.getCartItemCount();
  
    
  },
}
</script>