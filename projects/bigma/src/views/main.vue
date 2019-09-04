<template>
  <div id="main-app">
    		<div class="list-items col-lg-12">
    			<router-link tag="div" :to="item.link" v-for="item in list" class="list-item p-0 col-lg-3 col-md-3 col-sm-3 col-3">
    				<img class="list-item-image" v-if="item.image" :style="'border-color:' + item.border + ';'" :src="item.image" alt="">
    				<div class="list-item-image-2" v-else :style="'border-color:' + item.border + '; background:#fff; width:50px; height:50px;'" alt=""></div>
    				<br/>
    				<p class="list-item-title">{{ item.title }}</p>
    			</router-link>
    </div>
  </div>
</template>

<script>

import headerApp from '../components/header.vue'




export default {
  name: 'main-app',
  components: {
	headerApp
  },
  data () {
  	return {
  		list: [
  			{
  				title: 'поесть',
  				image: require('../assets/1.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'красота',
  				image: require('../assets/2.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'обучение',
  				image: require('../assets/3.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'спорт',
  				image: require('../assets/4.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'медицина',
  				image: require('../assets/5.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'развлечение',
  				image: require('../assets/6.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'туризм',
  				image: require('../assets/7.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'услуги и товары',
  				image: require('../assets/8.png'),
  				border: '#60BB46',
  				link: '/main-page'
  			},
  			{
  				title: 'свидание',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			},
  			{
  				title: 'вечеринка',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			},
  			{
  				title: 'доставка еды',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			},
  			{
  				title: 'с детьми',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			},
  			{
  				title: 'ланч',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			},
  			{
  				title: 'компания',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			},
  			{
  				title: 'кальян',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			},
  			{
  				title: 'банкетные залы',
  				image: '',
  				border: '#F6BDBB',
  				link: '/main-page'
  			}

  		]
  	}
  }
}
</script>

<style scoped>
  #main-app {
    background: rgba(0,0,0, 0.5);
  }
	.list-items {
		margin: 30px 0px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.list-item {
		text-align: center;
		margin: 12px 0px;
		cursor: pointer;
	}
	.list-item-image {
		background:#fff;
		border-radius: 50%;
		border:10px solid;
		padding: 18px;
		margin-bottom: 20px;
	}
	.list-item-image-2 {
		margin: 0 auto;
		background:#fff;
		border-radius: 50%;
		border:10px solid;
		padding: 53.5px;
	}
	.list-item-title {
		text-align: center;
		padding: 2px 30px;
		border-radius: 15px;
		border:5px solid #60BB46;
		background:#fff;
		display: inline;
		font-family: 'PT Sans', sans-serif;
		color:#707070;
		font-weight: bold;
		font-size: 20px;
		text-transform: uppercase;
	}
	@media screen and (max-width: 1100px) {
		.list-item-title {
			border:none;
			background:transparent;
			padding: 0;
		}
	}
	@media screen and (max-width: 900px) {
		.list-item-image {
			background:#fff;
			border-radius: 50%;
			border:5px solid;
			padding: 18px;
			margin-bottom: 20px;
		}
		.list-item-image {
			width: 100px;
		}
		.list-item-image-2 {
			margin: 0 auto;
			background:#fff;
			border-radius: 50%;
			border:5px solid;
			padding: 43.5px;
		}
	}
	@media screen and (max-width: 900px) {
		.list-items {
			padding: 30px 0px;
		}
	}
	@media screen and (max-width: 600px) {
		.list-items {
			padding: 0px 20px;
		}
	}
  @media screen and (max-width: 576px) {
    .list-item-image {
      background:#fff;
      border-radius: 50%;
      border:3px solid;
      padding: 10px;
      margin-bottom: 10px;
    }
    .list-item-image {
      width: 60px;
    }
    .list-item-image-2 {
      margin: 0 auto;
      background:#fff;
      border-radius: 50%;
      border:3px solid;
      padding: 25px;
      margin-bottom: -10px;
    }
    .list-item-title {
      font-size: 12px;
    }
  }
</style>
