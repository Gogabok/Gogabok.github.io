$(document).ready(function () {
  $("#toHistory").click(function () {
    $('html,body').animate({ scrollTop: $("#history").offset().top - 3 }, 500);
  })
  $(".arrow-bottom").click(function () {
    $('html,body').animate({ scrollTop: $("#history").offset().top - 3 }, 500);
  })
  $("#toComments").click(function () {
    $('html,body').animate({ scrollTop: $("#comments").offset().top - 3 }, 500);
  })

  if (localStorage.getItem("comment")) {
    $(".comments-wrapper").append(
      `<div class="comments-item">
        <div class="comments-item-header">
          <div class="image">
            <img ondragstart="return false" src="./images/userpic-1.png" alt="">
          </div>
          <div class="text">
            <p class="nickname">Гость</p>
            <p class="comments-date">Сейчас</p>
          </div>
        </div>
        <div class="comments-item-text">
          <p class="main-text">${localStorage.getItem("comment")}</p>
        </div>
      </div>`
    )
  }

  $(".make-comment").click(function () {
    if ($(".textarea").val()) {
      $(".comments-wrapper").append(
      `<div class="comments-item">
        <div class="comments-item-header">
          <div class="image">
            <img ondragstart="return false" src="./images/userpic-1.png" alt="">
          </div>
          <div class="text">
            <p class="nickname">Гость</p>
            <p class="comments-date">Сейчас</p>
          </div>
        </div>
        <div class="comments-item-text">
          <p class="main-text">${$(".textarea").val()}</p>
        </div>
      </div>`
    )
    localStorage.setItem("comment", $(".textarea").val())
    $(".textarea").val("")
  }

  })
})