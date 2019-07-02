export default {
	namespaced: true,
	state: {
		list: [
			{
				name: 'Продукты',
				url: '/products'
			},
			{
				name: 'Корзина',
				url: '/cart'
			},
			{
				name: 'Оплата',
				url: '/checkout'
			}
		],
	},
	getters: {
		list(state) {
			return state.list
		}
	}
}