<template>
  <div id="main-app">
    <div class="main-app-pages-title">
      <p class="main-app-pages-title-item" id="profile" @click="activePageMethod($event.target)" :class="activePage === 'profile' ? 'main-app-pages-title-item-active' : ''">ПРОФИЛЬ</p>
      <p class="main-app-pages-title-item" id="proposal" @click="activePageMethod($event.target)" :class="activePage === 'proposal' ? 'main-app-pages-title-item-active' : ''">МОИ ПРЕДЛОЖЕНИЯ</p>
      <p class="main-app-pages-title-item" id="statistic" @click="activePageMethod($event.target)" :class="activePage === 'statistic' ? 'main-app-pages-title-item-active' : ''">СТАТИСТИКА</p>
      <p class="main-app-pages-title-item" id="ad" @click="activePageMethod($event.target)" :class="activePage === 'ad' ? 'main-app-pages-title-item-active' : ''">РЕКЛАМА</p>
    </div>
    <div v-if="activePage === 'profile'">
      <div class="main-container">
        <form class="login-content-form">
          <label class="login-content-form-item" for="ur">
            <p class="login-content-form-item-title">Юридическое название организации</p>
            <div class="login-content-form-item-div">
              <input class="login-content-form-item-input" id="ur" type="text" required="">
              <a href="#" class="login-content-form-item-title-add">изменить</a>
            </div>
          </label>
          <label class="login-content-form-item" for="torg">
            <p class="login-content-form-item-title">Торговое название организации</p>
            <div class="login-content-form-item-div">
              <input class="login-content-form-item-input" id="torg" type="text" required="">
              <a href="#" class="login-content-form-item-title-add">изменить</a>
            </div>
          </label>
          <label class="login-content-form-item" for="rnn">
            <p class="login-content-form-item-title">РНН</p>
            <div class="login-content-form-item-div">
              <input class="login-content-form-item-input" id="rnn" type="text" required="">
              <a href="#" class="login-content-form-item-title-add">изменить</a>
            </div>
          </label>
          <label class="login-content-form-item" for="bin">
            <p class="login-content-form-item-title">БИН</p>
            <div class="login-content-form-item-div">
              <input class="login-content-form-item-input" id="bin" type="text" required="">
              <a href="#" class="login-content-form-item-title-add">изменить</a>
            </div>
          </label>
          <p class="login-content-form-item-title login-content-form-item-title-spec">Контактное лицо</p>
          <p @click="addContant" class="login-content-form-item-title-add login-content-form-item-title-add-phone">Добавить телефон</p>

          <input v-for="(item, index) in contacts" class="login-content-form-item-input mt-inputs" :id="index" type="text" required="">
        </form>
        <div class="app-rightside">
          <label class="login-content-form-item" for="ofsite">
            <p class="login-content-form-item-title">Официальный сайт</p>
            <div class="login-content-form-item-div">
              <input class="login-content-form-item-input" id="ofsite" type="text" required="">
              <a href="#" class="login-content-form-item-title-add">изменить</a>
            </div>
          </label>
          <label class="login-content-form-item" for="email">
            <p class="login-content-form-item-title">e-mail</p>
            <div class="login-content-form-item-div">
              <input class="login-content-form-item-input" id="email" type="text" required="">
              <a href="#" class="login-content-form-item-title-add">изменить</a>
            </div>
          </label>
          <label class="login-content-form-item" for="about">
            <p class="login-content-form-item-title">О компании ( до 300 символов )</p>
            <textarea class="login-content-form-item-input" id="about" type="text" required=""></textarea>
          </label>
          <label class="login-content-form-item" for="pass-1">
            <p class="login-content-form-item-title">Изменить пароль</p>
            <div class="login-content-form-item-div login-content-form-item-div-spec">
              <input class="login-content-form-item-input" id="pass-1" type="text" required="">
            </div>
          </label>
          <label class="login-content-form-item" for="pass-2">
            <p class="login-content-form-item-title">Подтвердить пароль</p>
            <div class="login-content-form-item-div login-content-form-item-div-spec">
              <input class="login-content-form-item-input" id="pass-2" type="text" required="">
            </div>
          </label>
          <div class="logo">
            <div class="login-content-logo">
              <input type="file" onchange="readURL(this);">
              <img id="blah" src="http://placehold.it/180" alt="">
            </div>
            <div class="logo-text">
              <a href="#" class="login-content-form-item-title-add">Изменить логотип</a>
              <p>( jpeg, png )</p>
            </div>
          </div>
        </div>
      </div>
      <button class="modale-wrong-btn">Отправить заявку</button>
      <p class="form-error">* возможно вы что-то неправильно заполнили или пропустили</p>
      <p class="form-message">Нажимая кнопку "ОТПРАВИТЬ ЗАЯВКУ", я даю ___ "БИГМА" согласие
      на обработку персональных данных на условиях и в целях, определнных
      "Политикой конфиденциальности" <router-link tag="a" to="/text">ссылка</router-link></p>
      <p class="form-success">Ваша заявка успешно отправлена и будет рассматриваться
        у модератора от 1 часа до 3 рабочих дней!
      </p>
    </div>
    <div v-else-if="activePage === 'proposal'">
      <div class="main-container">
        <div class="main-container-side">
          <router-link tag="div" to="/edit" class="main-container-side-item">Добавить новое предложение</router-link>
          <router-link tag="div" to="/archive" class="main-container-side-item">Архив</router-link>
        </div>
        <div class="main-part-list">
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="main-part-list-item">
          <div class="main-part-list-item-list">
            <img class="main-part-list-item-close" src="../assets/xerox-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/pen-favourites.png" alt="">
            <img class="main-part-list-item-close" src="../assets/close-favourites.png" alt="">
          </div>
          <div class="main-part-list-item-logo">
            <img src="../assets/main-part-item-logo.png" alt="">
          </div>
          <div class="main-part-list-item-title">
            Название Название Название
          </div>
        </div>
        <div class="pages">
          <div v-for="(item, index) in pages" class="pages-item">
            <router-link tag="p" :to="item.link">{{ item.content }}</router-link>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div v-else-if="activePage === 'statistic'">
      <div class="main-container main-container-statistic">
        <p class="main-container-statistic-title">
          Скидка "Всё включено"
        </p>
        <p class="main-container-statistic-text">Нет новых просмотров, 138 за все время</p>
        <div class="canvas-graph">
          <canvas id="myChart" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
    <div v-else-if="activePage === 'ad'">
      <div class="main-container-2">
        <div class="ad-quest">
          <div class="ad-quest-item" @click="activeContentMethod($event.target)" id="packs" :class="activeContent === 'packs' ? 'ad-quest-item-active' : ''">
            Пакеты
          </div>
          <div class="ad-quest-item" @click="activeContentMethod($event.target)" id="banners" :class="activeContent === 'banners' ? 'ad-quest-item-active' : ''">
            Банера
          </div>
        </div>

        <div v-if="activeContent === 'packs'">
          <div class="main-app-list">
            <div class="main-app-list-item">
              <div class="main-app-list-item-title">Бронза</div>
              <div class="main-app-list-item-price">$ 9.95</div>
              <div class="main-app-list-item-price-pluses">
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
              </div>
              <input class="modale-wrong-input" @input="package($event.target, 0)" v-model:value="packageTitle[0].amount" type="number">
              <button @click="addInCart2(0)" class="modale-wrong-btn"><img src="../assets/pluses-btn.png" alt=""><p>Подтвердить</p></button>
            </div>
            <div class="main-app-list-item">
              <div class="main-app-list-item-title">Бронза</div>
              <div class="main-app-list-item-price">$ 9.95</div>
              <div class="main-app-list-item-price-pluses">
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
              </div>
              <input class="modale-wrong-input" @input="package($event.target, 1)" v-model:value="packageTitle[1].amount" type="number">
              <button @click="addInCart2(1)" class="modale-wrong-btn"><img src="../assets/pluses-btn.png" alt=""><p>Подтвердить</p></button>
            </div>
            <div class="main-app-list-item">
              <div class="main-app-list-item-title">Бронза</div>
              <div class="main-app-list-item-price">$ 9.95</div>
              <div class="main-app-list-item-price-pluses">
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
              </div>
              <input class="modale-wrong-input" @input="package($event.target, 2)" v-model:value="packageTitle[2].amount" type="number">
              <button @click="addInCart2(2)" class="modale-wrong-btn"><img src="../assets/pluses-btn.png" alt=""><p>Подтвердить</p></button>
            </div>
            <div class="main-app-list-item">
              <div class="main-app-list-item-title">Бронза</div>
              <div class="main-app-list-item-price">$ 9.95</div>
              <div class="main-app-list-item-price-pluses">
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
                <div class="main-app-list-item-price-pluses-item">
                  <img src="../assets/pluses-item.png" alt="">
                  <p class="main-app-list-item-price-pluses-item-title">Обозначение обозначено</p>
                </div>
              </div>
              <input class="modale-wrong-input" @input="package($event.target, 3)" v-model:value="packageTitle[3].amount" type="number">
              <button @click="addInCart2(3)" class="modale-wrong-btn"><img src="../assets/pluses-btn.png" alt=""><p>Подтвердить</p></button>
            </div>
          </div>
          <div class="cart cart-2" v-if="inCart.length > 0">
            <div class="cart-title">В корзине:</div>
            <div class="cart-list">
              <p class="cart-list-item" v-for="(item, index) in inCart">{{ index + 1 }}. {{item.title}} {{ item.amount }} шт. - цена {{ item.price }} тг. <span class="cart-list-item-delete" @click="deleteInCart(index)">Удалить</span></p>
            </div>
            <button class="cart-btn">Оформить заказ</button>
          </div>
        </div>
        <div v-else-if="activeContent === 'banners'">
          <div class="banners-select">
            <div class="banners-select-row">
              <div class="banners-select-item">
                <p class="banners-select-title">В категориях</p>
                <select @change="define($event.target)" class="banners-select-item-select" name="" id="">
                  <option value="default" class="default-option" selected="">Выберите тариф</option>
                  <option value="Доступ на один день - 5000 тг.">Доступ на 1 день</option>
                  <option value="Доступ на одну неделю - 12000 тг.">Доступ на 1 неделю</option>
                  <option value="Доступ на один месяц - 25000 тг.">Доступ на 1 Месяц</option>
                </select>
              </div>
              <p class="banners-select-title-2">Цена: {{ price }} тг.</p>
              <button class="cart-btn cart-btn-2" @click="addInCart">В корзину</button>
            </div>
            <div class="cart">
              <div class="cart-title">В корзине:</div>
              <div class="cart-list">
                <p class="cart-list-item" v-for="(item, index) in inCart">{{ index + 1 }}. {{item.title}} <span class="cart-list-item-delete" @click="deleteInCart(index)">Удалить</span></p>
              </div>
              <button class="cart-btn">Оформить заказ</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import { mapGetters } from 'vuex'









