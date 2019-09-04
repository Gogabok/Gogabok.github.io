<template>
  <div id="main-app">
    <div class="sidebar">
      <div class="sidebar-topFilter">
        <div class="sidebar-topFilter-input">
          <p class="sidebar-topFilter-input-title">Способ оплаты</p>
          <div class="select">
            <select class="sidebar-topFilter-input-select" name="">
              <option value="default" class="sidebar-topFilter-input-select-option-default" selected="">- Выбрать -</option>
              <option value="1" class="sidebar-topFilter-input-select-option"> 1 </option>
              <option value="2" class="sidebar-topFilter-input-select-option"> 2 </option>
              <option value="3" class="sidebar-topFilter-input-select-option"> 3 </option>
            </select>
          </div>
        </div>
        <div class="sidebar-topFilter-input">
          <p class="sidebar-topFilter-input-title">График</p>
          <div class="select">
            <select class="sidebar-topFilter-input-select" name="">
              <option value="default" class="sidebar-topFilter-input-select-option-default" selected="">- Выбрать -</option>
              <option value="1" class="sidebar-topFilter-input-select-option"> 1 </option>
              <option value="2" class="sidebar-topFilter-input-select-option"> 2 </option>
              <option value="3" class="sidebar-topFilter-input-select-option"> 3 </option>
            </select>
          </div>
        </div>
        <div class="sidebar-topFilter-filter">
          <span>-</span><input @input="filterResultValue($event.target)" class="sidebar-topFilter-filter-item" type="range" :value="filterResult" min="0" max="5000" step="1"/><span>+</span>
        </div>
        <div class="sidebar-topFilter-filter-result">
          <p class="sidebar-topFilter-filter-result-title">До {{ filterResult }} kzt</p>
        </div>
        <button class="filter-ok">Применить</button>
      </div>
      <div class="sidebar-list">
        <div class="sidebar-list-item sidebar-list-item-active">
          <p>Быстрое питание</p>
        </div>
        <div class="sidebar-list-item">
          <p>Доставка горячих блюд</p>
        </div>
        <div class="sidebar-list-item">
          <p>ДОСТАВКА СУШИ-ПИЦЦА</p>
        </div>
        <div class="sidebar-list-item">
          <p>ШАШЛЫЧНЫЕ</p>
        </div>
        <div class="sidebar-list-item">
          <p>Лагманные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Хинкальные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Пельменные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Блинные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Рыбные заведения</p>
        </div>
        <div class="sidebar-list-item">
          <p>Халяльные заведения</p>
        </div>
        <div class="sidebar-list-item">
          <p>Рестораны</p>
        </div>
        <div class="sidebar-list-item">
          <p>Столовые</p>
        </div>
        <div class="sidebar-list-item">
          <p>Доставка горячих блюд</p>
        </div>
        <div class="sidebar-list-item">
          <p>ДОСТАВКА СУШИ-ПИЦЦА</p>
        </div>
        <div class="sidebar-list-item">
          <p>ШАШЛЫЧНЫЕ</p>
        </div>
        <div class="sidebar-list-item">
          <p>Лагманные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Хинкальные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Пельменные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Блинные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Рыбные заведения</p>
        </div>
        <div class="sidebar-list-item">
          <p>Халяльные заведения</p>
        </div>
        <div class="sidebar-list-item">
          <p>Рестораны</p>
        </div>
        <div class="sidebar-list-item">
          <p>Столовые</p>
        </div>
        <div class="sidebar-list-item">
          <p>Доставка горячих блюд</p>
        </div>
        <div class="sidebar-list-item">
          <p>ДОСТАВКА СУШИ-ПИЦЦА</p>
        </div>
        <div class="sidebar-list-item">
          <p>ШАШЛЫЧНЫЕ</p>
        </div>
        <div class="sidebar-list-item">
          <p>Лагманные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Хинкальные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Пельменные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Блинные</p>
        </div>
        <div class="sidebar-list-item">
          <p>Рыбные заведения</p>
        </div>
        <div class="sidebar-list-item">
          <p>Халяльные заведения</p>
        </div>
        <div class="sidebar-list-item">
          <p>Рестораны</p>
        </div>
        <div class="sidebar-list-item">
          <p>Столовые</p>
        </div>
      </div>
    </div>
    <div class="list-mobile">
      <div class="list-mobile-mainTitle" @click="toggleFilter">
        <p class="list-mobile-mainTitle-p">Фильтрация</p>
        <transition name="slide-2" mode="out-in">
          <img v-if="!isFilterOpen" src="../assets/filters-open.png" alt="">
        </transition>
      </div>
      <transition name="slide-1" mode="out-in">
        <div v-show="isFilterOpen">
          <div class="list-mobile-item-border">
            <div class="list-mobile-title-container" @click="category">
              <p class="list-mobile-title">Выберите категорию</p>
              <transition name="slide" mode="out-in"><span :class="activeCategory ? 'list-mobile-title-span' : 'list-mobile-title-span-non'"></span></transition>
            </div>
            <transition name="slide" mode="out-in">
              <div class="category-animation" v-show="activeCategory">
                <div @click="listMethod(index)" :style="item.isActive ? 'background: #A3CC4E' : 'background: #fff'" class="list-item"v-for="(item, index) in list"><p>{{ item.title }}</p></div>
              </div>
            </transition>
          </div>
          <div class="list-mobile-item-border">
            <div class="list-mobile-title-container" @click="categoryMin">
              <p class="list-mobile-title">Выберите подкатегорию</p>
              <transition name="slide" mode="out-in"><span :class="activeCategoryMin ? 'list-mobile-title-span' : 'list-mobile-title-span-non'"></span></transition>
            </div>
            <transition name="slide" mode="out-in">
              <div class="category-animation" v-show="activeCategoryMin">
              <div class="sidebar-list">
                <div class="sidebar-list-item sidebar-list-item-active">
                  <p>Быстрое питание</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Доставка горячих блюд</p>
                </div>
                <div class="sidebar-list-item">
                  <p>ДОСТАВКА СУШИ-ПИЦЦА</p>
                </div>
                <div class="sidebar-list-item">
                  <p>ШАШЛЫЧНЫЕ</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Лагманные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Хинкальные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Пельменные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Блинные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Рыбные заведения</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Халяльные заведения</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Рестораны</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Столовые</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Доставка горячих блюд</p>
                </div>
                <div class="sidebar-list-item">
                  <p>ДОСТАВКА СУШИ-ПИЦЦА</p>
                </div>
                <div class="sidebar-list-item">
                  <p>ШАШЛЫЧНЫЕ</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Лагманные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Хинкальные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Пельменные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Блинные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Рыбные заведения</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Халяльные заведения</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Рестораны</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Столовые</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Доставка горячих блюд</p>
                </div>
                <div class="sidebar-list-item">
                  <p>ДОСТАВКА СУШИ-ПИЦЦА</p>
                </div>
                <div class="sidebar-list-item">
                  <p>ШАШЛЫЧНЫЕ</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Лагманные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Хинкальные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Пельменные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Блинные</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Рыбные заведения</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Халяльные заведения</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Рестораны</p>
                </div>
                <div class="sidebar-list-item">
                  <p>Столовые</p>
                </div>
              </div>
            </div>
          </transition>
        </div>

        <div class="list-mobile-item-border">
          <div class="list-mobile-title-container" @click="filters">
            <p class="list-mobile-title">Фильтры</p>
            <transition name="slide" mode="out-in"><span :class="activeFilter ? 'list-mobile-title-span' : 'list-mobile-title-span-non'"></span></transition>
          </div>
          <transition name="slide" mode="out-in">
              <div class="category-animation" v-show="activeFilter">
                <div class="sidebar-topFilter">
                    <div class="sidebar-topFilter-input">
                      <p class="sidebar-topFilter-input-title">Способ оплаты</p>
                      <div class="select">
                        <select class="sidebar-topFilter-input-select" name="">
                          <option value="default" class="sidebar-topFilter-input-select-option-default" selected="">- Выбрать -</option>
                          <option value="1" class="sidebar-topFilter-input-select-option"> 1 </option>
                          <option value="2" class="sidebar-topFilter-input-select-option"> 2 </option>
                          <option value="3" class="sidebar-topFilter-input-select-option"> 3 </option>
                        </select>
                      </div>
                    </div>
                    <div class="sidebar-topFilter-input">
                      <p class="sidebar-topFilter-input-title">График</p>
                      <div class="select">
                        <select class="sidebar-topFilter-input-select" name="">
                          <option value="default" class="sidebar-topFilter-input-select-option-default" selected="">- Выбрать -</option>
                          <option value="1" class="sidebar-topFilter-input-select-option"> 1 </option>
                          <option value="2" class="sidebar-topFilter-input-select-option"> 2 </option>
                          <option value="3" class="sidebar-topFilter-input-select-option"> 3 </option>
                        </select>
                      </div>
                    </div>
                    <div class="sidebar-topFilter-filter">
                      <span>-</span><input @input="filterResultValue($event.target)" class="sidebar-topFilter-filter-item" type="range" :value="filterResult" min="0" max="5000" step="1"/><span>+</span>
                    </div>
                    <div class="sidebar-topFilter-filter-result">
                      <p class="sidebar-topFilter-filter-result-title">До {{ filterResult }} kzt</p>
                    </div>
                    <button class="filter-ok">Применить</button>
                  </div>
                </div>
              </transition>
            </div>
            <div class="main-part-filter">
              <div class="main-part-filter-item">Все</div>
              <div class="main-part-filter-item">Акции</div>
              <div class="main-part-filter-item">Скидки</div>
              <div class="main-part-filter-item main-part-filter-item-active">Ценовое предложение</div>
              <div class="main-part-filter-item-sides">
              <div style="cursor: pointer" @click="mobileMethod($event.target)" id="pc" class="main-part-filter-item-side">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div style="cursor: pointer" @click="mobileMethod($event.target)" id="mobile" class="main-part-filter-item-side-2">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            </div>
          </div>
        </transition>
        <transition name="slide-2" mode="out-in">
          <img @click="toggleFilter" class="filter-open" v-if="isFilterOpen" src="../assets/filters-close.png" alt="">
        </transition>
    </div>
    <div class="main-part">
      <div class="main-part-filter main-part-filter-nonMobile">
        <div class="main-part-filter-item">Все</div>
        <div class="main-part-filter-item">Акции</div>
        <div class="main-part-filter-item">Скидки</div>
        <div class="main-part-filter-item">Ценовое предложение</div>
        <div class="main-part-filter-item-sides">
          <div style="cursor: pointer" @click="mobileMethod($event.target)" id="pc" class="main-part-filter-item-side">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div style="cursor: pointer" @click="mobileMethod($event.target)" id="mobile" class="main-part-filter-item-side-2">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <transition name="slide" mode="out-in">
      <div v-if="isMobileList === 'pc'" class="main-part-list" key="1">
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div @click="activePageMutation('mainPageService')" class="main-part-list-item">
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
      </div>
      <div v-if="isMobileList === 'mobile'" class="main-part-list-mobile" key="2">
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
      <div @click="activePageMutation('mainPageService')" class="main-part-list-item-mobile">
        <div class="main-part-list-item-logo-mobile">
          <img src="../assets/main-part-item-logo-mobile.png" alt="">
        </div>
        <div class="main-part-list-item-title-mobile">
          Название Название Название
        </div>
      </div>
    </div>
    </transition>
      <div class="pages">
        <div v-for="(item, index) in pages" class="pages-item">
          <router-link tag="p" :to="item.link">{{ item.content }}</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import headerApp from '../components/header.vue'

