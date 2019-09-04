import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
  	list: [
      {
        title: 'Поесть',
        component: 'mainPagePoest',
        isActive: false
      },
      {
        title: 'Красота',
        component: 'mainPagePoest',
        isActive: false
      },
      {
        title: 'Обучение',
        component: 'mainPagePoest',
        isActive: false
      },
      {
        title: 'Спорт',
        component: 'mainPagePoest',
        isActive: false
      },
      {
        title: 'Медицина',
        component: 'mainPagePoest',
        isActive: false
      },
      {
        title: 'Развлечение',
        component: 'mainPagePoest',
        isActive: false
      },
      {
        title: 'Туризм',
        component: 'mainPagePoest',
        isActive: false
      },
      {
        title: 'Услуги и товары',
        component: 'mainPageCategories',
        isActive: false
      }
    ],
    activeModal: null,
    inCart: [],
    isMenuVissible: false
  },
  getters: {
  	list (state) {
  		return state.list
  	},
  	activeModal (state) {
  		return state.activeModal
  	},
  	inCart (state) {
  		return state.inCart
  	},
  	isMenuVissible (state) {
  		return state.isMenuVissible
  	}
  },
  mutations: {
  	activeModal (state, payload) {
  		state.activeModal = payload
  	},
  	addInCart (state, payload) {
      if(state.inCart.length < 1) {
        state.inCart.push(payload)
      } else {
        for (let i = 0; i < state.inCart.length; i++) {
          if (state.inCart[i].title === payload.title) {
            return false
          }
        }
        state.inCart.push(payload)
      }	
  	},
  	deleteInCart (state, payload) {
  		state.inCart.splice(payload, 1)
  	},
  	activateMenu (state) {
  		this.state.isMenuVissible = !this.state.isMenuVissible
  	}
  },
  actions: {

  }
})
