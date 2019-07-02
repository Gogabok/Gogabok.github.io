<template>
    <div class="products">
    	<h1>Корзина</h1>
    	<hr>
    	<div>
	    	<div v-if="cartList.length > 0">
		    	<h2>Вы заказали:</h2>
		    	<hr>
		    	<table class="table table-bordered">
		    		<tbody>
		    			<tr>
		    				<td>
		    					Модель:
		    				</td>
		    				<td>
		    					Цена:
		    				</td>
		    				<td>
		    					Убрать из корзины
		    				</td>
		    			</tr>
		    			<tr class="table-tr" v-for='item in cartList'>
		    				<td>
		    					{{ item.name }}
		    				</td>
		    				<td>
		    					{{ item.value }}
		    				</td>
		    				<td class="td-btn">
		    					<button @click="cartListRemove(item)" class="btn btn-warning">Удалить из корзины</button>
		    				</td>
		    			</tr>
		    			<tr>
		    				<td>
		    					
		    				</td>
		    				<td>
		    					
		    				</td>
		    				<td class="td-btn">
		    					<button @click="cartClear" class="btn btn-warning">Очистить корзину</button>
		    				</td>
		    			</tr>
		    		</tbody>
		    	</table>
		    	<router-link to="./checkout"
		    				 tag="button"
		    				 class="btn btn-primary">
	        		Перейти к оплате
	        	</router-link>
		    </div>
		    <div v-else>
		    	<div class="alert alert-warning">
					Ваша корзина пуста!    
				</div>
		    </div>
		</div>
    </div>
</template>






<script>
import {mapGetters} from 'vuex';
import {mapActions} from 'vuex';

export default {
  name: 'cart',
  computed: {
     ...mapGetters('products', {
        productsList: 'list'
      }),
     ...mapGetters('cart', {
        cartList: 'cartList'
      }),
  },
  methods: {
  	...mapActions('cart', {
  		cartListRemove: 'cartListRemove',
		cartClear: 'cartClear'
	})
  }

}

</script>







<style scoped>
  .products {
    border-left: 1px solid #ccc;
    padding: 10px 0px 0px 30px;
    width: 100%;
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
</style>