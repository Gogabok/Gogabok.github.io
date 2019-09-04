<template>
  <div id="main-app-2">
    <main-secondary-app-first-page></main-secondary-app-first-page>
  </div>
</template>

<script>

import headerApp from '../components/header.vue'
import mainSecondaryAppFirstPage from '../components/mainSecondaryAppFirstPage.vue'

export default {
  name: 'main-secondary-app',
  components: {
    headerApp, mainSecondaryAppFirstPage
  },
  data () {
  	return {
  		list: [
  			{
  				title: 'поесть',
  				image: require('../assets/1.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'красота',
  				image: require('../assets/2.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'обучение',
  				image: require('../assets/3.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'спорт',
  				image: require('../assets/4.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'медицина',
  				image: require('../assets/5.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'развлечение',
  				image: require('../assets/6.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'туризм',
  				image: require('../assets/7.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'услуги и товары',
  				image: require('../assets/8.png'),
  				border: '#60BB46',
          link: './poest'
  			},
  			{
  				title: 'свидание',
  				image: '',
  				border: '#F6BDBB'
  			},
  			{
  				title: 'вечеринка',
  				image: '',
  				border: '#F6BDBB'
  			},
  			{
  				title: 'доставка еды',
  				image: '',
  				border: '#F6BDBB'
  			},
  			{
  				title: 'с детьми',
  				image: '',
  				border: '#F6BDBB'
  			},
  			{
  				title: 'ланч',
  				image: '',
  				border: '#F6BDBB'
  			},
  			{
  				title: 'компания',
  				image: '',
  				border: '#F6BDBB'
  			},
  			{
  				title: 'кальян',
  				image: '',
  				border: '#F6BDBB'
  			},
  			{
  				title: 'банкетные залы',
  				image: '',
  				border: '#F6BDBB'
  			}

  		]
  	}
  }
}
</script>

<style scoped>
  #main-app-2 {
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
  .pages {
    display: flex;
    align-items: center;
    margin: 10px 0px;
    justify-content: center;
    width: 100%;
  }
  .pages-item {
    border:4px solid #A3CC4E;
    border-radius: 5px;
    margin: 0px 6px;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    font-weight: bold;
    background:#fff;
    padding: 10px 18px;
    text-align:center;
    color:#000;
    cursor: pointer;
    transition-duration: .3s;
  }
  .pages-item:hover {
    background:#A3CC4E;
    transition-duration: .3s;
  }
  .pages-item p {
    margin: 0;
  }
  .ad {
    width: 80%;
    height: 150px;
    background:#707070;
    margin: 10px auto 20px auto;
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
    .pages {
      display: none;
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
