<template>
  <div id="app">
    <header-app></header-app>
    <div class="container-app">
      <div class="row">
      	<transition name="slide" mode="out-in">
        	<router-view/>
        </transition>
      </div>
    </div>
    
  </div>
</template>
<script>

import headerApp from '@/components/header.vue'

export default {
  name: 'app',
  components: {
    headerApp
  }
}
</script>

<style>
  #app {
    background: url(assets/bg.png);
    background-size: contain;
    min-height: 100vh;
  }
  .container-app {

  }
  .slide-enter-active{
    animation: slideIn 0.3s;
  }

  .slide-leave-active{
    animation: slideOut 0.3s;
  }

  @keyframes slideIn{
    from{opacity: 0}
    to{opacity: 1}
  }

  @keyframes slideOut{
    from{opacity: 1}
    to{opacity: 0}
  }
</style>
