<template>
  <div id="app">
    <div class="main-app-pages-title">
      <p class="main-app-pages-title-item" id="stock" @click="activePageMethod($event.target)" :class="activePage === 'stock' ? 'main-app-pages-title-item-active' : ''">Акция</p>
      <p class="main-app-pages-title-item" id="sale" @click="activePageMethod($event.target)" :class="activePage === 'sale' ? 'main-app-pages-title-item-active' : ''">Скидка</p>
      <p class="main-app-pages-title-item" id="proposal" @click="activePageMethod($event.target)" :class="activePage === 'proposal' ? 'main-app-pages-title-item-active' : ''">Ценовое предложение</p>
    </div>
    <div v-if="activePage === 'stock'" class="viewer">
    <div id="main-app" class="main-container">
      <div class="main-app-leftSide">
        <form class="login-content-form">
          <label class="login-content-form-item" for="city">
            <p class="login-content-form-item-title">Город</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="city" id="city">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="heading">
            <p class="login-content-form-item-title">Выберите рубрику</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="heading" id="heading">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="category">
            <p class="login-content-form-item-title">Выберите категорию</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="category" id="category">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="category2">
            <p class="login-content-form-item-title">Выберите 2 категорию</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="category2" id="category2">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <p class="login-content-form-item-title login-content-form-item-title-href">Контактное лицо</p>
          <p @click="addContant" class="login-content-form-item-title-add login-content-form-item-title-add-phone">Добавить телефон</p>
          <div class="p-0 d-flex login-content-form-item-input-div" v-for="(item, index) in contacts">
            <input class="login-content-form-item-input mt-inputs" :id="index" type="text" required=""><span @click="removeContact($event.target, index)">&#10006;</span>
          </div>
          <br>
          <p class="login-content-form-item-title login-content-form-item-title-href">Добавьте адрес</p>
          <a class="login-content-form-item-title-add" href="#">Добавить адрес</a>
          <br>
          <label class="login-content-form-item mt" for="1pass">
            <p class="login-content-form-item-title">Название продукта ( до 30 символов )</p>
            <textarea class="login-content-form-item-input" id="1pass" type="text" required=""></textarea>
          </label>
          <label class="login-content-form-item" for="2pass">
            <p class="login-content-form-item-title">Описание и условия продукта ( до 180 символов )</p>
            <textarea class="login-content-form-item-input" id="2pass" type="text" required=""></textarea>
          </label>
          <label class="login-content-form-item" for="1mail">
            <p class="login-content-form-item-title">e-mail</p>
            <input class="login-content-form-item-input" id="1mail" type="text" required="">
          </label>
        </form>
      </div>
      <div class="main-app-rightSide">
        <div class="main-app-rightSide-logo">
          <div class="login-content-logo">
            <input type="file" onchange="readURL(this);">
            <img id="blah" src="http://placehold.it/180" alt="">
          </div>
          <div class="login-content-logo-list">
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
          </div>
          <div class="login-content-logo-text">
            <p>Добавьте фотографии</p>
            <p>( jpeg, png )</p>
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Активная время и дата (акции скидок и др.)</p>
          <div class="label-item1">
            <span>с</span><input type="date"class="login-content-form-item-input login-content-form-item-input-data">
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item1">
            <span>По</span><input type="date"class="login-content-form-item-input login-content-form-item-input-data">
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Дни работы акции</p>
          <div class="service-list-item-content service-list-item-content-time">
            <label for="1" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Понедельник</p>
              <input class="checkbox-days" id="1" name="1" type="checkbox">
              <span></span>
            </label>
            <label for="2" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Вторник</p>
              <input class="checkbox-days" id="2" name="2" type="checkbox">
              <span></span>
            </label>
            <label for="3" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Среда</p>
              <input class="checkbox-days" id="3" name="3" type="checkbox">
              <span></span>
            </label>
            <label for="4" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Четверг</p>
              <input class="checkbox-days" id="4" name="4" type="checkbox">
              <span></span>
            </label>
            <label for="5" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Пятница</p>
              <input class="checkbox-days" id="5" name="5" type="checkbox">
              <span></span>
            </label>
            <label for="6" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Суббота</p>
              <input class="checkbox-days" id="6" name="6" type="checkbox">
              <span></span>
            </label>
            <label for="7" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Воскресенье</p>
              <input class="checkbox-days" id="7" name="7" type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">График работы заведения  (для выходного дня оставьте поле пустым)</p>
          <div class="label-item2">
            <span>Понедельник</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Вторник</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Среда</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Четверг</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Пятница</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Суббота</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Воскресенье</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Способ оплаты</p>
          <div class="variant-check">
            <label for="variant-check1" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Наличный расчет</p>
              <input class="checkbox-days" id="variant-check1" name="variant-check1" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check2" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Через интернет</p>
              <input class="checkbox-days" id="variant-check2" name="variant-check2" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check3" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">По картам</p>
              <input class="checkbox-days" id="variant-check3" name="variant-check3" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check4" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Через банк</p>
              <input class="checkbox-days" id="variant-check4" name="variant-check4" type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <label class="login-content-form-item label" for="website">
          <p class="login-content-form-item-title">Сайт заведения</p>
          <input class="login-content-form-item-input" id="website" type="text" required="">
        </label>
      </div>
    </div>
    <div class="socials">
      <p class="login-content-form-item-title">Добавьте социальные сети</p>
      <div class="socials-container">
        <div class="socials-item">
          <div class="socials-item-dflex">
            <img src="../assets/inst.png" alt="">
            <p class="socials-item-title">Instagram</p>
          </div>
          <input placeholder="Укажите ссылку" class="login-content-form-item-input login-content-form-item-input-social" id="Instagram" type="text" required="">
        </div>
        <div class="socials-item">
          <div class="socials-item-dflex">
            <img src="../assets/facebook.png" alt="">
            <p class="socials-item-title">Facebook</p>
          </div>
          <input placeholder="Укажите ссылку" class="login-content-form-item-input login-content-form-item-input-social" id="Facebook" type="text" required="">
        </div>
      </div>
    </div>
    <div class="main-app-rightSide main-app-rightSide-2">
      <label class="login-content-form-item label" for="stock1">
        <p class="login-content-form-item-title">Цена акции</p>
        <input class="login-content-form-item-input" id="stock1" type="text" required="">
      </label>
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

  <div v-if="activePage === 'sale'" class="viewer">
    <div id="main-app" class="main-container">
      <div class="main-app-leftSide">
        <form class="login-content-form">
          <label class="login-content-form-item" for="city">
            <p class="login-content-form-item-title">Город</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="city" id="city">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="heading">
            <p class="login-content-form-item-title">Выберите рубрику</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="heading" id="heading">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="category">
            <p class="login-content-form-item-title">Выберите категорию</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="category" id="category">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="category2">
            <p class="login-content-form-item-title">Выберите 2 категорию</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="category2" id="category2">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <p class="login-content-form-item-title login-content-form-item-title-href">Контактное лицо</p>
          <p @click="addContant" class="login-content-form-item-title-add login-content-form-item-title-add-phone">Добавить телефон</p>

          <div class="p-0 d-flex login-content-form-item-input-div" v-for="(item, index) in contacts">
           <input class="login-content-form-item-input mt-inputs" :id="index" type="text" required=""><span @click="removeContact($event.target, index)">&#10006;</span>
          </div>
          <br>
          <p class="login-content-form-item-title login-content-form-item-title-href">Добавьте адрес</p>
          <a class="login-content-form-item-title-add" href="#">Добавить адрес</a>
          <br>
          <label class="login-content-form-item mt" for="1pass">
            <p class="login-content-form-item-title">Название продукта ( до 30 символов )</p>
            <textarea class="login-content-form-item-input" id="1pass" type="text" required=""></textarea>
          </label>
          <label class="login-content-form-item" for="2pass">
            <p class="login-content-form-item-title">Описание и условия продукта ( до 180 символов )</p>
            <textarea class="login-content-form-item-input" id="2pass" type="text" required=""></textarea>
          </label>
          <label class="login-content-form-item" for="1mail">
            <p class="login-content-form-item-title">e-mail</p>
            <input class="login-content-form-item-input" id="1mail" type="text" required="">
          </label>
        </form>
      </div>
      <div class="main-app-rightSide">
        <div class="main-app-rightSide-logo">
          <div class="login-content-logo">
            <input type="file" onchange="readURL(this);">
            <img id="blah" src="http://placehold.it/180" alt="">
          </div>
          <div class="login-content-logo-list">
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
          </div>
          <div class="login-content-logo-text">
            <p>Добавьте фотографии</p>
            <p>( jpeg, png )</p>
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Активная время и дата (акции скидок и др.)</p>
          <div class="label-item1">
            <span>с</span><input type="date"class="login-content-form-item-input login-content-form-item-input-data">
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item1">
            <span>По</span><input type="date"class="login-content-form-item-input login-content-form-item-input-data">
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Дни работы акции</p>
          <div class="service-list-item-content service-list-item-content-time">
            <label for="1" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Понедельник</p>
              <input class="checkbox-days" id="1" name="1" type="checkbox">
              <span></span>
            </label>
            <label for="2" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Вторник</p>
              <input class="checkbox-days" id="2" name="2" type="checkbox">
              <span></span>
            </label>
            <label for="3" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Среда</p>
              <input class="checkbox-days" id="3" name="3" type="checkbox">
              <span></span>
            </label>
            <label for="4" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Четверг</p>
              <input class="checkbox-days" id="4" name="4" type="checkbox">
              <span></span>
            </label>
            <label for="5" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Пятница</p>
              <input class="checkbox-days" id="5" name="5" type="checkbox">
              <span></span>
            </label>
            <label for="6" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Суббота</p>
              <input class="checkbox-days" id="6" name="6" type="checkbox">
              <span></span>
            </label>
            <label for="7" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Воскресенье</p>
              <input class="checkbox-days" id="7" name="7" type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">График работы заведения  (для выходного дня оставьте поле пустым)</p>
          <div class="label-item2">
            <span>Понедельник</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Вторник</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Среда</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Четверг</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Пятница</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Суббота</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Воскресенье</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Способ оплаты</p>
          <div class="variant-check">
            <label for="variant-check1" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Наличный расчет</p>
              <input class="checkbox-days" id="variant-check1" name="variant-check1" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check2" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Через интернет</p>
              <input class="checkbox-days" id="variant-check2" name="variant-check2" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check3" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">По картам</p>
              <input class="checkbox-days" id="variant-check3" name="variant-check3" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check4" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Через банк</p>
              <input class="checkbox-days" id="variant-check4" name="variant-check4" type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <label class="login-content-form-item label" for="website">
          <p class="login-content-form-item-title">Сайт заведения</p>
          <input class="login-content-form-item-input" id="website" type="text" required="">
        </label>
      </div>
    </div>
    <div class="socials">
      <p class="login-content-form-item-title">Добавьте социальные сети</p>
      <div class="socials-container">
        <div class="socials-item">
          <div class="socials-item-dflex">
            <img src="../assets/inst.png" alt="">
            <p class="socials-item-title">Instagram</p>
          </div>
          <input placeholder="Укажите ссылку" class="login-content-form-item-input login-content-form-item-input-social" id="Instagram" type="text" required="">
        </div>
        <div class="socials-item">
          <div class="socials-item-dflex">
            <img src="../assets/facebook.png" alt="">
            <p class="socials-item-title">Facebook</p>
          </div>
          <input placeholder="Укажите ссылку" class="login-content-form-item-input login-content-form-item-input-social" id="Facebook" type="text" required="">
        </div>
      </div>
    </div>
    <div class="main-app-rightSide main-app-rightSide-2">
      <label class="login-content-form-item label2" for="stock1">
        <p class="login-content-form-item-title">Старая цена</p>
        <input class="login-content-form-item-input" id="stock1" type="text" required="">
      </label>
      <label class="login-content-form-item label2" for="stock2">
        <p class="login-content-form-item-title">Новая цена</p>
        <input class="login-content-form-item-input" id="stock2" type="text" required="">
      </label>
      <label class="login-content-form-item label2" for="stock3">
        <p class="login-content-form-item-title">Скидка</p>
        <input disabled class="login-content-form-item-input" id="stock3" type="text" required="">
      </label>
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

  <div v-if="activePage === 'proposal'" class="viewer">
    <div id="main-app" class="main-container">
      <div class="main-app-leftSide">
        <form class="login-content-form">
          <label class="login-content-form-item" for="city">
            <p class="login-content-form-item-title">Город</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="city" id="city">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="heading">
            <p class="login-content-form-item-title">Выберите рубрику</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="heading" id="heading">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="category">
            <p class="login-content-form-item-title">Выберите категорию</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="category" id="category">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <label class="login-content-form-item" for="category2">
            <p class="login-content-form-item-title">Выберите 2 категорию</p>
            <select class="login-content-form-item-input login-content-form-item-input-select" name="category2" id="category2">
              <option class="login-content-form-item-input-non" value="default" selected=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </label>
          <p class="login-content-form-item-title login-content-form-item-title-href">Контактное лицо</p>
          <p @click="addContant" class="login-content-form-item-title-add login-content-form-item-title-add-phone">Добавить телефон</p>

          <div class="p-0 d-flex login-content-form-item-input-div" v-for="(item, index) in contacts">
            <input class="login-content-form-item-input mt-inputs" :id="index" type="text" required=""><span @click="removeContact($event.target, index)">&#10006;</span>
          </div>
          <br>
          <p class="login-content-form-item-title login-content-form-item-title-href">Добавьте адрес</p>
          <a class="login-content-form-item-title-add" href="#">Добавить адрес</a>
          <br>
          <label class="login-content-form-item mt" for="1pass">
            <p class="login-content-form-item-title">Название продукта ( до 30 символов )</p>
            <textarea class="login-content-form-item-input" id="1pass" type="text" required=""></textarea>
          </label>
          <label class="login-content-form-item" for="2pass">
            <p class="login-content-form-item-title">Описание и условия продукта ( до 180 символов )</p>
            <textarea class="login-content-form-item-input" id="2pass" type="text" required=""></textarea>
          </label>
          <label class="login-content-form-item" for="1mail">
            <p class="login-content-form-item-title">e-mail</p>
            <input class="login-content-form-item-input" id="1mail" type="text" required="">
          </label>
        </form>
      </div>
      <div class="main-app-rightSide">
        <div class="main-app-rightSide-logo">
          <div class="login-content-logo">
            <input type="file" onchange="readURL(this);">
            <img id="blah" src="http://placehold.it/180" alt="">
          </div>
          <div class="login-content-logo-list">
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
            <div class="login-content-logo-mini">
              180x180
            </div>
          </div>
          <div class="login-content-logo-text">
            <p>Добавьте фотографии</p>
            <p>( jpeg, png )</p>
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Активная время и дата (акции скидок и др.)</p>
          <div class="label-item1">
            <span>с</span><input type="date"class="login-content-form-item-input login-content-form-item-input-data">
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item1">
            <span>По</span><input type="date"class="login-content-form-item-input login-content-form-item-input-data">
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Дни работы акции</p>
          <div class="service-list-item-content service-list-item-content-time">
            <label for="1" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Понедельник</p>
              <input class="checkbox-days" id="1" name="1" type="checkbox">
              <span></span>
            </label>
            <label for="2" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Вторник</p>
              <input class="checkbox-days" id="2" name="2" type="checkbox">
              <span></span>
            </label>
            <label for="3" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Среда</p>
              <input class="checkbox-days" id="3" name="3" type="checkbox">
              <span></span>
            </label>
            <label for="4" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Четверг</p>
              <input class="checkbox-days" id="4" name="4" type="checkbox">
              <span></span>
            </label>
            <label for="5" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Пятница</p>
              <input class="checkbox-days" id="5" name="5" type="checkbox">
              <span></span>
            </label>
            <label for="6" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Суббота</p>
              <input class="checkbox-days" id="6" name="6" type="checkbox">
              <span></span>
            </label>
            <label for="7" class="service-list-item-content-time-item">
              <p class="service-list-item-content-time-item-title">Воскресенье</p>
              <input class="checkbox-days" id="7" name="7" type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">График работы заведения  (для выходного дня оставьте поле пустым)</p>
          <div class="label-item2">
            <span>Понедельник</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Вторник</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Среда</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Четверг</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Пятница</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Суббота</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
          <div class="label-item2">
            <span>Воскресенье</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
            <span class="span-2">по</span>
            <input type="time"class="login-content-form-item-input login-content-form-item-input-time">
          </div>
        </div>
        <div class="label">
          <p class="login-content-form-item-title login-content-form-item-title-m0">Способ оплаты</p>
          <div class="variant-check">
            <label for="variant-check1" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Наличный расчет</p>
              <input class="checkbox-days" id="variant-check1" name="variant-check1" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check2" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Через интернет</p>
              <input class="checkbox-days" id="variant-check2" name="variant-check2" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check3" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">По картам</p>
              <input class="checkbox-days" id="variant-check3" name="variant-check3" type="checkbox">
              <span></span>
            </label>
            <label for="variant-check4" class="service-list-item-content-time-item variant-check-item">
              <p class="service-list-item-content-time-item-title">Через банк</p>
              <input class="checkbox-days" id="variant-check4" name="variant-check4" type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <label class="login-content-form-item label" for="website">
          <p class="login-content-form-item-title">Сайт заведения</p>
          <input class="login-content-form-item-input" id="website" type="text" required="">
        </label>
      </div>
    </div>
    <div class="socials">
      <p class="login-content-form-item-title">Добавьте социальные сети</p>
      <div class="socials-container">
        <div class="socials-item">
          <div class="socials-item-dflex">
            <img src="../assets/inst.png" alt="">
            <p class="socials-item-title">Instagram</p>
          </div>
          <input placeholder="Укажите ссылку" class="login-content-form-item-input login-content-form-item-input-social" id="Instagram" type="text" required="">
        </div>
        <div class="socials-item">
          <div class="socials-item-dflex">
            <img src="../assets/facebook.png" alt="">
            <p class="socials-item-title">Facebook</p>
          </div>
          <input placeholder="Укажите ссылку" class="login-content-form-item-input login-content-form-item-input-social" id="Facebook" type="text" required="">
        </div>
      </div>
    </div>
    <div class="main-app-rightSide main-app-rightSide-2">
      <label class="login-content-form-item label2" for="proposals3">
        <p class="login-content-form-item-title">Цена предложения</p>
        <input class="login-content-form-item-input" id="proposals3" type="text" required="">
      </label>
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
  </div>
