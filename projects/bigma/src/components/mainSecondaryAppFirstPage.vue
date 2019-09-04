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
        <div class="pages">
          <div v-for="(item, index) in pages" class="pages-item">
            <router-link tag="p" :to="item.link">{{ item.content }}</router-link>
          </div>
        </div>
        <div class="ad">

        </div>
  </div>
</template>

<script>

export default {
  name: 'main-app',
  components: {

  },
  data () {
  	return {
      pages: [
        {
          content: '<',
          link: ''
        },
        {
          content: '1',
          link: ''
        },
        {
          content: '2',
          link: ''
        },
        {
          content: '3',
          link: ''
        },
        {
          content: '4',
          link: ''
        },
        {
          content: '>',
          link: ''
        }
      ],
  		list: [
  			{
  				title: 'фотограф',
  				image: require('../assets/6.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'дизайнер',
  				image: require('../assets/5.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'юрист',
  				image: require('../assets/3.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'бухгалтер',
  				image: require('../assets/8.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'It-специалист',
  				image: require('../assets/2.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'переводчик',
  				image: require('../assets/7.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'визажист',
  				image: require('../assets/1.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'массажист',
  				image: require('../assets/4.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'инструктор',
  				image: require('../assets/4.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'архитектор',
  				image: require('../assets/3.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'педагог',
  				image: require('../assets/6.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			},
  			{
  				title: 'повар',
  				image: require('../assets/7.png'),
  				border: '#60BB46',
          link: 'main-page-category'
  			}
  		]
  	}
  }
}
</script>

<style scoped>
  .container-app {
    background:rgba(0,0,0, 0.5);
    height: 200%;
  }
  .list-items {
    margin: 10px 0px;
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

    .container-app {
     height: 100%;
    }
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
