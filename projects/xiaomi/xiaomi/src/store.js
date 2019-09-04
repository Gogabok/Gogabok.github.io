import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
  	items: [
  		{
  			value: 23000,
  			isActive: false,
  			name: '1200x600x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 23750,
  			isActive: false,
  			name: '1400x600x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 24500,
  			isActive: false,
  			name: '1600x600x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 25250,
  			isActive: false,
  			name: '1700x600x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 26000,
  			isActive: false,
  			name: '2000x600x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 24000,
  			isActive: false,
  			name: '1200x700x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 24750,
  			isActive: false,
  			name: '1400x700x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 25500,
  			isActive: false,
  			name: '1600x700x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 26250,
  			isActive: false,
  			name: '1800x700x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 27000,
  			isActive: false,
  			name: '2000x700x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 25000,
  			isActive: false,
  			name: '1200x800x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 25750,
  			isActive: false,
  			name: '1400x800x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 26500,
  			isActive: false,
  			name: '1600x800x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 27250,
  			isActive: false,
  			name: '1800x800x30',
          	block: 'main',
          	numb: 1
  		},
  		{
  			value: 28000,
  			isActive: false,
  			name: '2000x800x30',
          	block: 'main',
          	numb: 1
  		},
  		{
          name: 'Беспроводная зарядка',
          value: 1500,
          isActive: false,
          block: 'gadjets',
          numb: 1
        },
        {
          name: 'Xiaomi mi power strip',
          value: 1200,
          isActive: false,
          block: 'gadjets',
          numb: 1
        },
        {
          title: 'Черная',
          name: 'Черная краска',
          value: 0,
          isActive: false,
          block: 'color',
          numb: 1
        },
        {
          title: 'Хром',
          name: 'Хром-краска',
          value: 0,
          isActive: false,
          block: 'color',
          numb: 1
        }
  	],
  	count: 0,
  	inCart: [],
  	amount: 0,
  	isPicked: false
  },
  getters: {
  	items(state) {
  		return state.items
  	},
  	count(state) {
  		return state.count
  	},
  	inCart(state) {
  		return state.inCart
  	},
  	amount(state) {
  		return state.amount
  	},
  	color(state) {
  		return state.color
  	},
  	isPicked(state) {
  		return state.isPicked
  	}
  },
  mutations: {
  	addCart(state, item) {
  		if(item.numb < 1) {
  			item.numb = 1
  		}
  		item.isActive = !item.isActive
  	},
  	updating(state, item) {
  		let count = 0
  		let array = []
  		let amount = 0
  		if(item.numb < 1) {
  			item.isActive = false
  		}
  		for(let i = 0; i < state.items.length; i++) {
  			let itemAmount = 0
  			if(state.items[i].isActive) {
  				count++
  				array.push(state.items[i])
  				itemAmount = parseInt(state.items[i].value * item.numb)
  				amount += itemAmount
  			} else {
  				array.splice(i, 1)
  			}
  			
  		}
  	
  		state.amount = amount
  		state.inCart = array
  		state.count = count
  	},
  	remove(state, item) {
  		item.isActive = !item.isActive
  	}
  },
  actions: {
  	addCart(store, item) {
  		store.commit('addCart', item)
  		store.commit('updating', item)
  	},
  	remove(store, item) {
  		store.commit('remove', item)
  		store.commit('updating', item)
  	},
  }
})
