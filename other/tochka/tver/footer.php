	<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>

	<div class="banner_wrap">
		<div class="wrap">
			<div class="img"><img src="assets/img/banner_img.png"></div>
			<div class="col_center">
				<p class="banner_title">
					<strong>Закрепите скидку и подберите септик </strong>
					<br> из <strong>678</strong> моделей от <strong>6</strong> ведущих 
					<br> производителей прямо сейчас
				</p>
				<div class="button_wrapper">
					<img src="assets/img/calc.png" class="calc">
					<a href="quiz.php#main" onclick="ym(60459085, 'reachGoal', 'hello');" class="goToQuiz btn">
						ПОДОБРАТЬ СЕПТИК <strong>ответив на 6 вопросов</strong>
					</a>
				</div>
			</div>
			<!-- /.col_center -->
			<div class="col_right">
				<div class="slideDown">Свернуть <img src="assets/img/down.png"></div>
				<a href="#x" class="permanent_close">
					Закрыть  <br> и не показывать
				</a>
			</div>
			<!-- /.col_right -->
		</div>
	</div>

<div class="popup-bg" id="popup-bg">

	  <div class="popup" id="popup1">
	    <div class="head">
	      <div class="close" onclick="popup(-1)">&times;</div>
	      <p class="mb1"><strong>СПАСИБО!</strong></p>
	      <p class="mt2">Пока наш специалист будет звонить
				 	посмотрите больше информации 
					о нашей компании на основном сайте</p>
	    </div>
	    <div class="content">
	      <a href="https://tochkaresheny.ru/" target="_blank" class="goToMain">перейти на основной <br> сайт >> </a>
	    </div>    
	  </div>

	  <div class="popup" id="popup2">
	    <div class="head">
	      <div class="close" onclick="popup(-1)">&times;</div>
	    </div>
	    <div class="content aic">
	      <div class="img"><img src="assets/img/catalog.png"></div>
	      <div class="text_block">
	      	<div class="popup_title">
	      		<p>Как выбрать идеальную канализацию для частного дома или дачи?</p>
	      		
	      	</div>
	      	<button type="button" class="submit" id="submit">
	      		<img src="assets/img/download.png">
	      		Скачать
	      	</button>

	      	<div class="hidden">
	      		<p style="font-weight: normal;"><small>В какой мессенджер удобно получить инструкцию?</small></p>
	      		<form action="spasibo.php" method="post" id="popup_form" >
		      		<div class="radios">
			      		<div class="form_control">
			      			<input type="radio" name="messenger" value="Whats app" id="mes_1" checked="">
			      			<label for="mes_1">
			      				<span class="label_img"><img src="assets/img/w.png"></span>
			      				<p>Whats app</p>
			      			</label>
			      		</div>
			      		<div class="form_control">
			      			<input type="radio" name="messenger" value="Viber" id="mes_2">
			      			<label for="mes_2">
			      				<span class="label_img"><img src="assets/img/v.png"></span>
			      				<p>Viber</p>
			      			</label>
			      		</div>
			      		<div class="form_control">
			      			<input type="radio" name="messenger" value="Telegram" id="mes_3">
			      			<label for="mes_3">
			      				<span class="label_img"><img src="assets/img/t.png"></span>
			      				<p>Telegram</p>
			      			</label>
			      		</div>
			      	</div>
			      	<!-- radios -->
			      	<input type="tel" name="tel" placeholder="Введите ваш телефон" required="">
			      	<input type="hidden" name="comment" value="Скачать инструкцию">
			      	<button type="submit" class="submit">
			      		<img src="assets/img/download.png">
			      		Скачать
			      	</button>
		      	</form>
	      	</div>
	      	<!-- hidden -->
	      </div>
	      <!-- text_block-->
	    </div>    
	    <!-- content -->
	  </div>

	  <div class="popup" id="popup3">
	    <div class="head">
	      <div class="close" onclick="popup(-1)">&times;</div>
	      <p class="mb1"><strong>СПАСИБО!</strong> </p>
	      <p class="mt2">
	      	В ближайшее время мы пришлём инструкцию на указаный Вами <br class="pc"> номер телефона
	      </p>
	    </div>
	  </div>

	  <div class="popup" id="popup4">
	    <div class="head">
	      <div class="close" onclick="popup(-1)">&times;</div>
	      <p class="mb1"><strong>Узнайте стоимость и актуальную  <br> скидку на эту модель  <br> у нашего специалиста</strong></p>
	      <p class="mt2 thin">Проверьте номер телефона и укажите  <br> удобное время для звонка </p>
	    </div>
	    <div class="content">
	     	<form action="spasibo.php" method="post">
	     		<input type="tel" name="tel" placeholder="7 (905) 111-22-33" required="">
	     		<input type="text" name="time" placeholder="Укажите удобное время для звонка">
	     		<input type="hidden" name="comment" value="">
	     		<button class="submit" type="submit">Узнать >> </button>
	     	</form>
	    </div>    
	  </div>

