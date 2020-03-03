<template>
  <div class="limiter">
  </div>
</template>
<script>
import Axios from 'axios';
export default {
  mounted() {
    localStorage.removeItem('user');
    console.log('cleared')
  }
};
</script>