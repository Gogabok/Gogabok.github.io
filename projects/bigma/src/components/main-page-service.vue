<template>
  <div id="main-app">
    <div class="list">
      <div @click="listMethod(index)" :style="item.isActive ? 'background: #A3CC4E' : 'background: #fff'" class="list-item"v-for="(item, index) in list"><p>{{ item.title }}</p></div>
    </div>
    <div class="service-head">
      <swiper class="slider service-head-slider" :options="swiperOption">
        <swiper-slide>
          <img src="../assets/service-head-image.png" alt="">
        </swiper-slide>
        <swiper-slide>
          <img src="../assets/service-head-image.png" alt="">
        </swiper-slide>
        <swiper-slide>
          <img src="../assets/service-head-image.png" alt="">
        </swiper-slide>
        <swiper-slide>
          <img src="../assets/service-head-image.png" alt="">
        </swiper-slide>
        <swiper-slide>
          <img src="../assets/service-head-image.png" alt="">
        </swiper-slide>
        <swiper-slide>
          <img src="../assets/service-head-image.png" alt="">
        </swiper-slide>
        <swiper-slide>
          <img src="../assets/service-head-image.png" alt="">
        </swiper-slide>
        <div class="swiper-pagination" slot="pagination">

        </div>
      </swiper>
      <div class="service-head-list">
         <router-link tag="p" to="/organization" class="service-head-list-title">Кафе "MeDoner"</router-link>
        <div class="service-head-list-item">
          <img src="../assets/service-list-min-image.png" alt="">
          <div class="service-head-list-item-text">
            <p class="service-head-list-item-text-title">Кафе "MeDoner"</p>
            <p class="service-head-list-item-text-mainText">Каждый Четверг, для
                                                            девушек безлимит с
                                                            23:00 - 00:00</p>
          </div>
        </div>
        <div class="service-head-list-item">
          <img src="../assets/service-list-min-image.png" alt="">
          <div class="service-head-list-item-text">
            <p class="service-head-list-item-text-title">Кафе "MeDoner"</p>
            <p class="service-head-list-item-text-mainText">Каждый Четверг, для
                                                            девушек безлимит с
                                                            23:00 - 00:00</p>
          </div>
        </div>
        <div class="service-head-list-item">
          <img src="../assets/service-list-min-image.png" alt="">
          <div class="service-head-list-item-text">
            <p class="service-head-list-item-text-title">Кафе "MeDoner"</p>
            <p class="service-head-list-item-text-mainText">Каждый Четверг, для
                                                            девушек безлимит с
                                                            23:00 - 00:00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="service-info">
      <div class="service-info-main-info">
        <p class="service-info-title">Название акции</p>
        <p class="service-info-map">Местоположение</p>
      </div>
      <p class="service-info-price">
        500 тг
      </p>
    </div>
    <div class="add">
      <div class="add-item">

      </div>
    </div>
    <div v-if="!isMore" class="more" @click="more">
      <p class="service-more">Подробнее...</p>
    </div>
    <transition name="slide" mode="out-in">
      <div v-if="isMore" class="service-list">
        <div class="service-list-item">
          <div class="service-list-item-caption" @click="isAbout">
            <p class="service-list-item-caption-title">Описание:</p>
            <transition name="slide" mode="out-in">
              <img v-if="isAboutState" src="../assets/service-list-dropup.png" alt="" key="1">
              <img v-else src="../assets/service-list-dropdown.png" alt="" key="2">
            </transition>
          </div>
          <transition name="slide" mode="out-in">
            <div class="service-list-item-content" v-if="isAboutState">
              <ul>
                <li>Средний счет – 4 000-5 000 тг. (без учета скидки).</li>
                <li>Обслуживание 10% оплачивается без учета скидки.</li>
                <li>Один купон действителен только на 1 человека.</li>
                <li>Если Вы идете вдвоем или компанией, то купон необходимо приобретать </li>
                <li>на каждого.</li>
                <li>Купон необходимо приобретать для детей с 8 лет.</li>
                <li>Акция распространяется на компанию до 8 человек.</li>
                <li>За 9-го, 10-го и более человек в компании необходимо внести депозит — </li>
                <li>5 500 тг. (на каждого).</li>
                <li>Депозит является не возвратным.</li>
                <li>Если счет уже закрыт, то скидка не предоставляется повторно.</li>
                ​<li>Акция не распространяется на доставку, вынос, банкеты, бизнес-ланчи.</li>
                <li>Особенности:</li>
                <li>Кухня — европейская, грузинская, азербайджанская. </li>
                <li>Работает зал для курящих и не курящих.</li>
                <li>Вместимость заведения:</li>
                <li>зал — до 350 человек;</li>
                <li>летник — до 80 человек. </li>
                <li>Для хорошего настроения:</li>
                <li>танцпол;</li>
                <li>ежедневно живая музыка;</li>
                <li>бизнес-ланчи с 12 до 15:00;</li>
                <li>wi-fi;</li>
                <li>проектор;</li>
                <li>телевизор на летней террасе и спортивные трансляции. </li>
                <li>Доступен только наличный расчет.</li>
                <li>Парковки нет.</li>
                <li>В заведении проводятся мальчишники/девичники, детские праздники и дни рождения. </li>
              </ul>
            </div>
          </transition>
        </div>
        <div class="service-list-item">
          <div class="service-list-item-caption" @click="isSale">
            <p class="service-list-item-caption-title service-list-item-caption-title-nonDec">Действие акции:</p>
            <transition name="slide" mode="out-in">
              <img v-if="isSaleState" src="../assets/service-list-dropup.png" alt="" key="1">
              <img v-else src="../assets/service-list-dropdown.png" alt="" key="2">
            </transition>
          </div>
          <transition name="slide" mode="out-in">
            <div class="service-list-item-content" v-if="isSaleState">
              <div class="clock"></div>
            </div>
          </transition>
        </div>
        <div class="service-list-item">
          <div class="service-list-item-caption" @click="isTime">
            <p class="service-list-item-caption-title service-list-item-caption-title-nonDec">График работы заведения:</p>
            <transition name="slide" mode="out-in">
              <img v-if="isTimeState" src="../assets/service-list-dropup.png" alt="" key="1">
              <img v-else src="../assets/service-list-dropdown.png" alt="" key="2">
            </transition>
          </div>
          <transition name="slide" mode="out-in">
            <div class="service-list-item-content service-list-item-content-time" v-if="isTimeState">
              <div class="service-list-item-content-time-item">
                <p class="service-list-item-content-time-item-title">Понедельник</p>
                <p class="service-list-item-content-time-item-time">10:00 - 24:00</p>
              </div>
              <div class="service-list-item-content-time-item">
                <p class="service-list-item-content-time-item-title">Вторник</p>
                <p class="service-list-item-content-time-item-time">10:00 - 24:00</p>
              </div>
              <div class="service-list-item-content-time-item">
                <p class="service-list-item-content-time-item-title">Среда</p>
                <p class="service-list-item-content-time-item-time">10:00 - 24:00</p>
              </div>
              <div class="service-list-item-content-time-item">
                <p class="service-list-item-content-time-item-title">Четверг</p>
                <p class="service-list-item-content-time-item-time">10:00 - 24:00</p>
              </div>
              <div class="service-list-item-content-time-item">
                <p class="service-list-item-content-time-item-title">Пятница</p>
                <p class="service-list-item-content-time-item-time">10:00 - 24:00</p>
              </div>
              <div class="service-list-item-content-time-item">
                <p class="service-list-item-content-time-item-title">Суббота</p>
                <p class="service-list-item-content-time-item-time">10:00 - 02:00</p>
              </div>
              <div class="service-list-item-content-time-item">
                <p class="service-list-item-content-time-item-title">Воскресенье</p>
                <p class="service-list-item-content-time-item-time">10:00 - 02:00</p>
              </div>
            </div>
          </transition>
        </div>
        <div class="service-list-item">
          <div class="service-list-item-caption" @click="isSocial">
            <p class="service-list-item-caption-title service-list-item-caption-title-nonDec">Социальные сети:</p>
            <transition name="slide" mode="out-in">
              <img v-if="isSocialState" src="../assets/service-list-dropup.png" alt="" key="1">
              <img v-else src="../assets/service-list-dropdown.png" alt="" key="2">
            </transition>
          </div>
          <transition name="slide" mode="out-in">
            <div class="service-list-item-content service-list-item-content-social" v-if="isSocialState">
              <a href="#" target="_blank">
                <img src="../assets/inst.png" alt="">
              </a>
              <a href="#" target="_blank">
                <img src="../assets/facebook.png" alt="">
              </a>
            </div>
          </transition>
        </div>
        <div class="service-list-item">
          <div class="service-list-item-caption" @click="isSite">
            <p class="service-list-item-caption-title service-list-item-caption-title-nonDec">Сайт:</p>
            <transition name="slide" mode="out-in">
              <img v-if="isSiteState" src="../assets/service-list-dropup.png" alt="" key="1">
              <img v-else src="../assets/service-list-dropdown.png" alt="" key="2">
            </transition>
          </div>
          <transition name="slide" mode="out-in">
            <div class="service-list-item-content service-list-item-content-site" v-if="isSiteState">
              <a href="#" target="_blank">www.hachapuri.kz</a>
            </div>
          </transition>
        </div>
        <div class="service-list-item">
          <div class="service-list-item-caption" @click="isPay">
            <p class="service-list-item-caption-title service-list-item-caption-title-nonDec">Варианты оплаты:</p>
            <transition name="slide" mode="out-in">
              <img v-if="isPayState" src="../assets/service-list-dropup.png" alt="" key="1">
              <img v-else src="../assets/service-list-dropdown.png" alt="" key="2">
            </transition>
          </div>
          <transition name="slide" mode="out-in">
            <div class="service-list-item-content service-list-item-content-pay" v-if="isPayState">
              <div class="service-list-item-content-pay-item">
                <img src="../assets/service-list-item-content-pay-image-1.png" alt="">
                <p>По картам</p>
              </div>
              <div class="service-list-item-content-pay-item">
                <img src="../assets/service-list-item-content-pay-image-2.png" alt="">
                <p>Наличный расчет</p>
              </div>
              <div class="service-list-item-content-pay-item">
                <img src="../assets/service-list-item-content-pay-image-3.png" alt="">
                <p>Через интернет</p>
              </div>
              <div class="service-list-item-content-pay-item">
                <img src="../assets/service-list-item-content-pay-image-4.png" alt="">
                <p>Через банк</p>
              </div>
            </div>
          </transition>
        </div>
        <div class="service-socials">
          <div class="service-socials-item">
            <div class="service-list-item-content-pay-item">
              <img src="../assets/socials-icon-1.png" alt="">
              <p>Позвонить</p>
            </div>
          </div>
          <div class="service-socials-item">
            <div class="service-list-item-content-pay-item">
              <img src="../assets/socials-icon-2.png" alt="">
              <p>В избранное</p>
            </div>
          </div>
          <div class="service-socials-item">
            <div class="service-list-item-content-pay-item">
              <img src="../assets/socials-icon-3.png" alt="">
              <p>Поделиться</p>
            </div>
          </div>
        </div>
        <router-link tag="div" to="/our-plan" class="service-add-wanted">
          <p>Хотите разместить здесь свою рекламу?</p>
        </router-link>
        <div class="service-issues">
          <ul>
            <li>Это моя компания</li>
            <div class="modale-wrong" v-show="isModalWhatsWrong">
              <div class="modale-wrong-close" @click="modalWhatsWrong">&#9747;</div>
              <p class="modale-wrong-title">Что неправильно ?</p>
              <div @click="whatIsWrongItemActive(index)" v-for="(item, index) in whatIsWrong" class="modale-wrong-item">
                <p class="modale-wrong-item-title">{{ item.title }}</p>
                <transition-group name="slide" mode="out-in">
                  <div class="modale-wrong-item-add" :key="index" v-if="!item.isActive">+</div>
                  <div class="modale-wrong-item-remove" :key="index + 9999" v-else>&#10004;</div>
                </transition-group>
              </div>
              <button class="modale-wrong-btn" type="button">Отправить</button>
            </div>
            <li class="service-issues-modaletengl-2" :class="isModalWhatsWrong ? 'service-issues-modaletengl' : ''" @click="modalWhatsWrong">Нашли ошибку?</li>
          </ul>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>

