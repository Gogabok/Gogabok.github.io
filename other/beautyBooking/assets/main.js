$(document).ready(function () {
  $('.services-carousel').owlCarousel({
    loop: false,
    margin: 16,
    nav: false,
    autoWidth: true,
  });

  $('.sertificates-carousel').owlCarousel({
    loop: true,
    margin: 16,
    nav: false,
    autoWidth: true,
  });




  $.datepicker.regional['ru'] = {
    closeText: 'Закрыть',
    prevText: 'Предыдущий',
    nextText: 'Следующий',
    currentText: 'Сегодня',
    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
    dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
    dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
    dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    weekHeader: 'Не',
    dateFormat: 'dd.mm.yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
  };
  $.datepicker.setDefaults($.datepicker.regional['ru']);

  $(function () {
    $("#datepicker-service").datepicker({
      onClose: function () {
        $('.overlay').css('display', 'none')
      },
      onSelect: function () {
        $('.overlay').css('display', 'block')
        setTimeout(() => {
          $('.overlay').css('display', 'block')
        }, 1);
        $('.modal-change-time').css('display', 'block')
        window.location.href = './new_record.html'
      },
    }).datepicker("setDate", new Date());
  });
  $('#datepicker-service').on('focus', function () {
    $('.overlay').css('display', 'block')
  })
})