function statistic() {
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['7 августа', '8 августа', '9 августа', '10 августа', '11 августа', '12 августа'],
        datasets: [{
            label: "Просмотров",
            data: [0, 2, 1, 7, 3, 3],
            backgroundColor: [
                'rgba(255, 255, 255, 0)'
            ],
            tension: 0,
            radius: 3,
            borderColor: [
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)',
            ],
            borderWidth: 3,
            responsive: true,
            maintainAspectRatio: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    maxTicksLimit: 6
                }
            }],
            xAxes: [{
            gridLines:"rgba(0, 0, 0, 0)"
          }]
        },
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
            labels: {
                fontSize: 0
            }
        }
    }
});

}




















function masked () {
  setTimeout(function () {
    $('.mt-inputs').mask('+7(999)999-99-99')
  }, 10)
}

export default {
  name: 'profile',
  components: {

  },
  data () {
    return {
      activePage: 'profile',
      contacts: [],
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
      activeContent: 'packs',
      price: 0,
      titlePrice: '',
      packageTitle: [
        {
          title: '',
          amount: 1,
          price: ''
        },
        {
          title: '',
          amount: 1,
          price: ''
        },
        {
          title: '',
          amount: 1,
          price: ''
        },
        {
          title: '',
          amount: 1,
          price: ''
        },
      ]
    }
  },
  computed: {
    inCart () {
      return this.$store.getters.inCart
    }
  },
  methods: {
    activePageMethod (it) {
      if (it.id === 'profile') {
        this.activePage = 'profile'
      } else if (it.id === 'proposal') {
        this.activePage = 'proposal'
      } else if (it.id === 'statistic') {
        this.activePage = 'statistic'
        setTimeout(() => {
          statistic()
        }, 10);
      } else if (it.id === 'ad') {
        this.activePage = 'ad'
      }
    },
    activeContentMethod (it) {
      if (it.id === 'packs') {
        this.activeContent = 'packs'
      } else if (it.id === 'banners') {
        this.activeContent = 'banners'
      }
    },
    addInCart () {
      this.$store.commit('addInCart', {
        title: this.titlePrice
      })
    },
    addInCart2(index) {

      if(index === 0) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        } else if (index === 1) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        } else if (index === 2) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        } else if (index === 3) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        }

      this.$store.commit('addInCart', {
        title: this.packageTitle[index].title,
        amount: this.packageTitle[index].amount,
        price: this.packageTitle[index].price
      })
    },
    deleteInCart (ind) {
      let index = parseInt(ind - 1)
      this.$store.commit('deleteInCart', index)
    },
    addContant () {
      masked()
      this.contacts.push('')
      masked()
    },
    define(e) {
      let val = parseInt(e.value.replace(/[^\d]/g, ''))
      this.titlePrice = e.value
      this.price = val
    },
    package(e, index) {
      if(e.value < 1) {
        this.packageTitle[index].amount = 1
      } else {
        this.packageTitle[index].amount = e.value
        if(index === 0) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        } else if (index === 1) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        } else if (index === 2) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        } else if (index === 3) {
          this.packageTitle[index].title = "Пакет 'Бронза'" 
          this.packageTitle[index].price = "9.95$"
        }
      }
    }
  }
}
</script>

