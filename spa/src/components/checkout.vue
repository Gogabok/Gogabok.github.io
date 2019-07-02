<template>
    <div class="checkout">
    	<h1>Оплата</h1>
    	<hr>
    <div v-if="!submited">
    	<div class="width" v-if="cartList.length > 0">
	    	<form>
        		<div class="progress">
					<div class="progress-bar" :style="progressWidth"></div>
				</div>
				<div v-for="(item, index) in info">
					<div class="form-group">
	                    <label> {{ item.name }} </label>
		                <span class="fa" :class="onInput(item)"></span>
	                    <input type="text"
	                    	   class="form-control"
	                    	   v-model:value="item.value"
	                    	   @input="checkin(index)"					   
	                    	   >
                	</div>
				</div>
				<button :disabled="done < info.length" @click="submitted" type="button" class="btn btn-primary">
					Отправить заявку
				</button>
			</form>
	    </div>
	    <div v-else>
	    	<div class="alert alert-warning">
				Ваша корзина пуста!    
			</div>
	    </div>
	</div>
	<div v-else>
		<h4>Пожалуйста, проверьте корректность заполненных вами данных: </h4>
		<hr>
		<table class="table table-bordered width">
			<tbody>
				<tr v-for="(item, index) in  info">
					<td>{{ item.name }}</td>
					<td>{{ item.value }}</td>
				</tr>
			</tbody>
		</table>
		<router-link to="./submited"
                     tag="button"
                     class="btn btn-primary">
            Отправить заявку
        </router-link>
	</div>
    </div>
</template>






<script>
import {mapGetters} from 'vuex';
import {mapActions} from 'vuex';

export default {
  name: 'checkout',
  computed: {
     ...mapGetters('checkout', {
        info: 'info',
        controls: 'controls',
        done: 'done',
        submited: 'submited'
      }),
     ...mapGetters('cart', {
        cartList: 'cartList'
      }),
     progressWidth(){
		return {
			width: (this.done / this.info.length * 100) + '%'
			}
		}
  },
  methods: {
  	...mapActions('checkout', {
  		isValid: 'isValid',
  		checkin: 'checkin',
  		submitted: 'submitted'
	}),
	onInput(item) {
		if(item.valid === '') {
			return ''
		} else if (item.valid) {
			return 'fa-check-circle text-success'
		} else if (!item.valid) {
			return 'fa-exclamation-circle text-danger'
		}
	}
  },
	created(){
		for(let i = 0; i < this.info.length; i++){
			this.controls.push(false);
		}
	},
}

</script>







<style scoped>
  .checkout {
    border-left: 1px solid #ccc;
    padding: 10px 0px 0px 30px;
    width: 100%;
  }
  .width {
    width: 50%;
  }
  .products-list {
  	display: flex;
  	justify-content: space-between;
  }
  .product-item {
  	width: 250px;
  	border:1 solid #ccc;
  	margin: 10px;
  	padding: 5px;
  	text-align: center;
  }
  .td-btn {
  	width: 190px
  }
  .td-btn button {
  	width: 180px;
  }
  .opacity-td {
  	opacity: 0;
  }
  .form-group .fa {
  	margin-left: 5px;
  }
</style>