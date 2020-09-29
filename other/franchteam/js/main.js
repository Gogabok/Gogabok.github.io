var elements = document.getElementsByClassName('phone-input');
for (var i = 0; i < elements.length; i++) {
  new IMask(elements[i], {
    mask: '+{7}(000)000-00-00',
  });
}

 
let currentQuestion = 1
let amountOfQuestions = 6
let answers = {}
let changeQuestionBlock = false

$(document).ready(function () {
  $(`.quiz-question .quiz-form__radio`).on('input', function (e) {
    if(!changeQuestionBlock) {
      changeQuestionBlock = true
      // $("#question-1 .quiz-form__item .quiz-blur").css('opacity', ".8")
      $(`#question-${currentQuestion} .quiz-form__item .quiz-blur`).css('opacity', "0")
      $(`#question-${currentQuestion} .quiz-form__item`).removeClass("active")
      $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')}`).addClass("active")
      $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')} .quiz-blur`).css('opacity', ".8")
      $(`.quiz-${currentQuestion} .quiz-next`).prop('disabled', false)
      if (currentQuestion === 1 && $(`input[name=question-${currentQuestion}]:checked`).attr('id') === "question-1-8") {
        $("#question-1-8-inputText").focus()
      } else {
        answers[currentQuestion] = $(`input[name=question-${currentQuestion}]:checked`).val()
        currentQuestion++
        changePage()
      }
      changeQuestionBlock = false
    }
    // $(`#question-1 .quiz-form__item- .quiz-blur`).css('opacity', ".8")
    // console.log($(`input[name=question-${currentQuestion}]:checked`).val())
  })
  $("#question-1-8-inputText").on("input", function (e) {
    if($("#question-1-8-inputText").val().length >= 2) {
      $("#question-1-8").attr('checked', true)
      $(`#question-${currentQuestion} .quiz-form__item .quiz-blur`).css('opacity', "0")
      $(`#question-${currentQuestion} .quiz-form__item`).removeClass("active")
      $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')}`).addClass("active")
      $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')} .quiz-blur`).css('opacity', ".8")
      $(`.quiz-${currentQuestion} .quiz-next`).prop('disabled', false)
    } else {
      $("#question-1-8").attr('checked', false)
      $(`#question-${currentQuestion} .quiz-form__item .quiz-blur`).css('opacity', "0")
      $(`#question-${currentQuestion} .quiz-form__item`).removeClass("active")
      // $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')}`).addClass("active")
      // $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')} .quiz-blur`).css('opacity', ".8")
      $(`.quiz-${currentQuestion} .quiz-next`).prop('disabled', true)
      
    }
  })
})

function changePage() {
  // for (let i = 0; i < amountOfQuestions; i++) {
  //   $(`.quiz-${currentQuestion}`).fadeIn()
  // }
  $([document.documentElement, document.body]).animate({
    scrollTop: $(".quiz-centering").offset().top
  }, 500);
  console.log(answers)

  $(".quiz-question").fadeOut()
  $(`.big-image`).fadeOut()
  $(".quiz-question").css("opacity", "0")
  $(`.quiz-${currentQuestion}`).css("opacity", "1")
  disabledButton()
  setTimeout(() => {
    $(".quiz-question").fadeOut()
    $(`.quiz-${currentQuestion}`).fadeIn()
    $(`.img-${currentQuestion}`).fadeIn()
    changeQuestionBlock = false
  }, 400);
  if (currentQuestion >= amountOfQuestions) {
    counterAnimate()
    $("main").css('padding-bottom', '120px')
    answers["way"] = $(`input[name=contacts]:checked`).val()
  }
}




$(".quiz-results input").on("input", function (e) {
  
  if ($(e.target).prop("type") === 'radio') {
    answers["way"] = $(e.target).val()
  } else {
    answers["phone"] = $(e.target).val()
  }

  if (answers["way"] && answers["phone"].length >= 16) {
    $("#contacts-form .button").prop('disabled', false)
  } else {
    $("#contacts-form .button").prop('disabled', true)
  }
})



$(".quiz-prev-active").on("click", function () {
  currentQuestion--
  answers[currentQuestion] = null
  $(`#question-${currentQuestion} .quiz-form__item .quiz-blur`).css('opacity', "0")
  $(`#question-${currentQuestion} .quiz-form__item`).removeClass("active")
  $(`#question-${currentQuestion}`)[0].reset()
  changePage()
})


function disabledButton() {
  $(`.quiz-${currentQuestion} .quiz-next`).prop('disabled', true)
}



$(".quiz-next").on("click", function () {
  if ($(`input[name=question-${currentQuestion}]:checked`).val() === 'false') {
    answers[currentQuestion] = $(`#question-1-8-inputText`).val()
  } else {
    answers[currentQuestion] = $(`input[name=question-${currentQuestion}]:checked`).val()
  }
  currentQuestion++
  changePage()
})








let anim = true




function counterAnimate() {
  $('.progress_round').css({ 'opacity': '1' })
  $('.progress_round').addClass('animate');

  if (!$('.percentage').hasClass('showArrow') && anim) {
    $(".spinner_block").fadeIn()
    anim = false
    $('.percentage').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: 100
      }, {
        duration: 6e3,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now) + '%');
        },
        complete: function () {
          $('.percentage').html(' <img src="img/checks.png"> ');
          $('.percentage').addClass('showArrow');
          $(".readiness__text").animate({ 'opacity': '1' }, 'normal');
        },
        start: function () { },
        fail: function () {  },
      });
      return false;
    });
  }
}


$(".header-sliderblock__button").on("click", function () {
  $([document.documentElement, document.body]).animate({
    scrollTop: $(".quiz-centering").offset().top
  }, 500);
})






$(document).ready(function () {
  $("#carousel").waterwheelCarousel({
    separation: 100
    // include options like this:
    // (use quotes only for string values, and no trailing comma after last option)
    // option: value,
    // option: value
  });
});


$("#contacts-form .button").on("click", function () {
  $("main").fadeOut(1)
  $(".page-results").fadeIn(1)
  setTimeout(() => {
    $([document.documentElement, document.body]).animate({
      scrollTop: $(".results-caption").offset().top
    }, 500);
    $(".contacts-form-phone-input[name=phone]").val(answers.phone)
  }, 2);
})




$(window).on('resize', function () {
  if ($(window).width() <= 720) {

    var windowHeight = $(window).height();
    $(document).on('scroll', function () {
      $('.quiz').each(function () {
        var self = $(this),
          height = self.offset().top;
        if ($(document).scrollTop() >= height - windowHeight) {
          $(".quiz-buttonlist").fadeIn()
        } else {
          $(".quiz-buttonlist").fadeOut()
        }
      });
    })
  }
})

$(document).ready(function () {
  if ($(window).width() <= 720) {

    var windowHeight = $(window).height();
    $(document).on('scroll', function () {
      $('.quiz-block').each(function () {
        var self = $(this),
          height = self.offset().top;
        if ($(document).scrollTop() >= height - windowHeight) {
          $(".quiz-buttonlist").fadeIn()
        } else {
          $(".quiz-buttonlist").fadeOut()
        }
      });
    })
  }


  // $('.quiz-logos').EZView();
  // console.log(EZView())





  const monthes = [
    'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
  ]
  let today = new Date();
  let after5days = new Date(today.getTime() + (24 * 60 * 60 * 1000) * 5);
  let dateAfter5days = `${after5days.getDate()} ${monthes[after5days.getMonth()]}`

  $(".dateTo").html(dateAfter5days)
})



// $(function () {
// });
