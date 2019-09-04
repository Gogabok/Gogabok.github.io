<template>
  <div id="main-app">
    <div class="main-container">
      <div class="main-app-leftSide">
        <div class="main-app-title">
          Зарегистрировать фрилансера
        </div>
        <form class="login-content-form">
          <label class="login-content-form-item" for="ur">
            <p class="login-content-form-item-title">Имя</p>
            <input class="login-content-form-item-input" id="ur" type="text" required="">
          </label>
          <label class="login-content-form-item" for="torg">
            <p class="login-content-form-item-title">Фамилия</p>
            <input class="login-content-form-item-input" id="torg" type="text" required="">
          </label>
          <label class="login-content-form-item" for="rnn">
            <p class="login-content-form-item-title">Отчество</p>
            <input class="login-content-form-item-input" id="rnn" type="text" required="">
          </label>
          <label class="login-content-form-item" for="bin">
            <p class="login-content-form-item-title">ИНН</p>
            <input class="login-content-form-item-input" id="bin" type="text" required="">
          </label>
          <p class="login-content-form-item-title">Контактное лицо</p>
          <p @click="addContant" class="login-content-form-item-title-add login-content-form-item-title-add-phone">Добавить телефон</p>
          <div class="p-0 d-flex login-content-form-item-input-div" v-for="(item, index) in contacts">
            <input class="login-content-form-item-input mt-inputs" :id="index" type="text" required=""><span @click="removeContact($event.target, index)">&#10006;</span>
          </div>
          <br>
          <label class="login-content-form-item mt" for="1pass">
            <p class="login-content-form-item-title">Создать пароль</p>
            <input class="login-content-form-item-input" id="1pass" type="text" required="">
          </label>
          <label class="login-content-form-item" for="2pass">
            <p class="login-content-form-item-title">Подтвердить пароль</p>
            <input class="login-content-form-item-input" id="2pass" type="text" required="">
          </label>
        </form>
      </div>
      <div class="main-app-rightSide">
        <div class="main-app-rightSide-logo">
          <div class="login-content-logo">
            <input type="file" onchange="readURL(this);">
            <img id="blah" src="http://placehold.it/180" alt="">
          </div>
          <div class="login-content-logo-text">
            <p>Прикрепить логотип</p>
            <p>( jpeg, png )</p>
          </div>
        </div>
        <form class="login-content-form">
          <label class="login-content-form-item" for="site">
            <p class="login-content-form-item-title">Сайт</p>
            <input class="login-content-form-item-input" id="site" type="text" required="">
          </label>
          <label class="login-content-form-item" for="mail">
            <p class="login-content-form-item-title">e-mail</p>
            <input class="login-content-form-item-input" id="mail" type="text" required="">
          </label>

          <label class="login-content-form-item" for="shedule">
            <p class="login-content-form-item-title">Тип занятости</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="shedule" id="shedule">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="graph">
            <p class="login-content-form-item-title">График работы</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="graph" id="graph">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>

          <label class="login-content-form-item" for="about">
            <p class="login-content-form-item-title">О компании ( до 300 символов )</p>
            <textarea class="login-content-form-item-input" id="about" type="text" required=""></textarea>
          </label>
        </form>
      </div>
    </div>
    <button class="modale-wrong-btn">Отправить заявку</button>
    <p class="form-error">* возможно вы что-то неправильно заполнили или пропустили</p>
    <p class="form-message">Нажимая кнопку "ОТПРАВИТЬ ЗАЯВКУ", я даю ___ "БИГМА" согласие
    на обработку персональных данных на условиях и в целях, определнных
    "Политикой конфиденциальности" <router-link tag="a" to="/text">ссылка</router-link></p>
    <p class="form-success">Ваша заявка успешно отправлена и будет рассматриваться
      у модератора от 1 часа до 3 рабочих дней!
    </p>
  </div>
</template>

<script>

import { mapGetters } from 'vuex'

