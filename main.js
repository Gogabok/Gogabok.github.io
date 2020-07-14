
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
let canAnimate = true
  function priceCalculate(id) {
    if (id || id === 0) {
      let item = prices.find(i => i.id === id)
      console.log(item)
      $(`.form-selector-item`).removeClass('active')
      let DOMitem = $(`#${item.id}`).addClass('active')
      activeItem = item
      $(".amount").html(item.amount)
      $(".price-span").html(item.price)
      localStorage.setItem('active-item', JSON.stringify(activeItem))
      $("a.btn").removeClass('disabled')
      if (canAnimate) {
        setTimeout(() => {
          $([document.documentElement, document.body]).animate({
            scrollTop: $("#pricing").offset().top - 50
          }, 500);
        }, 500);
      }
      canAnimate = true
    }
  }

$(document).ready(function () {
  $("a.btn").addClass('disabled')
  canAnimate = localStorage.getItem('active-item') ? false : true
  priceCalculate(localStorage.getItem('active-item') ? JSON.parse(localStorage.getItem('active-item')).id : false)
  

  
  $('.owl-carousel').owlCarousel({
    items: 1,
    nav: true,
  });
})

