<template>
  <div id="main-app">
    <div class="main-app-title">
      Избранное
    </div>
    <div class="main-part-list">
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
      <div class="main-part-list-item">
        <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
        <div class="main-part-list-item-logo">
          <img src="../assets/main-part-item-logo.png" alt="">
        </div>
        <div class="main-part-list-item-title">
          Название Название Название
        </div>
      </div>
    </div>
    <div class="pages">
      <div v-for="(item, index) in pages" class="pages-item">
        <router-link tag="p" :to="item.link">{{ item.content }}</router-link>
      </div>
    </div>
  </div>
</template>

<script>

import { mapGetters } from 'vuex'

export default {
  name: 'plan',
  components: {

  },
  data () {
    return {
      pages: [
        {
          content: '<',
          link: ''
        },
        {
          content: '1',
          link: ''
        },
        {
          content: '2',
          link: ''
        },
        {
          content: '3',
          link: ''
        },
        {
          content: '4',
          link: ''
        },
        {
          content: '>',
          link: ''
        }
      ]
    }
  },
  computed: {

  },
  methods: {

  }
}
</script>

<style scoped>
  #main-app {
    width: 100%;
    background: #fff;
    padding: 10px 30px 10px 30px;
    margin-top: 15px;
    border-radius: 12px;
  }
  .main-app-title {
    color:#333333;
    font-size: 30px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    text-align: center;
    text-transform: uppercase;
  }
  .main-part-list {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    padding: 0px 20px;
    margin-top: 20px;
  }
  .main-part-list-item {
    width: 250px;
    margin: 5px 10px;
  }
  .main-part-list-item-logo {
    width: 100%;
  }
  .main-part-list-item-logo img {
    width: 100%;
  }
  .main-part-list-item-close {
    display: block;
    margin: 0px 15px 5px auto;
  }
  .main-part-list-item-title {
    border-radius: 6px;
    border:5px solid #B5D376;
    padding: 2px;
    width: 100%;
    margin-top: 5px;
    font-size: 17px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
  }
  .pages {
    display: flex;
    align-items: center;
    margin: 10px 0px;
    justify-content: center;
    width: 100%;
  }
  .pages-item {
    border:4px solid #A3CC4E;
    border-radius: 5px;
    margin: 0px 6px;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    font-weight: bold;
    background:#fff;
    padding: 10px 18px;
    text-align:center;
    color:#000;
    cursor: pointer;
    transition-duration: .3s;
  }
  .pages-item:hover {
    background:#A3CC4E;
    transition-duration: .3s;
  }
  .pages-item p {
    margin: 0;
  }
  @media screen and (max-width: 440px) {
   .pages-item {
     margin: 10px 10px;
     padding: 5px 9px;
   }
  }
</style>