function masked () {
  setTimeout(function () {
    $('.mt-inputs').mask('+7(999)999-99-99')
  }, 10)
}

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
      ],
      contacts: []
    }
  },
  computed: {

  },
  methods: {
    addContant () {
      masked()
      this.contacts.push('')
      masked()
    },
    removeContact (e, index) {
      e.parentElement.classList.add("disnone")
    }
  }
}
</script>

<style scoped>
.disnone {
  display: none !important;
}
.mt-inputs {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}
.login-content-form-item-input-div {
  align-items: center;
  display: flex;
}

.login-content-form-item-input-div span {
  cursor: pointer;
}
  #main-app {
    width: 100%;
    background: #fff;
    padding: 10px 30px 10px 30px;
    margin-top: 15px;
    border-radius: 12px;
  }
  .main-container {
    display: flex;
    justify-content: space-between;
  }
  .main-app-title {
    color:#000000;
    font-size: 30px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    text-align: center;
  }
  .main-app-leftSide {
    width: 50%;
  }
  .main-app-rightSide {
    width: 40%;
  }
  .login-content-form {
    display: block;
    margin-top: 30px;
  }
  .login-content-form-item {
    margin: 10px 1px;
  }
  .login-content-form-item-title {
    font-weight: bold;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    text-align: left;
    margin: 5px 10px;
  }
  .login-content-form-item-title-add {
    text-decoration: underline;
    margin: 10px 0px;
    margin-left: 30px;
    cursor: pointer;
    color:#3b94ed;
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
  .login-content-form-item-input-div {
    width: 320px;
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
    margin: 0px auto;
    text-align: center;
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
    margin: 30px auto 10px auto;
    cursor: pointer;
    text-transform: uppercase;
  }
  .main-app-rightSide-logo {
    display: flex;
    margin-top: 40px;
  }
  .login-content-logo-text {
    text-align: center;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    color:#000000;
    margin: 0;
  }
  .form-error {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    color:#FF0000;
    text-align: center;
    width: 250px;
    margin: 0 auto;
  }
  .form-message {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    color:#707070;
    text-align: center;
    width: 450px;
    margin: 10px auto;
  }
  .form-message a {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    text-decoration: underline;
  }
  .form-success {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    font-weight: bold;
    color:#6DC055;
    text-align: center;
    width: 450px;
    margin: 10px auto;
  }
  textarea {
    height: 120px;
  }
  .login-content-form-item-input-non {
    display: none;
  }

  .login-content-form-item-input-select {
    position: relative;
    display: inline-block;
    background:url("../assets/dropdown.png") 95% 50% no-repeat;
    background-color:#F1F9FF;
  }
  .login-content-form-item-input-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
  }
  .mt {
    margin-top: 150px;
  }

  @media screen and (max-width: 1200px) {
    #main-app {
      margin: 0px;
      border-radius: 0px;
    }
  }
  @media screen and (max-width: 900px) {
    .main-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .main-app-leftSide {
      width: 100%;
    }
    .main-app-rightSide {
      width: 100%;
    }
    .login-content-form {
      text-align: center;
    }
    .login-content-form-item {
      display: block;
      text-align: center;
    }
    .login-content-form-item-title {
      text-align: center;
    }
    .login-content-form-item-title-add {
      margin: 10px auto;
      text-align: center;
    }
    .main-app-rightSide-logo {
      display: block;
    }
    .login-content-logo-text {
      margin-top: 20px;
    }
    .login-content-form-item-input-div {
      margin-left: auto;
      margin-right: auto;
    }
  }
  @media screen and (max-width: 550px) {
    #main-app {
      padding: 10px 10px;
    }
    .form-message {
      width: 100%;
    }
    .form-success {
      width: 100%;
    }
  }
  @media screen and (max-width: 400px) {
    .login-content-form-item-input {
      width: 100%;
      margin: 10px 0px;
    }
    .login-content-form-item-input-div {
      width: 100%;
      margin: 10px 0px;
    }
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
</style>
