<template>
  <div id="main-app">
    <div class="main-app-pages-title">
      <p class="main-app-pages-title-item" id="login" @click="activePageMethod($event.target)" :class="activePage === 'login' ? 'main-app-pages-title-item-active' : ''">Вход</p>
      <p class="main-app-pages-title-item" id="registration" @click="activePageMethod($event.target)" :class="activePage === 'registration' ? 'main-app-pages-title-item-active' : ''">Регистрация</p>
    </div>
    <div v-if="activePage === 'registration'" class="registration-content">
      <router-link to="/edit" tag="div" class="registration-content-item">
        <div class="registration-content-item-div">
          <img src="../assets/social-google.png" alt="">
          <div class="registration-content-item-p">Войти через Google</div>
        </div>
      </router-link>
      <router-link to="/edit" tag="div" class="registration-content-item">
        <div class="registration-content-item-div">
          <img src="../assets/social-fb.png" alt="">
          <div class="registration-content-item-p">Войти через Facebook</div>
        </div>
      </router-link>
      <router-link to="/edit" tag="div" class="registration-content-item">
        <div class="registration-content-item-div">
          <img src="../assets/social-vk.png" alt="">
          <div class="registration-content-item-p">Войти через Вконтакте</div>
        </div>
      </router-link>
      <router-link to="/edit" tag="div" class="registration-content-item">
        <div class="registration-content-item-div">
          <img src="../assets/social-mail.png" alt="">
          <div class="registration-content-item-p">Войти с email-адресом</div>
        </div>
      </router-link>
      <router-link to="/edit" tag="div" class="registration-content-item">
        <div class="registration-content-item-div">
          <img src="../assets/social-phone.png" alt="">
          <div class="registration-content-item-p">Войти с номером телефона</div>
        </div>
      </router-link>
    </div>

    <div v-else class="login-content">
      <div class="login-content-logo">
        <input type="file" onchange="readURL(this);">
        <img id="blah" src="http://placehold.it/180" alt="">
      </div>
      <form class="login-content-form">
        <label class="login-content-form-item" for="phone">
          <p class="login-content-form-item-title">Номер телефона*</p>
          <input class="login-content-form-item-input" id="phone" type="text" required="">
        </label>
        <label class="login-content-form-item" for="name">
          <p class="login-content-form-item-title">Имя*</p>
          <input class="login-content-form-item-input" id="name" type="text" required="">
        </label>
        <label class="login-content-form-item" for="secName">
          <p class="login-content-form-item-title">Фамилия*</p>
          <input class="login-content-form-item-input" id="secName" type="text" required="">
        </label>
        <label class="login-content-form-item" for="pass">
          <p class="login-content-form-item-title">Пароль*</p>
          <input class="login-content-form-item-input" id="pass" type="password" required="">
        </label>
        <label class="login-content-form-item" for="secPass">
          <p class="login-content-form-item-title">Подтверждение пароля*</p>
          <input class="login-content-form-item-input" id="secPass" type="password" required="">
        </label>
        <button class="modale-wrong-btn">Отправить</button>
      </form>
    </div>
  </div>
</template>

<script>

import { mapGetters } from 'vuex'

export default {
  name: 'registration',
  components: {

  },
  data () {
    return {
      activePage: 'login',
      imgSrc: 'http://placehold.it/180'
    }
  },
  computed: {

  },
  methods: {
    activePageMethod (it) {
      if (it.id === 'login') {
        this.activePage = 'login'
      } else if (it.id === 'registration') {
        this.activePage = 'registration'
      }
    }

  }
}
</script>

<style scoped>
  #main-app {
    width: 50%;
    background: #fff;
    margin: 40px auto 0px auto;
  }
  .main-app-pages-title {
    width: 100%;
    display: flex;
  }
  .main-app-pages-title-item {
    width: 50%;
    background:#6DC055;
    padding: 10px;
    text-align: center;
    font-size: 21px;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    margin: 0;
    color:#fff;
    text-transform: uppercase;
    cursor: pointer;
  }
  .main-app-pages-title-item-active {
    background:#fff;
    color:#000;
  }
  .registration-content {
    text-align: center;
  }
  .registration-content-item {
    display: flex;
    justify-content: center;
    margin: 30px auto;
    width: 400px;
    cursor: pointer;
  }
  .registration-content-item img {

  }
  .registration-content-item-div {
    border:1px solid #707070;
    border-radius: 6px;
    padding: 0px 30px;
    display: flex;
    align-items: stretch;
    justify-content: space-between;
    width: 100%;
  }
  .registration-content-item-p {
    font-size: 16px;
    font-family: PT Sans, sans-serif;
    text-align: center;
    margin: 0px 30px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-left:1px solid #707070;
    padding: 0px 30px;
    width: 300px;
  }

  .login-content-form {
    display: block;
  }
  .login-content {
    text-align: center;
  }
  .login-content-logo {
    width: 180px;
    height: 180px;
    background:#707070;
    border-radius: 12px;
    color:#fff;
    font-size: 23px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 20px auto;
    position: relative;
  }
  .login-content-logo input {
    width: 180px;
    height: 180px;
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  #blah {
    width: 180px !important;
    height: 180px !important;
    border-radius: 12px;
  }
  .login-content-form-item {
    margin: 10px 1px;
  }
  .login-content-form-item-title {
    font-weight: bold;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    text-transform: uppercase;
    text-align: left;
    margin: 5px 10px;
  }
  .login-content-form-item-input {
    width: 320px;
    border:none;
    background:#F1F9FF;
    border-radius: 10px;
    padding: 10px 20px;
    outline:none;
    box-shadow: 0px 5px 25px -10px #000;
    margin: 0px 10px;
  }
  .modale-wrong-btn {
    background:#65B34F;
    border-radius: 6px;
    color:#fff;
    font-size: 21px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    padding: 2px 25px;
    outline: none;
    border:none;
    display: block;
    margin: 20px auto 20px auto;
    cursor: pointer;
    text-transform: uppercase;
  }

  @media screen and (max-width: 900px) {
    #main-app {
      width: 100%;
      margin: 0px;
    }
  }
  @media screen and (max-width: 500px) {
    .registration-content {
      padding: 0px 10px;
    }
    .registration-content-item {
      width: 100%;
    }
    .registration-content-item-div {
      align-items: center;
    }
    .registration-content-item img {

    }
  }
</style>
