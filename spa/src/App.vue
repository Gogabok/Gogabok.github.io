<template>
  <div id="app">

    <div class="container">
      <div class="caption">
        <h1>Web-shop</h1>
        <router-link to="/cart"
                     tag="button"
                     class="btn btn-primary btn-noactive"
                     exact-active-class="btn-noactive"
                     active-class="btn-noactive">
            В корзине: {{ cartList.length }}
        </router-link>
      </div>
      <hr>


    <div class="main">
      <div class="menu">
        <router-link v-for="(item, index) in menuList"
                     :key="index"
                     :to="item.url"
        >{{ item.name }}</router-link>
      </div>
      <transition name="slide" mode="out-in">
        <router-view></router-view>
      </transition>
    </div>

    </div>
  </div>
</template>

<script>

import {mapGetters} from 'vuex';

export default {
  name: 'app',
  components: {

  },
  computed: {
    ...mapGetters('menu', {
        menuList: 'list'
      }),
    ...mapGetters('cart', {
        cartList: 'cartList'
      }),
  },
  methods: {

  }
}
</script>






<style>
  .caption {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 50px
  }
  .menu a {
    width: 100%;
    display:block;
    cursor: pointer ;
    padding: 10px;
    margin: 3px;
    border: 1px solid #ccc;
    text-decoration: none;
  }
  .menu a:focus {
    text-decoration: none;
    color:red;
  }
  .menu a:hover {
    text-decoration: none;
    color:red;
  }
  .menu {
    width: 300px;
    padding-right: 30px;
}
  .main {
    display: flex;
  }
  .slide-enter{
    
  }

  .slide-enter-active{
    animation: slideIn 0.5s;
  }

  .slide-enter-to{
    
  }

  .slide-leave{
    
  }

  .slide-leave-active{
    animation: slideOut 0.5s;
  }

  .slide-leave-to{
    
  }
  .router-link-active, .router-link-exact-active {
    color: red;
  }

  .btn-noactive:active {
    color: #fff;
  }
  .btn-noactive:active {
    color: #fff;
  }
  @keyframes slideIn{
    from{transform: rotateY(90deg);}
    to{transform: rotateY(0deg);}
  }

  @keyframes slideOut{
    from{transform: rotateY(0deg);}
    to{transform: rotateY(90deg);}
  }
</style>