import { swiper, swiperSlide } from 'vue-awesome-swiper'
import 'swiper/dist/css/swiper.css'

function clocker () {
  var clock = $('.clock').FlipClock(new Date(2019,8,25).getTime()/1000 - new Date().getTime()/1000, {
          clockFace: 'DailyCounter', 
          autoStart: false,
          countdown: true, 
          language:'ru-ru', 
  });
  clock.setCountdown(true);
  clock.start();
};

export default {
  name: 'main-page-poest-app',
  components: {
    swiper,
    swiperSlide
  },
  mounted() {
    clocker()
  },
  data () {
    return {
      swiperOption: {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      },
      activeModal: null,
      activeCategory: false,
      activeCategoryMin: false,
      activeFilter: false,
      filterResult: 2000,
      isFilterOpen: false,
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
      isMore: false,
      isAboutState: false,
      isSaleState: false,
      isTimeState: false,
      isSocialState: false,
      isSiteState: false,
      isPayState: false,
      isModalWhatsWrong: false,
      whatIsWrong: [
        {
          title: 'Телефон',
          isActive: false
        },
        {
          title: 'Адрес',
          isActive: false
        },
        {
          title: 'Время работы',
          isActive: false
        },
        {
          title: 'Сфера деятельности',
          isActive: false
        },
        {
          title: 'Не актуальное предложение',
          isActive: false
        },
        {
          title: 'Организация закрыта',
          isActive: false
        },
        {
          title: 'Социальные сети или сайт',
          isActive: false
        },
        {
          title: 'Другое',
          isActive: false
        }
      ]
    }
  },
  computed: {
    list () {
      return this.$store.getters.list
    }
  },
  created () {
    // let arrayItems = []
    // for (let i = 0; i < this.$store.getters.list.length; i++) {
    //   if (this.$store.getters.list[i].isActive) {
    //     arrayItems.push(this.$store.getters.list[i].component)
    //   }
    // }
    // if (arrayItems.length < 1) {
    //   this.$store.getters.list[0].isActive = true
    //   arrayItems.push(this.$store.getters.list[0].component)
    // }
    // this.activeModal = arrayItems[0]
    // this.$store.commit('activeModal', this.activeModal)
  },
  methods: {
    listMethod (ind) {
      for (let i = 0; i < this.$store.getters.list.length; i++) {
        this.$store.getters.list[i].isActive = false
      }
      this.$store.getters.list[ind].isActive = true
      this.activeModal = this.$store.getters.list[ind].component
      this.$store.commit('activeModal', this.activeModal)
    },
    isAbout () {
      this.isAboutState = !this.isAboutState
    },
    isSale () {
      clocker()
      this.isSaleState = !this.isSaleState
      clocker()
      setTimeout(() => {
        clocker()
      }, 10);
    },
    isTime () {
      this.isTimeState = !this.isTimeState
    },
    isSocial () {
      this.isSocialState = !this.isSocialState
    },
    isSite () {
      this.isSiteState = !this.isSiteState
    },
    isPay () {
      this.isPayState = !this.isPayState
    },
    more () {
      clocker()
      this.isMore = true
      clocker()
    },
    modalWhatsWrong () {
      this.isModalWhatsWrong = !this.isModalWhatsWrong
    },
    whatIsWrongItemActive (ind) {
      this.whatIsWrong[ind].isActive = !this.whatIsWrong[ind].isActive
    }
  }
}
</script>

