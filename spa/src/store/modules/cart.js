export default {
	namespaced: true,
	state: {
		cartList: []
	},
	getters: {
		cartList(state) {
			return state.cartList
		}
	},
	mutations: {
		add(state, item) {
			if(state.cartList.indexOf(item) === -1) {
				state.cartList.push(item);
			}
		},
		remove(state, item) {
			if(state.cartList.indexOf(item) !== -1) {
				state.cartList.splice(state.cartList.indexOf(item), 1)
			}
		},
		cartClear(state) {
			state.cartList.splice(0, state.cartList.length);
		}
	},
	actions: {
		cartListAdd(state, item) {
			state.commit('add', item);
		},
		cartListRemove(state, item) {
			state.commit('remove', item);
		},
		cartClear(state) {
			state.commit('cartClear');
		}
	}
}