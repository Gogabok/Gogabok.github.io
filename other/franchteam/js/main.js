var elements = document.getElementsByClassName('phone-input');
for (var i = 0; i < elements.length; i++) {
  new IMask(elements[i], {
    mask: '+{7}(000)000-00-00',
  });
}

 
let currentQuestion = 1
let amountOfQuestions = 5
let answers = {}
let changeQuestionBlock = false

$(document).ready(function () {
  $(".quiz input").on('input', function (e) {
    if(!changeQuestionBlock) {
      changeQuestionBlock = true
      // $("#question-1 .quiz-form__item .quiz-blur").css('opacity', ".8")
      $("#question-1 .quiz-form__item .quiz-blur").css('opacity', "0")
      $("#question-1 .quiz-form__item").removeClass("active")
      $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')}`).addClass("active")
      $(`.quiz .${$(`input[name=question-${currentQuestion}]:checked`).attr('id')} .quiz-blur`).css('opacity', ".8")
      if (currentQuestion === 1 && $(`input[name=question-${currentQuestion}]:checked`).attr('id') === "question-1-8") {
        $("#question-1-8-inputText").focus()
      } else {
        answers[currentQuestion] = $(`input[name=question-${currentQuestion}]:checked`).val()
        currentQuestion++
        changePage()
      }
    }
    // $(`#question-1 .quiz-form__item- .quiz-blur`).css('opacity', ".8")
    // console.log($(`input[name=question-${currentQuestion}]:checked`).val())
  })
})

function changePage() {
  // for (let i = 0; i < amountOfQuestions; i++) {
  //   $(`.quiz-${currentQuestion}`).fadeIn()
  // }
  $(".quiz-question").fadeOut()
  $(".quiz-question").css("opacity", "0")
  $(`.quiz-${currentQuestion}`).css("opacity", "1")
  setTimeout(() => {
    $(".quiz-question").fadeOut()
    $(`.quiz-${currentQuestion}`).fadeIn()
    changeQuestionBlock = false
  }, 400);
}