export default {
  name: 'main-page-poest-app',
  components: {
    headerApp
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
      ],
      isMobileList: 'pc'
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
    console.log(this.$store.getters.activeModal)
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
    activePageMutation (e) {
      // console.log(this.activeModal)
      // for (let i = 0; i < this.$store.getters.list.length; i++) {
      //   if (this.$store.getters.list[i].component == e) {
      //     this.$store.getters.list[i].isActive = true
          this.activeModal = e
          this.$store.commit('activeModal', e)
        // } else {
          
        //     this.$store.getters.list[i].isActive = false
        //   console.log(false)
        // }
      //}
    },
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
    },
    mobileMethod (e) {
      if (e.id) {
        if (e.id !== this.isMobileList) {
          this.isMobileList = e.id
        }
      } else if (e.parentElement.id) {
        if (e.parentElement.id !== this.isMobileList) {
          this.isMobileList = e.parentElement.id
        }
      }
    }
  }
}
</script>

<style scoped>
.main-part-list-item-logo-mobile {
  text-align: center;
}
.main-part-list-mobile {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 30px 0px;
    }
    .main-part-list-mobile {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 30px 0px;
    }
    .list {
      display: none;
    }
    .list-mobile {

      display: block;
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
  .main-part-list-mobile-2 {
    display: none;
  }
  #main-app {
    display: flex;
    align-items: flex-start;
  }
  .sidebar {
    width: 300px;
    margin-right: 10px;
  }
  .sidebar-topFilter {
    padding: 20px 5px;
  }
  .sidebar-topFilter-input {
    border-radius: 7px;
    padding: 0;
    display: flex;
    align-items: stretch;
    width: 100%;
    margin: 10px 0px;
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
    font-size: 14px;
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
        box-shadow: -165px 0 0 160px #A3CC4E;
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
    .sidebar-list {
      max-height: 60vh;
      overflow-y: scroll;
      border:1px solid #707070;
    }
    .sidebar-list-item {
      text-align: center;
      border-top:1px solid #707070;
      border-right:1px solid #707070;
      height: 70px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-right: 1px;
    }
    .sidebar-list-item:first-child {
      border-top:1px solid transparent;
    }
    .sidebar-list-item-active {
      border-left: 14px solid #A3CC4E;
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

    .sidebar-list::-webkit-scrollbar-button {
      background-image:url('');
      background-repeat:no-repeat;
      width:15px;
      height:0px
    }

    .sidebar-list::-webkit-scrollbar-track {
      background-color:#fff;
    }

    .sidebar-list::-webkit-scrollbar-thumb {
      border-radius: 12px;
      background:url("../assets/scrollbar.png") 50% 50% no-repeat;
    }

    .sidebar-list::-webkit-resizer{
      background-image:url('');
      background-repeat:no-repeat;
      width:14px;
      height:0px
    }

    .sidebar-list::-webkit-scrollbar{
      width: 24px;
      background:url("../assets/scrollbar.png");
      border-radius: 12px;
      content:'123';
    }
    .main-part {
      width: 100%;
    }
    .main-part-filter {
      display: flex;
      width: 100%;
      justify-content: flex-end;
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
      border:2px solid #A3CC4E;
    }
    .main-part-filter-item-active {
      background: #fff;
      border:2px solid #A3CC4E;
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
    .main-part-list {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: space-between;
    }
    .main-part-list-item {
      width: 220px;
      margin: 5px 10px;
      cursor: pointer;
    }
    .main-part-list-item-logo {
      width: 100%;
    }
    .main-part-list-item-logo img {
      width: 100%;
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
    .list-mobile {
      display: none
    }
    @media screen and (max-width: 1260px) {
      .sidebar-topFilter-input-select {
        height: 100%;
      }
    }
    @media screen and (max-width: 980px) {
      .sidebar {
        display: none;
      }
      .main-part-list {
        display: flex;
      }
      /*.main-part {
        display: none;
      }*/
      .main-part-filter-nonMobile {
        display: none !important;
      }

    }
  #main-app {
    width: 100%;
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
  .viewer {
    width: 100%;
    background:#fff;
  }
  @media screen and (max-width: 980px) {
    .sidebar-list {
      border:none;
      padding: 10px;
    }
    .main-part-list {
      margin: 30px 0px;
    }
    .category-animation {
      padding: 10px;
    }
    #main-app {
      display: block;
    }
    .main-part-list-mobile {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 30px 0px;
    }
    .main-part-list-mobile {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 30px 0px;
    }
    .list {
      display: none;
    }
    .list-mobile {

      display: block;
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
      width: 200px;
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
      width: 200px;
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

    }

  }
   @media screen and (max-width: 440px) {
    .main-part-filter-item, .main-part-filter-item-sides {
      margin: 10px 5px;
    }
    .main-part-filter-item {
      padding: 5px 15px;
    }
    .pages-item {
      margin: 10px 10px;
      padding: 5px 9px;
    }
   }

   .main-part-list-mobile {
      display: block !important;
      padding: 10px;
    }
    .main-part-list-item-mobile {
      display: block !important;
      cursor: pointer;
    }
    .main-part-list-item-mobile {
      width: 100%;
      display: flex !important;
      margin: 15px 0px;
      border:3px solid #6DC055 ;
      border-radius: 6px;
    }
    .main-part-list-item-title-mobile {
      border:none;
      border-left:3px solid #6DC055 ;
      margin: 0;
      border-radius: 0px;
    }
    .main-part-list-item-logo-mobile {
      width: 40%;
    }
</style>
