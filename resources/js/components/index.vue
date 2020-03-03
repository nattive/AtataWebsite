<template>
  <div class="main_container">
    <!-- navigation -->
    <SellerNav></SellerNav>
    <!-- top navigation -->
  
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
      <!-- route outlet -->

      <router-link to="/Seller/product/create">Go to Bar</router-link>
      <router-view name="main"></router-view>
    </div>
    <!-- /page content -->
  </div>
</template>
<script>
import SellerNav from './SellerNav' 
import VueJWT from 'vuejs-jwt'

export default {
  props: ['seller'],
  data() {
    return {
      //
    };
  },
  methods: {
    fetchToken(){
      var $token = JSON.parse(localStorage.getItem('user'))
      console.log((this.$jwt.decode($token.token)));
      
      
    }
  },
  components: {
    SellerNav
  },
  mounted() {
    console.log("index did mount");
    this.fetchToken()
  }
};
</script>