</template>

<script>

import { mapGetters } from 'vuex'

function masked () {
  setTimeout(function () {
    $('.mt-inputs').mask('+7(999)999-99-99')
  }, 10)
}

export default {
  name: 'registration',
  components: {

  },
  data () {
    return {
      activePage: 'stock',
      contacts: []
    }
  },
  computed: {

  },
  methods: {
    activePageMethod (it) {
      if (it.id === 'stock') {
        this.activePage = 'stock'
      } else if (it.id === 'sale') {
        this.activePage = 'sale'
      } else if (it.id === 'proposal') {
        this.activePage = 'proposal'
      }
    },
    addContant () {
      masked()
      this.contacts.push('')
      masked()
    },
    removeContact (e, index) {
      e.parentElement.classList.add("disnone")
    }
  }
}
</script>

<style scoped>
.disnone {
  display: none !important;
}
.login-content-form-item-input-div {
  align-items: center;
  display: flex;
}

.login-content-form-item-input-div span {
  cursor: pointer;
}
.slide-enter-active{
    animation: slideIn 0.3s;
  }

  .slide-leave-active{
    animation: slideOut 0.3s;
  }

  @keyframes slideIn{
    from{opacity: 0}
    to{opacity: 1}
  }

  @keyframes slideOut{
    from{opacity: 1}
    to{opacity: 0}
  }
