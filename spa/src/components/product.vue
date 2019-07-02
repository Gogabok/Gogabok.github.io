<template>
    <div class="product">
    	<h1>{{ list[ id - 1 ].name }}</h1>
    	<hr>
      <p>{{ list[ id - 1 ].desc }}</p>
    	<hr>
      <div class="buttons">
        <button v-if="cartList.indexOf(list[ id - 1 ]) === -1" @click="cartListAdd(list[ id - 1 ])" class="btn btn-success">Добавить в корзину</button>
        <button v-else @click="cartListRemove(list[ id - 1 ])" class="btn btn-warning">Удалить из корзины</button>
      </div>
    </div>
</template>






<script>
import {mapGetters} from 'vuex';
import {mapActions} from 'vuex';

export default {
  name: 'product',
  computed: {
    ...mapGetters('products', {
      list: 'list'
    }),
    ...mapGetters('cart', {
        cartList: 'cartList'
      }),
    id() {
      return this.$route.params.id
    }
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
  .product {
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