<style scoped>
.clock {
  display: flex;
  justify-content: center;
  margin: 30px 0px;
}
  .slide-enter-active{
    animation: slideIn 0.25s;
  }

  .slide-leave-active{
    animation: slideOut 0.25s;
  }
  @keyframes slideIn{
    from{opacity: 0}
    to{opacity: 1}
  }

  @keyframes slideOut{
    from{opacity: 1}
    to{opacity: 0}
  }
  #main-app {
    padding-top: 50px;
    overflow-x:hidden;
  }
  .service-head {
    display: flex;
    align-items: flex-start;
  }
  .service-head-slider {
    position: relative;
    width: 55%;
    display: flex;
    justify-content: center;
    cursor: pointer;
  }
  .service-head-slider img {
    width: 100%;
  }

  .service-head-list {
    margin-left: 40px;
    margin-top: -20px;
    width: 40% !important;
  }
  .service-head-list-title {
    font-weight: bold;
    font-size: 24px;
    font-family: PT Sans, sans-serif;
    text-align:center;
    text-decoration: underline;
    color:#000000;
    margin: 0;
    width: 100%;
    cursor: pointer;
  }
  .service-head-list-item {
    display: flex;
    text-align:left;
    margin: 20px 0px;
  }
  .service-head-list-item-text {
    width: 40%;
    margin-left: 10px;
  }
  .service-head-list-item-text-title {
    font-weight: bold;
    font-size: 24px;
    font-family: PT Sans, sans-serif;
    color:#000000;
    margin: 0px 0px 10px 0px;
    width: 100%;
  }
  .service-head-list-item-text-mainText {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 14px;
    color:#434343;
    text-decoration: underline;
    margin: 0;
    width: 70%;
  }
  .service-info {
    border-bottom: 5px dashed rgba(109, 192, 85, .61);
    padding: 0px 30px 10px 30px;
    margin-bottom: 10px;
  }
  .service-info-main-info {
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
  }
  .service-info-title {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 30px;
    color:#000;
    text-decoration: underline;
    text-transform:uppercase;
    margin: 0;
  }
  .service-info-map {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 25px;
    color:#707070;
    text-decoration: underline;
    margin: 0;
  }
  .service-info-price {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 30px;
    color:#6DC055;
    margin: 0;
  }
  .add {
    width: 100%;
    padding: 10px 30px;
  }
  .add-item {
    width: 100%;
    height: 225px;
    background:#666666;
  }
  .more {
    padding: 10px 30px 20px 30px;
    cursor: pointer;
  }
  .service-more {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 30px;
    color:#000;
    text-decoration: underline;
    margin: 0;
  }
  .service-list {
    padding: 10px 0px;
  }
  .service-list-item {
    margin: 20px 0px;
    padding: 0px 30px;
    padding-bottom: 20px;
    border-bottom: 5px dashed rgba(109, 192, 85, .61);
  }
  .service-list-item-caption {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
  }
  .service-list-item-caption img {
    cursor: pointer;
  }
  .service-list-item-caption-title {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 30px;
    color:#000;
    text-decoration: underline;
    margin: 0;
  }
  .service-list-item-caption-title-nonDec {
    text-decoration: none;
    color:#434343;
  }
  .service-list-item-content {
    font-size: 25px;
    font-family: PT Sans, sans-serif;
  }
  .service-list-item-content ul {
    list-style-type:none;
    padding: 0px;
  }
  .service-list-item-content li {
    margin: 0;
  }
  .service-list-item-content-time {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    height: 260px;
    margin-top: 20px;
  }
  .service-list-item-content-time-item {
    display: flex;
    width: 320px;
    align-items: center;
    justify-content: space-between;
    margin: 5px 0px;
  }
  .service-list-item-content-time-item-title {
    font-weight: bold;
    font-size: 25px;
    font-family: PT Sans, sans-serif;
    color:#434343;
  }
  .service-list-item-content-time-item-time {
    font-weight: bold;
    font-size: 25px;
    font-family: PT Sans, sans-serif;
    color:#6DC055;
  }
  .service-list-item-content-social {
    display: flex;
  }
  .service-list-item-content-social a {
    margin: 0px 10px;
  }
  .service-list-item-content-site {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    color:#2680EB;
    text-decoration: underline;
    margin: 20px 0px;
  }
  .service-list-item-content-pay {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 20px 0px;
  }
  .service-list-item-content-pay-item {
    text-align: center;
  }
  .service-list-item-content-pay-item p {
    font-family: PT Sans, sans-serif;
    font-size: 25px;
  }
  .service-socials {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 0px 20px 0px;
    padding: 0px 30px;
  }
  .service-socials-item {
    text-align: center;
  }
  .service-socials-item p {
    font-family: PT Sans, sans-serif;
    font-size: 25px;
  }
  .service-add-wanted {
    width: 100%;
    background:#6DC055;
    text-align: center;
    padding: 10px 0px;
    cursor: pointer;
  }
  .service-add-wanted p {
    color:#fff;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    font-size: 30px;
    margin: 0;
    text-transform: uppercase;
  }
  .service-issues {
    padding-top: 20px;
    position: relative;
  }
  .service-issues ul {
    display: flex;
    justify-content: center;
    padding: 0;
  }
  .service-issues ul li {
    margin: 0px 50px;
    color:#6DC055;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    list-style-color:#6DC055;
    font-size: 25px;
    cursor: pointer;
  }
  .list {
    display: none;
    width: 100%;
    justify-content: space-between;
    border-bottom:3px solid #A3CC4E;
  }
  .list-item {
    padding: 10px 20px;
    border-right: 1px solid;
    border-left: 1px solid;
    border-color:rgba(112, 112, 112, 0.2);
    text-align: center;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    cursor:pointer;
  }
  .list-item p {
    margin: auto 0;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    text-transform: uppercase;
  }
  .modale-wrong {
    position: absolute;
    border-radius: 6px;
    border:1px solid #707070;
    padding: 10px 10px 30px 10px;
    bottom: 68px;
    right:350px;
    background:#fff;
    z-index: 102;
  }
  .service-issues-modaletengl:after {
    position: absolute;
    content: '';
    width: 50px;
    height: 50px;
    background:#fff;
    border-right:1px solid #707070;
    border-bottom:1px solid #707070;
    transform: rotate(45deg);
    top:-56px;
    left:40%;
    z-index: 103;
  }
  .service-issues-modaletengl-2 {
    position: relative;
  }
  .modale-wrong-title {
    text-align: center;
    font-family: PT Sans, sans-serif;
    font-size: 30px;
    font-weight: bold;
  }
  .modale-wrong-close {
    border-radius: 50%;
    background:#6DC055;
    width: 29px;
    height: 30px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color:#fff;
    font-weight: bold;
    margin: 0;
    cursor: pointer;
    margin-left: auto;
  }
  .modale-wrong-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 5px 0px;
    padding: 0px 20px;
    cursor: pointer;
  }
  .modale-wrong-item-add {
    color:#000;
    font-weight: bold;
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 47px;
    line-height: 0px;
    pointer-events: none;
  }
  .modale-wrong-item-title {
    font-size: 23px;
    font-family: PT Sans, sans-serif;
    margin: 0;
    margin-right: 10px;
  }
  .modale-wrong-item-remove {
    color:#6DC055;
    font-weight: bold;
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 30px;
    line-height: 0px;
    pointer-events: none;
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
    margin: 0px auto 10px auto;
    cursor: pointer;
  }
  @media screen and (max-width: 1270px) {
    .service-head {
      display: block;
    }
    .service-head-slider {
      margin: 20px 30px;
      width:600px;
    }
    .service-head-list {
      margin: 20px 30px;
      width: 600px !important;
    }
    .service-head-list-title {
      text-align: left;
    }
  }
  @media screen and (max-width: 1120px) {
    .modale-wrong {
      right:60px;
    }
  }
  @media screen and (max-width: 980px) {
    .list {
      display: flex;
      flex-wrap: wrap;
    }
    .list-item {
      padding: 5px 0px;
    }
    .service-list-item-content-time {
      display: block;
      height: auto;
    }
  }
  @media screen and (max-width: 700px) {
    .service-head-slider {
      max-width: 100%;
    }
    .swiper-pagination {
      bottom: 40px;
    }
    .service-head-list {
      max-width: 100% !important;
    }
    .service-head-slider {
      margin: 20px 0px;
      padding: 30px;
    }
    .service-head-list {
      margin: 5px 0px;
      padding: 30px;
    }
    .service-head-list-item {
      align-items: center;
    }
    .service-info-map {
      display: none;
    }
    .service-info {
      background:#6DC055;
      color:#fff;
      text-decoration: none;
      display: flex;
      justify-content: space-between;
    }
    .service-info-title {
      color:#fff;
      text-decoration: none;
    }
    .service-info-main-info {
      width: 50% !important;
    }
    .service-info-price {
      color:#fff;
      text-decoration: none;
    }
    .service-list-item-content-pay {
      flex-wrap: wrap;
    }
    .service-list-item-content-pay-item {
      width: 50%;
    }
    .service-socials {
      flex-wrap: wrap;
      justify-content: center;
    }
    .service-socials-item {
      width: 100%;
      text-align: center;
    }
    .service-list-item-content-pay-item {
      margin: 0 auto;
    }
    .service-issues ul {
      display: block;
    }
    .modale-wrong {
      left:10px;
    }
    .service-issues-modaletengl:after {
      left:40px;
    }
  }
  @media screen and (max-width: 500px) {
    .service-head-list-item {
      display: block;
      margin: 30px 0px;
      width: 100%;
    }
    .service-head-list-item-text {
      width: 100%;
      margin-left: 0;
    }
  }

</style>
