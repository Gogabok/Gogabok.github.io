
    let prices =[
      {
        price: '199.00',
        realPrice: 199,
        id: 0,
        amount: 1,
      },
      {
        price: '398.00',
        realPrice: 398,
        id: 1,
        amount: 2,
      },
      {
        price: '597.00',
        realPrice: 597,
        id: 2,
        amount: 3,
      },
      {
        price: '796.00',
        realPrice: 796,
        id: 3,
        amount: 4,
      },
    ]

let activeItem = null
let canAnimate = false
  function priceCalculate(id, isFocus) {
    if (id || id === 0) {
      let item = prices.find(i => i.id === id)
      console.log(item)
      $(`.form-selector-item`).removeClass('active')
      if (localStorage.getItem('active-item')) {
        let DOMitem = $(`#${item.id}`).addClass('active')
        $("a.btn").removeClass('disabled')
      }
      activeItem = item
      $(".amount").html(item.amount)
      $(".price-span").html(item.price)
      localStorage.setItem('active-item', JSON.stringify(activeItem))
      if (canAnimate) {
        setTimeout(() => {
          $([document.documentElement, document.body]).animate({
            scrollTop: $("#pricing").offset().top - 50
          }, 500);
        }, 500);
      }
      canAnimate = true
      amountOfBuyingSet()
    }
  }

function amountOfBuyingSet () {
  let amount = activeItem.amount
  let text = ''
  if (amount === 0) {
    text = 'упаковок'
  } else if (amount === 1) {
    text = 'упаковка'
  } else if (amount >= 2) {
    text = 'упаковки'
  }
  $("#amountOfBuying").html(text)
}

  const monthes = [
    'Янв', 'Фев', 'Мар', 'Апр','Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'
  ]

$(document).ready(function () {
  $("a.btn").addClass('disabled')
  priceCalculate(localStorage.getItem('active-item') ? JSON.parse(localStorage.getItem('active-item')).id : 0, true)
  


  console.log($("#today"))

  if($("#today") && $("#tomorrow")) {
    let today = new Date();
    let tomorrow = new Date(today.getTime() + (24 * 60 * 60 * 1000));
    let afterTomorrow = new Date(tomorrow.getTime() + (24 * 60 * 60 * 1000));
    let dateTomorrow = `${tomorrow.getDate()} ${monthes[tomorrow.getMonth()]}`
    let dateAfterTomorrow = `${afterTomorrow.getDate()} ${monthes[afterTomorrow.getMonth()]}` 

    $("#today").html(dateTomorrow)
    $("#tomorrow").html(dateAfterTomorrow)
  }

  $('#amount-thanks').html(JSON.parse(localStorage.getItem('active-item')).amount)




})



$(document).on('scroll', function () {
  let height = $(".navigate-icon").outerHeight()
  let scrollHeight = $(document).scrollTop()
  if (height < scrollHeight) {
    $(".navigation").css('position', 'fixed')
    $("body").css('padding-top', '50px')
  } else {
    $(".navigation").css('position', 'relative')
    $("body").css('padding-top', '0px')
  }
})