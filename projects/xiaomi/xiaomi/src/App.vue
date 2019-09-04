<template>
  <div id="app">
    <div class="container">
      <div class="row row-tab">
        <p class="head-caption cap-2 head-text">Длина/Ширина. Высота&nbsp30&nbspмм</p>
        <div class="table col-lg-7 col-md-12 col-sm-12 col-12 p-0">
          <div class="head">
            <div class="head-sec head-sec-1 col-lg-4 col-md-3 col-sm-4 col-2 p-0">
              <p class="head-caption cap-1 head-text">Длина/Ширина<br/>Высота 30 мм</p>
              <p class="head-text">600</p>
              <p class="head-text">700</p>
              <p class="head-text">800</p>
            </div>

            <div class="head-sec col-lg-8 col-md-9 col-sm-8 col-10 p-0">
              <div class="head-sec-2">
                <p class="head-text-2 col-lg-2 col-md-2 col-sm-2 col-2 p-0">1200</p>
                <p class="head-text-2 col-lg-2 col-md-2 col-sm-2 col-2 p-0">1400</p>
                <p class="head-text-2 col-lg-2 col-md-2 col-sm-2 col-2 p-0">1600</p>
                <p class="head-text-2 col-lg-2 col-md-2 col-sm-2 col-2 p-0">1800</p>
                <p class="head-text-2 col-lg-2 col-md-2 col-sm-2 col-2 p-0">2000</p>
              </div>
               <div class="table-v col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                <p @click="addCart(item)" v-for="(item, index) in items" v-if="item.block === 'main'" class="table-v-item col-lg-2 col-md-2 col-sm-2 col-2 p-0" :style="item.isActive ? 'color: #47AFE6' : false">
                  {{ item.value }}
                </p>
               </div>
            </div>
          </div>
        </div>
        <div class="color-table col-lg-4 col-md-12 col-12 p-0">
          <div>
            <div class="head-list head-list-mb col-lg-12 col-md-12 p-0">
              <p class="head-list-text">Краска</p>
              <p @click="addCart(item)" class="head-list-text-2 ml pointer" :style="item.isActive ? 'textDecoration: underline' : false" v-for="item in items" v-if="item.block === 'color'">{{ item.title }}</p>
                
            </div>
            <div @click="addCart(item)" v-for="(item, i) in items" v-if="item.block === 'gadjets'" class="head-list pointer head-list-mt col-lg-12 p-0">
              <p class="head-list-text-2 head-list-text-2-extra head-list-text-hover" :style="item.isActive ? 'color: #47AFE6' : false">{{ item.name }}</p>
              <p class="head-list-text-2 mm ml">{{ item.value }}</p>
            </div>
            <div class="head-list col-lg-12 p-0">
              <p class="head-list-text-2">Стоимость: {{ amount }} руб</p>
            </div>
            <div class="jusflex">
              <div class="head-list p-0">
                <p class="head-list-oplata">Оплата при получении</p>
              </div>
              <div class="head-list p-0">
                <p class="head-list-oplata head-list-oplata-2">Товаров: {{ count }}</p>
              </div>
            </div>
            <transition name="fade">
              <div v-if="count > 0" class="head-list-table col-lg-9">
                  <div v-if="item.numb > 0" class="item" v-for="(item, index) in inCart" :key="index">
                    <p class="table-text-black mr-auto">{{ item.name }}</p>
                    <p class="table-price" v-if="item.block !== 'color'">{{ item.value }}</p>
                    <p class="table-price-x" v-if="item.block !== 'color'">x</p>
                    <input v-model:value="item.numb" class="input-price" @input="proverka($event.target, item)" maxlength="2" type="number" v-if="item.block !== 'color'">
                    <img class="pointer" src="assets/cancel-music.png" alt="" @click.prevent="remove(item)">
                  </div>
                <button class="btn btn-primary" @click.prevent="Submit" type="button">Заказать {{ amount }} руб</button>
              </div>
            </transition>
          </div>
        </div>
      </div>
    </div>
    <transition name="fade">
      <div id="zatemnenie" v-if="isSubmitted">
        <div class="modale col-lg-4 col-md-6 col-sm-8 col-10">
          <img @click.prevent="Submit" class="pointer" src="assets/cancel-music.png" alt="">
            <form method="post" action="send.php" @submit="send">
              <div class="form-group" v-for="item in form">
                <label for="formGroupExampleInput">{{ item.title }}</label>
                <input @input="item.isActive = true" type="text" class="form-control" id="formGroupExampleInput" :name="item.name" v-model:value="item.value" :placeholder="item.ph">
              </div>
              <input type="hidden" class="form-control" id="formGroupExampleInput" name="value" v-model:value="valueArr">
              <button :disabled="isFull" class="btn btn-primary" type="submit">Оставить заявку</button>
            </form>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>

import {mapGetters} from 'vuex'

export default {
  name: 'app',
  data() {
    return {
      isSubmitted: false,
      valueArr: [],
      form: [
        {
          title: 'Имя',
          name: 'name',
          ph: 'Введите ваше имя',
          value: '',
          isActive: false
        },
        {
          title: 'Телефон',
          name: 'phone',
          ph: 'Введите ваш телефон',
          value: '',
          isActive: false
        },
        {
          title: 'Адрес',
          name: 'adress',
          ph: 'Введите ваш адрес',
          value: '',
          isActive: false
        }
      ]
    }
  },
  computed: {
    ...mapGetters({
       items: 'items',
       count: 'count',
       inCart: 'inCart',
       amount: 'amount'
      }),
    isFull() {
      let plus = 0;
      for(let i = 0; i < this.form.length; i++) {
        if(this.form[i].isActive) {
          plus++
        }
      }
      if(plus > 2) {
        let result = false
        return result
      } else {
        let result = true
        return result
      }
    }
  },
  components: {
    
  },
  methods: {
    proverka(input, item) {
      let ch = input.value.replace(/[^\d,]/g, '');
      let pos = ch.indexOf(',');
      if(pos != -1){
          if((ch.length-pos)>2){
              ch = ch.slice(0, -1);
          }
      }
      input.value = ch;
      this.$store.commit('updating', item)
    },
    addCart(item) {
      this.$store.dispatch('addCart', item)
    },
    remove(item) {
      this.$store.dispatch('remove', item)
    },
    Submit() {
      this.isSubmitted = !this.isSubmitted
    },
    send() {
      let array = []
      for(let i = 0; i < this.form.length; i++) {
        array.push(' | ' + this.form[i].title + ': ' + this.form[i].value + ' | ')
      }
      array.push('/Стоимость: ' + this.amount + ' /')
      for(let i = 0; i < this.inCart.length; i++) {
        let mess = '| Товар: ' + this.inCart[i].name + ' ' + 'Количество: ' + this.inCart[i].numb + ' | '
        mess.toString(16)
        array.push(mess)
      }

      this.valueArr = array
    }
  }
}

</script>

<style>

</style>