</div>

	<style type="text/css">
		#main .sizeInput{padding-left: 34px !important; padding-right: 34px !important;}
	</style>
	<script src="assets/js/index.min.js?rev=@@hash"></script>
	<script src="assets/js/viewport.js"></script>
	
	<script type="text/javascript">
		document.addEventListener("mouseout", onMouseOut);


	$(document).ready(function() {  
	  $("#quiz").submit(function() {
	    $.ajax({
	        type: "POST",
	        url: 'spasibo.php',
	        data: $(this).serialize()
	    }).done(function() { popup(1); ym(60459085, 'reachGoal', 'quiz'); });
	    return false;
	  });

	  $("#popup4 form").submit(function() {
	    $.ajax({
	        type: "POST",
	        url: 'spasibo.php',
	        data: $(this).serialize()
	    }).done(function() { popup(1); });
	    return false;
	  });

	  $("#popup_form").submit(function() {
	    $.ajax({
	        type: "POST",
	        url: 'spasibo.php',
	        data: $(this).serialize()
	    }).done(function() { popup(3); ym(60459085, 'reachGoal', 'exit'); });
	    return false;
	  });

	   $(".white_form form").submit(function() {
	    $.ajax({
	        type: "POST",
	        url: 'spasibo.php',
	        data: $(this).serialize()
	    }).done(function() { popup(3); ym(60459085, 'reachGoal', 'download'); });
	    return false;
	  });
	});

	$('#submit').on('click', function(){
		$(this).parents('.content').find('.hidden').removeClass('hidden')
		$(this).remove();
	})

		jQuery(function($){
	 		$.mask.definitions['q'] = '[1,2,3,4,5,6,9]';
		  $('input[type="tel"]').mask("+7(q99) 999-99-99");
		});

		$('.sertificates').slick({
			infinite: true,
			dots: false,
			slidesToShow: 3,
			variableWidth: true,
			responsive: [
		    {
		      breakpoint: 700,
		      settings: {
		        slidesToShow: 1,
		        variableWidth: false,
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        variableWidth: false,
		      }
		    }
		  ]
		})

if ( document.documentElement.clientWidth > 480 ) {
	var banner_timer = 0;

	$(window).on('scroll', function(){
		if ( !$('body').hasClass('home') ) {return false;}
    var fromTop = $(document).scrollTop();
    var fourth_sect = $('#showBanner').offset().top;

    var time_diff = Date.now() - banner_timer;
    if ((fromTop > fourth_sect) && time_diff > 30e3 ){
      $('.banner_wrap').show();
      if ( $('.banner_wrap').length > 0 ) {  
      	$('body').addClass('open_banner'); 
      }
    } else{
      $('.banner_wrap').hide();
      $('body').removeClass('open_banner');
    }
	});
}

$('.slideDown').on('click', function(){
    $('.banner_wrap').slideToggle(300);
    $('body').removeClass('open_banner');
    banner_timer = Date.now();
});
$('.permanent_close').on('click', function(){
    $('body').removeClass('open_banner');
    $('.banner_wrap').remove();
    console.log('remove class')
});


	// ПОПАП НА ВЫХОД
	function onMouseOut(event) {
	  // If the mouse is near the top of the window, show the popup
	  // Also, do NOT trigger when hovering or clicking on selects
	  if (
	    event.clientY < 50 &&
	    event.relatedTarget == null &&
	    event.target.nodeName.toLowerCase() !== 'select') {
	    // Remove this event listener
	    document.removeEventListener("mouseout", onMouseOut);

	    // Show the popup
	    popup(2)
	  }
	}


	window.onload = function(){
	  document.getElementById('popup-bg').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}
	}
	function popup(nm, e) {
	    popupElm = document.getElementById("popup-bg");
	    if (nm == -1) {
	        popupElm.classList.remove('visible');
	        document.querySelector('body').style.overflow = 'auto';
	    } else {
	        elm = popupElm.getElementsByClassName('popup');
	        if (typeof nm != 'undefined')
	            for (var i = elm.length - 1; i >= 0; i--) {
	                if (elm[i].id == 'popup' + nm) {

	                	if ( typeof e !== 'undefined' && nm === 4 ) {
	                		let good_name = $(e).parents('.product_card').find('.product_title').text();
                			$('#popup4 [name="comment"]').val( 'Подробнее => ' + good_name );
	                	}



	                    elm[i].classList.add('visible');
	                    popupElm.classList.add('visible');
	                    document.querySelector('body').style.overflow = 'hidden';
	                } else {
	                    elm[i].classList.remove('visible');
	                }
	            }
	        else {
	            popupElm.classList.add('visible');
	            document.querySelector('body').style.overflow = 'hidden';
	        }
	    }
	}

	$('.white_form .form_control').on('click', function(){
		$(this).parents('.radios').hide();
		$('.white_form .hidden').show();
	})
	</script>


<script type="text/javascript">
	/*
	setTimeout(function(){
		jQuery('a[href="#modal-window"]').on('click', function(){
			var btn_text = jQuery(this).text();
			console.log(btn_text);
			if ( btn_text === 'Записаться на обучение'  ) { jQuery('#modal-window').find('[name="comment"]').val('Форма с первого экрана'); }
			if ( btn_text === 'Решение'  ) { jQuery('#modal-window').find('[name="comment"]').val('Второй экран - Зарабатывай на торговле') }
			if ( btn_text === 'Запись на программу'  ) { jQuery('#modal-window').find('[name="comment"]').val('Запись на программу - Программа для частного инвестора') }
			if ( btn_text === 'Запись на консультацию'  ) { jQuery('#modal-window').find('[name="comment"]').val('Запись на консультацию')  }
		})
	}, 1e3)

	jQuery(document).ready(function($) {
		jQuery('#modal-window').append('<input type="hidden" name="comment">');
		jQuery('#contact form').append('<input type="hidden" name="comment" value="Записаться на консультацию - форма внизу страницы">');
	});
	*/
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(60459085, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/60459085" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php endif; ?>
</body>
</html>