.mt-inputs {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}
  #app {
    width: 100%;
    background: #fff;
    margin-top: 30px;
  }
  #main-app {
    padding: 10px 30px 10px 30px;
  }
  .main-container {
    display: flex;
    justify-content: space-between;
  }
  .main-app-title {
    color:#000000;
    font-size: 30px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    text-align: center;
  }
  .main-app-leftSide {
    width: 50%;
  }
  .main-app-rightSide {
    width: 50%;
  }
  .login-content-form {
    display: block;
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

  .login-content-form-item-title-m0 {
    margin: 0;
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
  .login-content-logo {
    width: 180px;
    height: 180px;
    background:#707070;
    border-radius: 12px;
    color:#fff;
    font-size: 23px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0px auto;
    text-align: center;
  }
  .login-content-logo-list {
    display: flex;
    margin: 0px 20px 0px 0px;
    align-items: center;
    justify-content: space-between;
    width: 110px;
    flex-wrap: wrap;
  }
  .login-content-logo-mini {
    width: 53px;
    height: 53px;
    background:#707070;
    border-radius: 12px;
    color:#fff;
    font-size: 10px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0px auto;
    text-align: center;
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
    margin: 70px auto 10px auto;
    cursor: pointer;
    text-transform: uppercase;
  }
  .main-app-rightSide-logo {
    display: flex;
    margin-top: 40px;
  }
  .login-content-logo-text {
    text-align: center;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    color:#000000;
    margin: 0;
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
  textarea {
    height: 120px;
  }
  .login-content-form-item-input-non {
    display: none;
  }

  .login-content-form-item-input-select {
    position: relative;
    display: inline-block;
    background:url("../assets/dropdown.png") 95% 50% no-repeat;
    background-color:#F1F9FF;
  }
  .login-content-form-item-input-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
  }
  .mt {
    margin-top: 150px;
  }
  .main-app-pages-title {
    width: 100%;
    display: flex;

  }
  .main-app-pages-title-item {
    width: 50%;
    padding: 10px;
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
  .login-content-form-item-title-href {
    margin-top: 70px;
  }
  .login-content-form-item-input-data {
    margin-right: 20px;
    width: 200px;
    text-align: center;
  }
  .login-content-form-item-input-time {
    width: 150px;
    text-align: center;
  }
  .label {
    margin-top: 50px;
  }
  .label2 {
    margin-top: 10px;
  }
  .label-item1 span {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 14px;
    text-transform: uppercase;
    width: 20px !important;
    display: block;
    margin: 0;
  }
  .label-item1 {
    display: flex;
    align-items: center;
    margin: 15px 0px;
  }
  .label-item1 input {
    box-shadow: 0px 0px 0px 0px;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    background:#F5F5F5;
  }
  .label-item2 span {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 14px;
    text-decoration: underline;
    width: 90px !important;
    display: block;
    margin: 0;
  }
  .label-item2 {
    display: flex;
    align-items: center;
    margin: 15px 0px;
  }
  .label-item2 input {
    box-shadow: 0px 0px 0px 0px;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    background:#F5F5F5;
  }
  .label-item2 .span-2 {
    width: 20px;
    text-align: center;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 11px;
    text-transform: uppercase;
    text-decoration: none;
    margin-top: auto;
  }
  .service-list-item-content-time {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    height: 210px;
    margin-top: 20px;
  }
  .service-list-item-content-time-item {
    display: flex;
    width: 200px;
    align-items: center;
    justify-content: space-between;
    margin: 15px 0px;
    cursor: pointer;
  }
  .service-list-item-content-time-item-title {
    font-weight: bold;
    font-size: 14px;
    font-family: PT Sans, sans-serif;
    color:#434343;
    text-decoration: underline;
    margin: 0;
  }
  .service-list-item-content-time-item-time {
    font-weight: bold;
    font-size: 25px;
    font-family: PT Sans, sans-serif;
    color:#6DC055;
  }
  .service-list-item-content-time-title {
    font-size: 31px;
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    color:#434343;
    padding: 0px 30px;
    margin: 10px 0px;
  }
  .checkbox-days{
    display: none;
  }
  .checkbox-days:checked + span {
    background:url("../assets/checkbox-ok.png") 50% 50%;
    transition-duration: .3s;
  }
  .service-list-item-content-time span {
    border:2px solid #6DC055;
    border-radius: 5px;
    background:#F1F9FF;
    width: 21px;
    height: 21px;
    transition-duration: .3s;
  }
  .variant-check {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content:space-between;
    width: 500px;
    margin-top: 20px;
  }
  .variant-check span {
    border:2px solid #6DC055;
    border-radius: 5px;
    background:#F1F9FF;
    width: 21px;
    height: 21px;
    transition-duration: .3s;
  }
  .variant-check-item {
    margin: 10px 0px;
  }
  .socials {
    width: 100%;
    padding: 0px 30px;
  }
  .socials-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin: 20px 0px;
  }
  .socials-item {
    width: 50%;
  }
  .socials-item-dflex {
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }
  .socials-item img {
    margin-right: 20px;
  }
  .socials-item p {
    font-family: PT Sans, sans-serif;
    font-weight: bold;
    font-size: 14px;
    text-transform: uppercase;
    margin: 0;
  }
  .login-content-form-item-input-social {
    margin: 20px 0px;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
  }
  .main-app-rightSide-2 {
    margin-left: auto;
  }
  @media screen and (max-width: 1200px) {
    #main-app {
      margin: 0px;
      border-radius: 0px;
    }
  }
  @media screen and (max-width: 1050px) {
    .main-container {
      display: block;
    }
    .main-app-leftSide {
      width: 100%;
    }
    .main-app-rightSide {
      width: 100%;
    }
    .main-app-rightSide-2 {
      padding: 0px 20px;
    }
    .login-content-logo {
      margin: 0px 20px;
    }
    .login-content-form {
      text-align:center;
    }
    .login-content-form-item-title {
      text-align:center;
    }
    .login-content-form-item-title-add {
      margin: 5px 0px;
    }
    .main-app-rightSide-logo {
      margin: 20px auto;
      width: 500px;
    }
    .label-item1, .label-item2 {
      justify-content: center;
    }
    .service-list-item-content-time {
      width: 500px;
      margin-left: auto;
      margin-right: auto;
    }
    .mt {
      margin-top: 50px;
    }
    .variant-check {
      margin: 20px auto;
    }
    .login-content-form-item {
      width: 100%;
      text-align: center;
      margin: 20px 0px;
    }
    .socials {
      margin-top: 20px;
    }
    .socials-item {
      width: auto;
      text-align: center;
    }
    .socials-item-dflex {
      justify-content: center;
    }
    .modale-wrong-btn {
      margin-top: 20px;
    }
  }
  @media screen and (max-width: 900px) {
    .main-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .main-app-leftSide {
      width: 100%;
    }
    .main-app-rightSide {
      width: 100%;
    }
    .login-content-form {
      text-align: center;
    }
    .login-content-form-item {
      display: block;
      text-align: center;
    }
    .login-content-form-item-title {
      text-align: center;
    }
    .login-content-form-item-title-add {
      margin: 10px auto !important;
      text-align: center;
    }
    .main-app-rightSide-logo {
      justify-content: center;
    }
    .login-content-logo-text {
      display: none;
    }
  }
  @media screen and (max-width: 750px) {
    .socials-container {
      display: block;
    }
    /*.main-app-pages-title {
      display: block;
    }
    .main-app-pages-title-item {
      width: 100%;
    }*/
    .main-app-pages-title-item {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }
  }
  @media screen and (max-width: 550px) {
    #main-app {
      padding: 10px 10px;
    }
    .form-message {
      width: 100%;
    }
    .form-success {
      width: 100%;
    }
    .service-list-item-content-time {
      display: block;
    }
    .login-content-form-item-title {
      text-align: left;
    }
    .login-content-form-item {
      text-align: left;
    }
    .login-content-form-item-title-add {
      margin: 10px 10px;
    }
    .login-content-form {
      text-align: left;
    }
    .variant-check {
      display: block;
    }
    .label-item2 {
      text-align: left;
      justify-content: flex-start;
    }
    .label-item2 span:nth-child(0) {
      font-size: 12px;
      width: 10px !important;
    }
    .label-item2 .span-2 {
      width: 20px !important;
    }
    .label-item2 .login-content-form-item-input-time {
      width: 90px;
      padding: 5px 5px;
    }
    .label-item2 .login-content-form-item-input-time::-webkit-clear-button {
      display: none;
    }
    .main-app-rightSide-logo {
      width:100%;
    }
    .service-list-item-content-time, .variant-check {
      width: 100%;
    }
    .main-app-pages-title-item {
      font-size: 13px;
    }
  }
  @media screen and (max-width: 400px) {
    .login-content-form-item-input {
      width: 95%;
    }
    .socials-item-dflex {
      justify-content: flex-start;
    }
  }
  .login-content-logo {
    width: 180px;
    height: 180px;
    background:#707070;
    border-radius: 12px;
    color:#fff;
    font-size: 23px;
    font-weight: bold;
    font-family: PT Sans, sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 20px auto;
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
</style>
