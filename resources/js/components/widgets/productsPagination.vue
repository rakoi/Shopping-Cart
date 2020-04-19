<template>
   
    <div class="pagination">
     
     
          
     <ul class="pagination" v-if="this.pageLimit">
      
 
        <li v-if="myCurrentPage>1" class="page-item "><a class="page-link" @click="previous">Previous</a></li>

         <li  v-for="index in pageLimit" :key="index" class="page-item">
             <a class="page-link" v-if=" index > myCurrentPage"  @click="goToPage(index)" >{{index}}</a>
        </li>
        <li class="page-item"><a class="page-link" @click="updatePages" >...</a></li>
        <li class="page-item"><a class="page-link" href="#">{{this.paginationdata.last_page}}</a></li>
         <li class="page-item"><a @click="nextPage" class="page-link">Next</a></li>
     </ul>
    </div>
</template>

<script>

import {mapGetters,mapActions} from 'vuex'
import Home from '../layout/Home'
export default {
    data(){
        return {
            myCurrentPage:1,
            pageLimit:1,
            startPage:1,
            myLastPage:1
        }
    },
    methods:{
        ...mapActions(['fetchPaginationData','fetchProducts']),
        nextPage:function(){
          
            var nextPage=this.myCurrentPage+1;
            this.myCurrentPage=this.myCurrentPage+1;
            this.pageLimit=this.myCurrentPage+6;
           
            this.fetchProducts(this.myCurrentPage);
             Home.methods.hideBanner();
           
        },
        goToPage:function (pageNo){
        
            this.myCurrentPage=pageNo;
            this.pageLimit=this.myCurrentPage+6;
           
            this.fetchProducts(pageNo)
            Home.methods.hideBanner();
        },
        updatePages:function(){
             this.myCurrentPage=this.myCurrentPage+1;
           this.pageLimit=this.pageLimit+1;
           this.startPage=this.paginationdata.last_page-(this.paginationdata.last_page-this.myCurrentPage);
        },
        previous:function(){
           
            this.myCurrentPage=this.myCurrentPage-1;
            this.pageLimit=this.myCurrentPage+6;
           
            this.fetchProducts(this.myCurrentPage);
             Home.methods.hideBanner();
          
        },
    },
    computed:mapGetters(['paginationdata']),
    created(){
        this.fetchPaginationData().then((data)=>{
            this.myCurrentPage=this.paginationdata.current_page;
            this.pageLimit=this.myCurrentPage+6;
           
            //this.startPage=this.paginationdata.last_page-this.current_page;
           
        });
        

    
    }
    
}
</script>