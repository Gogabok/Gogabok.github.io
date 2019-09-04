<template>
  <div id="main-app">
    <div class="list">
      <div @click="listMethod(index)" :style="item.isActive ? 'background: #A3CC4E' : 'background: #fff'" class="list-item" v-for="(item, index) in list"><p>{{ item.title }}</p></div>
    </div>
    <div class="viewer">
      <transition name="slide" mode="out-in">
        <component :is="this.$store.getters.activeModal"></component>
      </transition>
    </div>
  </div>
</template>

<script>

import headerApp from '../components/header.vue'
import mainPagePoest from '../components/main-page-poest.vue'
import mainPageService from '../components/main-page-service.vue'
import mainPageCategories from '../components/main-page-categories.vue'
import { mapGetters } from 'vuex'

export default {
  name: 'main-page-poest-app',
  components: {
    headerApp, mainPagePoest, mainPageService, mainPageCategories
  },
  data () {
    return {
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
      ]
    }
  },
  computed: {
    list () {
      return this.$store.getters.list
    },
    filterIcon () {
      if (this.isFilterOpen) {
        return 'filters-open.png'
      } else {
        return ''
      }
    }
  },
  created () {
    let arrayItems = []
    for (let i = 0; i < this.$store.getters.list.length; i++) {
      if (this.$store.getters.list[i].isActive) {
        arrayItems.push(this.$store.getters.list[i].component)
      }
    }
    if (arrayItems.length < 1) {
      this.$store.getters.list[0].isActive = true
      arrayItems.push(this.$store.getters.list[0].component)
    }
    this.activeModal = arrayItems[0]
    this.$store.commit('activeModal', this.activeModal)
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
    category () {
      this.activeCategory = !this.activeCategory
    },
    categoryMin () {
      this.activeCategoryMin = !this.activeCategoryMin
    },
    filters () {
      this.activeFilter = !this.activeFilter
    },
    filterResultValue (event) {
      this.filterResult = event.value
    },
    toggleFilter () {
      this.isFilterOpen = !this.isFilterOpen
    }
  }
}
</script>

<style scoped>
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

