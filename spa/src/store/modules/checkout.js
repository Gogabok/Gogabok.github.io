export default {
	namespaced: true,
	state: {
		info: [
				{
					name: 'Имя',
					value: '',
					pattern: /^[a-zA-Z ]{2,30}$/,
					valid: ''
				},
				{
					name: 'Телефон',
					value: '',
					pattern: /^[0-9]{7,14}$/,
					valid: ''
				},
				{
					name: 'E-mail',
					value: '',
					pattern: /.+@.+/,
					valid: ''
				}
			],
			controls: [],
			done: 0,
			submited: false
	},
	getters: {
		info(state) {
			return state.info
		},
		controls(state) {
			return state.controls
		},
		done(state) {
			return state.done
		},
		submited(state) {
			return state.submited
		}
	},
	mutations: {
		validClass(state, index){
			let item = state.info[index]
			item.valid = item.pattern.test(item.value)
		},
		progress(state, index) {
			state.controls[index] = state.info[index].valid;
			let plus = 0;
			for(let i = 0; i < state.controls.length; i++){
				if(state.controls[i]){
					plus++
				}
			}
			state.done = plus
		},
		submitted(state) {
			state.submited = !state.submited
		}
	},
	actions: {
		checkin(state, index){
			state.commit('validClass', index);
			state.commit('progress', index);
		},
		submitted(state) {
			state.commit('submitted')
		}
	}
}