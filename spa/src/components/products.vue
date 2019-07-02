<template>
    <div class="products">
    	<h1>Продукты</h1>
    	<hr>
    	<div class="products-list">
    		<div class="product-item" v-for="(item, index) in productsList">
    			<router-link tag='h2' :to="'/products/' + item.id">
    				<a>{{ item.name }}</a>
    			</router-link>
    			<h3>{{ item.value }}</h3>
    			<div class="buttons">
	    			<button v-if="cartList.indexOf(item) === -1" @click="cartListAdd(item)" class="btn btn-success">Добавить в корзину</button>
	    			<button v-else @click="cartListRemove(item)" class="btn btn-warning">Удалить из корзины</button>
	    		</div>
    		</div>
    	</div>
    </div>
</template>






<script>
import {mapGetters} from 'vuex';
import {mapActions} from 'vuex';

export default {
  name: 'products',
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
		cartListAdd: 'cartListAdd',
		cartListRemove: 'cartListRemove'
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
  .buttons button {
	display: block;
	margin: 5px auto;
	width: 180px
  }
  .buttons {
	margin-top: 40px;
  }
</style>