.main-part-list-mobile {
  display: none;
}
  #main-app {
    width: 100%;
  }
  .list-mobile {
    display: none;
  }
  .list {
    display: flex;
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
  .viewer {
    width: 100%;
    background:#fff;
  }

  @media screen and (max-width: 980px) {
    .list {
      display: none;
    }
    .list-mobile {
      width: 100%;
      padding: 5px 20px;
      text-align: center;
      display: block;
      background:#6DC055;
      border-bottom-left-radius:11px;
      border-bottom-right-radius:11px;
    }
    #main-app {
      min-height: 80vh;
      background:#fff;
      padding: 20px;
    }
    .list-mobile-title {
      font-size: 16px;
      font-weight: bold;
      font-family: PT Sans, sans-serif;
      color:#000;
      text-transform: uppercase;
      margin: 20px 0px;
      width: 100%;
      margin-right: -40px;
    }
    .list-mobile-title-span:after {
      content: "—";
      border:3px solid #A3CC4E;
      border-radius: 50%;
      padding: 1px 8px 4px 8px;
      font-size: 20px;
      font-weight: bold;
      font-family: PT Sans, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin: 0;
      cursor: pointer;
      width: 42px !important;
      height: 42px !important;
      line-height: 0px !important;
      color:#707070;
    }
    .list-mobile-title-span-non:after {
      content: "+";
      border:3px solid #A3CC4E;
      border-radius: 50%;
      padding: 1px 8px;
      font-size: 20px;
      font-weight: bold;
      font-family: PT Sans, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin: 0;
      cursor: pointer;
      width: 42px !important;
      height: 42px !important;
      line-height: 0px !important;
      color:#707070;
    }
    .list-item {
      border:1px solid #707070;
      border-radius: 21px;
      margin: 20px 0px;
    }
    .list-mobile-title-container {
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      background:#fff;
      padding: 0px 10px;
      background:#fff;
    }
    .list-mobile-item-border {
      margin: 20px 0px;
      background:#fff;
    }
    .category-animation {

    }
    .slide-enter-active{
      animation: slideIn 0.5s;
    }

    .slide-leave-active{
      animation: slideOut 0.5s;
    }
    .slide-2-enter-active{
      animation: slideIn 0.1s;
    }

    .slide-2-leave-active{
      animation: slideOut 0.1s;
    }
    .slide-1-enter-active{
      animation: slideIn 0.5s;
    }

    .slide-1-leave-active{
      animation: slideOut 0s;
    }

    @keyframes slideIn{
      from{opacity: 0}
      to{opacity: 1}
    }

    @keyframes slideOut{
      from{opacity: 1}
      to{opacity: 0}
    }
    .sidebar-list-item {
      text-align: center;
      border:1px solid #707070;
      border-radius: 21px;
      height: 70px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-right: 1px;
      margin: 20px 0px;
    }
    .sidebar-list-item-active {
      background: #A3CC4E;
    }
    .sidebar-list-item p {
      text-align: center;
      font-size: 16px;
      font-weight: bold;
      font-family: PT Sans, sans-serif;
      text-transform: uppercase;
      width: 140px;
      margin: 0 auto;
    }
    .sidebar-topFilter {
    padding: 20px 20px;
  }
  .sidebar-topFilter-input {
    border-radius: 7px;
    padding: 0;
    display: flex;
    align-items: stretch;
    width: 100%;
    margin: 20px 0px;
  }
  .sidebar-topFilter-input-title {
    border-bottom-left-radius:7px;
    border-top-left-radius:7px;
    background: #333333;
    color:#fff;
    text-align: center;
    padding: 5px 10px;
    font-size: 13px;
    font-family: PT Sans, sans-serif;
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 60%;
  }
  .sidebar-topFilter-input-select {
    outline:none;
    padding: 5px 10px;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    border:1px solid #707070;
    border-right: none;
    padding-right: 30px !important;
    z-index: 9999;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: flex;
    justify-content: center;
    flex-direction: column;
    display: inline-block;
    background:transparent;
    width: 100%;
  }
  .select {
    position: relative;
    display: inline-block;
    width: 50%;
  }
  .select:after {
    content: "∨";
    padding: 0;
    position: absolute;
    right: -5px;
    font-size: 12px;
    height: 100%;
    text-align: center;
    width: 30px;
    border:1px solid #707070;
    border-top-right-radius:7px;
    border-bottom-right-radius:7px;
    pointer-events: none;
    padding-top: 3px;
    color:#000;
    font-size: 14px;
  }
  .sidebar-topFilter-input-select-option-default {
    display: none;
  }
  .sidebar-topFilter-filter {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .sidebar-topFilter-filter span {
    margin: 0px 10px;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 45px;
  }
  .sidebar-topFilter-filter-result {
    width: 100%;
    text-align: center;
  }
  .sidebar-topFilter-filter-result-title {
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    text-transform: uppercase;
    color:#000;
  }
  .sidebar-topFilter-filter-item {
        width: 100%;
        overflow:hidden;
        -webkit-appearance: none;
        background-color: #AAAAAA;
        outline: none;
        height:17px;
        border-radius: 4px;
    }

    .sidebar-topFilter-filter-item::-webkit-slider-runnable-track {
        height: 17px;
        -webkit-appearance: none;
        color: #13bba4;
        margin-top: -1px;
    }

    .sidebar-topFilter-filter-item::-webkit-slider-thumb {
        width: 17px;
        -webkit-appearance: none;
        height: 17px;
        border-radius: 50%;
        cursor: ew-resize;
        background: #000;
        box-shadow: -465px 0 0 460px #A3CC4E;
        overflow:visible;
    }

    .sidebar-topFilter-filter-item::-moz-range-progress {
        background-color: #A3CC4E;
    }
    .sidebar-topFilter-filter-item::-moz-range-track {
        background-color: #A3CC4E;
    }
    .sidebar-topFilter-filter-item::-ms-fill-lower {
        background-color: #A3CC4E;
    }
    .sidebar-topFilter-filter-item::-ms-fill-upper {
        background-color: #A3CC4E;
    }
    .filter-ok {
      background:#A3CC4E;
      outline: none;
      font-weight: bold;
      font-family: PT Sans, sans-serif;
      font-size: 14px;
      text-transform: uppercase;
      border-radius: 6px;
      padding: 7px 0px;
      text-align: center;
      border:none;
      width: 100%;
      cursor: pointer;
    }
    #main-app {
      padding: 0 !important;
    }
    .main-part-filter {
      display: flex;
      width: 100%;
      justify-content: center;
      margin: 10px 0px 5px 0px;
    }
    .main-part-filter-item {
      background:#A3CC4E;
      text-align: center;
      font-weight: bold;
      font-size: 14px;
      font-family: PT Sans, sans-serif;
      padding: 5px 20px;
      border-radius: 6px;
      text-transform: uppercase;
      margin: 0px 10px;
      display: block;
      border:2px solid #fff;
    }
    .main-part-filter-item-active {
      background: #fff
    }
    .main-part-filter-item-sides {
      background:#A3CC4E;
      text-align: center;
      font-weight: bold;
      font-size: 14px;
      font-family: PT Sans, sans-serif;
      padding: 5px 5px 5px 10px;
      border-radius: 6px;
      text-transform: uppercase;
      margin: 0px 10px;
      display: flex;
      align-items: center;
    }
    .main-part-filter-item-side {
      display: flex;
      flex-wrap: wrap;
      width: 16px;
      height: 100%;
      align-items: center;
      flex-direction: column;
      height: 18px;
      margin-right: 10px;
    }
    .main-part-filter-item-side span {
      background:#fff;
      width: 6px;
      height: 6px;
      margin: 2px 2px 0px 0px;
    }
    .main-part-filter-item-side-2 {
      background:#fff;
      width: 26px;
      height: 18px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 3px 0px;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
    }
    .main-part-filter-item-side-2 span {
      background:#A3CC4E;
      display: block;
      width: 16px !important;
      height: 2px;
      margin: 1px 0px;
    }
    .list-mobile-mainTitle-p {
      color:#fff;
      font-size: 18px;
      font-weight: bold;
      font-family: PT Sans, sans-serif;
      text-transform: uppercase;
      z-index: 999;
      position: relative;
      margin: 0;
    }
    .list-mobile-mainTitle {
      position: relative;
      height: 40px;
    }
    .list-mobile-mainTitle img {
      position: absolute;
      top: -10px;
      z-index: 2;
      position: relative;
      pointer-events: none;
    }
    .filter-open {
      position: absolute;
      top: 20px;
      bottom:0px;
      z-index: 2;
      position: relative;
    }
  }
  @media screen and (max-width: 900px) {
    .main-part-list {
      padding: 20px;
      justify-content: center;
    }
    .main-part-list-item {
      width: 300px;
      margin: 5px 10px;
    }
  }
  @media screen and (max-width: 400px) {
    .list-mobile-title {
      text-align: left;
    }
  }
  @media screen and (max-width: 685px) {
    .main-part-filter {
      flex-wrap: wrap;
    }
    .main-part-filter-item, .main-part-filter-item-sides {
      margin: 10px 10px;
    }
    .list-mobile-title {
      margin: 12px 0px;
    }
  }
  @media screen and (max-width: 700px) {
    .main-part-list-item {
      width: 250px;
      margin: 5px 10px;
    }
  }
  @media screen and (max-width: 600px) {
    .main-part-list-item {
      width: 200px;
      margin: 5px 10px;
    }
  }
  @media screen and (max-width: 500px) {
    .main-part-list {
      display: none;
    }
    .main-part-list-mobile {
      display: block !important;
    }
    .main-part-list-item {
      display: block !important;
    }
  }
   @media screen and (max-width: 380px) {
    .main-part-filter-item, .main-part-filter-item-sides {
      margin: 10px 5px;
    }
    .main-part-filter-item {
      padding: 5px 15px;
    }
   }
</style>