<style scoped>
#myChart {
  
}
.banners-select {
  padding-bottom: 20px !important;
}
.mt-inputs {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}
  .banners-select-row {
    display: flex;
    align-items: center;
    width: 100%;
  }
  .banners-select-item-select {
    width: 100%;
    height: 100%;
    border:none;
    font-size: 29px;
    font-family: PT Sans, sans-serif;
    color:#000;
    outline: none;
    padding: 0px 15px;
    white-space: pre;
  }
  .banners-select {
    padding: 0px 30px;
  }
  .banners-select-title {
    margin: 0;
    font-size: 29px;
    font-family: PT Sans, sans-serif;
    color:#000;
    padding: 5px 100px 5px 10px;
    border-right: 1px solid #6DC055;
    width: 100%;
    white-space: pre;
  }
  .banners-select-title-2 {
    margin: 0;
    font-size: 29px;
    font-family: PT Sans, sans-serif;
    color:#000;
    white-space: pre;
  }
  #main-app {
    width: 100%;
    margin-top: 20px;
    background:#fff;
  }
  .main-container {
    padding: 0px 30px;
    display: flex;
  }
  .main-container-2 {
    padding: 0px 0px;
  }
  .main-app-pages-title {
    width: 100%;
    display: flex;
  }
  .main-app-pages-title-item {
    width: 50%;
    padding: 20px;
    text-align: center;
    font-size: 21px;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    margin: 0;
    text-transform: uppercase;
    cursor: pointer;
    background:#fff;
    color:#000;
    border: 1px solid #6DC055;
  }
  .main-app-pages-title-item-active {
    background:#6DC055;
    color:#fff;
  }
  .login-content-form-item-title {
    font-weight: bold;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    text-align: left;
    margin: 5px 10px;
  }
  .login-content-form {
    display: block;
    margin-top: 30px;
  }
  .login-content-form-item {
    margin: 10px 1px;
  }
  .login-content-form-item-title {
    font-weight: bold;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    text-align: left;
    margin: 5px 10px;
  }
  .login-content-form-item-title-add {
    text-decoration: underline;
    margin: 10px 0px;
    margin-left: 30px;
    cursor: pointer;
    color:#3b94ed;
  }
  .login-content-form-item-title-add-phone {
    margin-left: 0px;
  }
  .login-content-form-item-input {
    width: 320px;
    border:none;
    background:#F1F9FF;
    border-radius: 10px;
    padding: 10px 20px;
    outline:none;
    box-shadow: 0px 5px 25px -10px #000;
    margin: 0px 10px;
  }
  .login-content-form {
    width: 50%;
  }
  .login-content-form-item-div {
    display: flex;
    align-items: center;
  }
  .app-rightside {
    width: 50%;
    margin-top: 30px;
  }
  textarea {
    height: 120px;
  }
  .logo-item {
    text-align: center;
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 180px;
    height: 180px;
    background:#707070;
    border-radius: 12px;
    color:#fff;
    font-size: 23px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
  }
  .logo {
    margin: 40px 10px;
    display: flex;
  }
  .logo-text {
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
  }
  .modale-wrong-btn {
    background:#65B34F;
    border-radius: 6px;
    color:#fff;
    font-size: 21px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    padding: 2px 25px;
    outline: none;
    border:none;
    display: block;
    margin: 20px auto 10px auto;
    cursor: pointer;
    text-transform: uppercase;
  }
  .form-error {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    color:#FF0000;
    text-align: center;
    width: 250px;
    margin: 0 auto;
  }
  .form-message {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    color:#707070;
    text-align: center;
    width: 450px;
    margin: 10px auto;
  }
  .form-message a {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    text-decoration: underline;
  }
  .form-success {
    margin: 0;
    font-family: PT Sans, sans-serif;
    font-size: 14px;
    font-weight: bold;
    color:#6DC055;
    text-align: center;
    width: 450px;
    margin: 10px auto;
  }
  .main-app-pages-title-item {
    display: flex;
    justify-content: center;
    flex-direction: column;
  }
  .main-part-list {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: space-between;
      padding: 5px 0px;
    }
    .main-part-list-item {
      width: 220px;
      margin: 2px 10px;
    }
    .main-part-list-item-logo {
      width: 100%;
    }
    .main-part-list-item-logo img {
      width: 100%;
    }
    .main-part-list-item-title {
      border-radius: 6px;
      border:5px solid #B5D376;
      padding: 2px;
      width: 100%;
      margin-top: 2px;
      font-size: 17px;
      font-weight: bold;
      font-family: PT Sans, sans-serif;
    }
    .pages {
      display: flex;
      align-items: center;
      margin: 5px 0px;
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
    .main-part-list-item-close {
      display: block;
      margin: 0px 10px;
    }
    .main-part-list-item-list {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 10px;
    }
    .statistic {
      width: 100%;
      height: 70vh;
    }
  .main-app-list {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    width: 100%;
  }
  .main-app-list-item {
    width: 280px;
    border-radius: 12px;
    border:1px solid #707070;
    margin: 15px;
    cursor: pointer;
  }
  .main-app-list-item-title {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 24px;
    color:#333333;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0px;
    border-bottom: 1px solid #707070;
  }
  .main-app-list-item-price {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 56px;
    color:#333333;
    text-align: center;
    text-transform: uppercase;
    padding: 10px 0px;
    border-bottom: 1px solid #707070;
  }
  .main-app-list-item-price-pluses {
    display: block;
    border-bottom: 1px solid #707070
  }
  .main-app-list-item-price-pluses-item {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px 0px;
  }
  .main-app-list-item-price-pluses-item-title {
    font-size:15px;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    margin: 0px 10px;
  }
  .modale-wrong-btn {
    background:#A3CC4E;
    border-radius: 6px;
    color:#000;
    font-size: 15px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    padding: 5px 15px;
    outline: none;
    border:none;
    display: block;
    margin: 20px auto 20px auto;
    cursor: pointer;
    display: flex;
    align-items: center;
  }
  .modale-wrong-btn p {
    margin: 0;
  }
  .modale-wrong-btn img {
    margin-top: 2px;
    margin-right: 10px;
  }
  .main-app-list-item:hover .main-app-list-item-price {
    background:#A3CC4E;
  }
  .ad-quest {
    width: 100%;
    background:#6DC055;
    display: flex;
    margin: 40px 0px;
  }
  .ad-quest-item {
    padding: 25px 50px;
    font-family: PT Sans, sans-serif;
    font-size: 29px;
    color:#fff;
    background:#6DC055;
    border:1px solid #6DC055;
    text-align: center;
    cursor: pointer;
  }
  .ad-quest-item-active {
    background:#fff;
    color:#000;
  }
  .cart {
    padding: 10px 10px;
    border:1px solid #6DC055;
    max-height: 300px;
    overflow-y: auto;
  }
  .cart-title {
    font-size: 29px;
    font-family: PT Sans, sans-serif;
    margin: 10px 0px 30px 0px;
  }
  .cart-list-item {
    font-size: 17px;
    font-family: PT Sans, sans-serif;
    margin: 10px 0px;
    color:#000000;
  }
  .cart-list-item-delete {
    font-size: 12px;
    font-family: PT Sans, sans-serif;
    color:#FF0000;
    cursor: pointer;
  }
  .cart-btn {
    border:none;
    background:#6DC055;
    color:#fff;
    border-radius: 6px;
    margin: 0 auto;
    padding: 10px 30px;
    display: block;
    cursor: pointer;
  }
  @media screen and (max-width: 950px) {
    .main-container {
      display: block;
    }
    .main-part-list {
      justify-content: center;
    }
    .main-container-side {
      margin: 0 auto;
    }
    .login-content-form, .app-rightside {
      margin: 20px auto;
      width: 100%;
      text-align: center;
    }
    .login-content-form-item-title-spec {
      text-align: center;
    }
    textarea {
      width: 410px !important;
    }
    .login-content-form-item-div-spec {
      width: 430px;
    }
    .logo {
      justify-content: center;
    }
  }
  @media screen and (max-width: 650px) {
    .main-app-pages-title-item {
      font-size: 13px;
    }
    .banners-select-item {
      width: 100%;
    }
    .banners-select-title {
      border:none;
      border-bottom: 1px solid #6DC055;
      padding: 0px;
    }
    .banners-select-item {
      display: block;
    }
    .banners-select-item-select {
      padding: 0;
      margin: 0;
    }
  }
  @media screen and (max-width: 500px) {
    .main-app-pages-title-item {
      padding: 10px;
    }
    .login-content-form-item {
      width: 100%;
    }
    .main-container {
      padding: 0px 5px;
    }
    .form-message, .form-success {
      width: 100%;
    }
    textarea {
      width: 90% !important;
      margin-left: 0px;
    }
    .login-content-form-item-title-spec {
      text-align: left;
    }
    .login-content-form-item-div-spec {
      width: 100%;
    }
    .login-content-form {
      text-align: left;
    }
    .login-content-form-item-title-add-phone {
      margin-left: 10px;
    }
  }
  @media screen and (max-width: 440px) {
   .pages-item {
     margin: 10px 10px;
     padding: 5px 9px;
   }
   .mt-inputs {
    width: 90%;
   }
  }
  @media screen and (max-width: 400px) {
    .main-app-pages-title-item {
      padding: 5px;
    }
    .login-content-form-item-title-add {
      margin-left: 2px;
    }
  }
  @media screen and (max-width: 1100px) {
    .main-app-list {
      flex-wrap: wrap;
      justify-content: center;
    }
    .main-app-list-item {
      width: 270px;
    }
    #main-app {
      margin: 0px;
      border-radius:0px;
    }
  }
  @media screen and (max-width: 500px) {
    .main-app-list-item {
      width: 100%;
    }
    .ad-quest-item {
      padding: 10px 15px;
    }
  }
  .main-container-side {
    width: 300px;
    padding: 20px;
  }
  .main-container-side-item {
    width: 100%;
    padding: 10px 20px;
    background:#6DC055;
    border-radius: 12px;
    color:#fff;
    font-size: 14px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    text-align: center;
    text-transform: uppercase;
    margin: 20px 0px;
    cursor: pointer;
  }

  .cart-btn-2 {
    display: block;
    margin-left: auto !important;
    margin-right: 0px;
    font-size: 20px;
    font-weight: bold;
    white-space: pre;
  }
  @media screen and (max-width: 850px) {
    .banners-select-row {
      display: block;
    }
  }
  .login-content-logo {
    position: relative;
  }
  .login-content-logo input {
    width: 180px;
    height: 180px;
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  #blah {
    width: 180px !important;
    height: 180px !important;
    border-radius: 12px;
  }
  .main-container-statistic {
  height: 650px;
  display:flex !important;
  padding: 50px 30px;
  flex-direction:column;
  align-items: flex-start
}
.main-container-statistic-title {
  font-size:22px;
  font-family: PT Sans, sans-serif;
  color:#000;
  border-bottom:3px solid #6DC055;
  display:inline;
  font-weight:bold;
  margin:0px 30px;
}

.main-container-statistic-text {
  font-size:18px;
  font-family: PT Sans, sans-serif;
  margin:20px 0px 20px 30px;
}
.canvas-graph {
  width:100%;
  margin-top: auto !important;
}
.default-option {
  display:none;
}
.banners-select-item-select {
  
}
.banners-select-item {
    border:1px solid #6DC055;
    width: 600px;
    display: flex;
    align-items: center;
    margin: 15px 0px;
    margin-right: 50px;
  }
  .banners-select-title {
    width:50%;
  }
  .cart-2 {
    margin: 15px;
  }
  .modale-wrong-input {
    margin: 15px auto;
    padding: 5px 10px;
    display:block;
    text-align: center;
    width:80px; 
  }
</style>
