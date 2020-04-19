<template>
  <div>
    <myheader></myheader>
    <mainbanner v-if="showBanner" ></mainbanner>
    <products ></products>
    <categories></categories>
    <myfooter></myfooter>
   
</div>
</template>

<script>
export default {
  data(){
    return {
      showBanner:true
    }
  },
  methods:{
    hideBanner(){
    this.showBanner=false
      $('.mainbanner').hide();
    },
    
  }
}
</script>