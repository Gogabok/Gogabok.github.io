<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
<div class="popup-bg" id="popup-bg">

	  <div class="popup" id="popup1">
	    <div class="head">
	      <div class="close" onclick="popup(-1)">&times;</div>
	      <span><strong>СПАСИБО!</strong> <br style="display: block !important"> Пока менеджер рассчитывает  <br> стоимость бассейна посмотрите  <br> больше информации о нашей  <br> компании на основном сайте</span>
	    </div>
	    <div class="content">
	      <a href="http://akva-sg.ru/bassejnyi/" target="_blank" class="goToMain">Перейти на основной сайт</a>
	      <a href="https://www.instagram.com/akvastroigrand.pools/" class="insta_logo" target="_blank"><img src="assets/img/insta_logo.png"></a>
	      <a href="https://www.instagram.com/akvastroigrand.pools/" target="_blank" class="mt1 subscribe">Подписывайтесь на наш инстаграм</a>
	    </div>    
	  </div>

	  <div class="popup" id="popup3">
	    <div class="head">
	      <div class="close" onclick="popup(-1)">&times;</div>
	      <span><strong>СПАСИБО!</strong> <br style="display: block !important"> В ближайшее время мы пришлём инструкцию на указаный Вами <br class="pc"> номер телефона</span>
	    </div>
	    <!-- <div class="content">
	      <a href="http://akva-sg.ru/bassejnyi/" target="_blank" class="goToMain">Перейти на основной сайт</a>
	      <a href="https://www.instagram.com/akvastroigrand.pools/" class="insta_logo" target="_blank"><img src="assets/img/insta_logo.png"></a>
	      <a href="https://www.instagram.com/akvastroigrand.pools/" target="_blank" class="mt1 subscribe">Подписывайтесь на наш инстаграм</a>
	    </div>     -->
	  </div>

	  <div class="popup" id="popup2">
	    <div class="head">
	      <div class="close" onclick="popup(-1)">&times;</div>
	    </div>
	    <div class="content aic">
	      <div class="img"><img src="assets/img/exit_book.png"></div>
	      <div class="text_block">
	      	<p class="popup_title">Скиммерный или переливной! <br> Какой бассейн выбрать?</p>
	      	<p class="sub hidden">В какой мессенджер удобно получить инструкцию?</p>
	      	<button type="button" class="submit" id="submit">
		      		<img src="assets/img/download.png">
		      		Скачать
		      	</button>

	      	<div class="hidden">
	      		<form action="spasibo.php" method="post" id="popup_form">
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
			      		<div class="form_control">
			      			<input type="radio" name="messenger" value="SMS" id="mes_4">
			      			<label for="mes_4">
			      				<span class="label_img"><img src="assets/img/s.png"></span>
			      				<p>SMS</p>
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

</div>

<script src="assets/js/index.min.js?rev=@@hash"></script>
<script src="assets/js/viewport.js"></script>

<script type="text/javascript">
	anim = true;
	$clear_input 		= $('input');
	$clear_textarea = $('textarea');
	$clear_checkbox = $('[type="checkbox"]');
	$clear_radio 		= $('[type="radio"]');
	var banner_timer = '';

	// $.each($clear_checkbox, function(index, val) { $($clear_checkbox[index]).prop('checked', false) });
	// $.each($clear_radio, function(index, val) { $($clear_radio[index]).prop('checked', false) });
	// $.each($clear_textarea, function(index, val) { $($clear_textarea[index]).val('') });
	// $.each($clear_input, function(index, val) { $($clear_input[index]).val('') });


		const quizSteps = 7;
		let $progressBar_width = $('.progressBar').width();
		const step = $progressBar_width / quizSteps;

		$('.form_control').on('click', toggleInputProp);
		//$('.answer_block').on('click', toggleInputProp);
		$('.change_block textarea, .change_block input[type="text"]').on('click input blur focus change', setTextAreaValue);
		$('.top_phone').on('click input blur focus change keyup keydown', checkPhone);
		$(document).on('click', '.goNext, .getResultBtn',  goNext);
		$('.goBack').on('click', goBack);
		//$('.switchPresent').on('click', switchPresent);
		$('.presents .form_control').on('click', switchPresent);

		$(".scroll").niceScroll();

		document.addEventListener("mouseout", onMouseOut);

		function initQuizSlider () {
			$('.slider').slick({
				infinite: true,
			})
		}

		function setTextAreaValue () {
			if ( $(this).val().length > 1 ) {
				$(this).parents('.form_control').find('.fake_checkbox').addClass('checked');
				$(this).parents('.form_control').find('.fake_radio').addClass('checked');
				let radios = $(this).parents('.change_block').find('[type="radio"]');

				if ( $(radios).length > 0 ) {
					$.each(radios, function(index, val) {
						 $(radios[index]).prop('checked', false)
					});
				}
			}
			else{
				$(this).parents('.form_control').find('.fake_checkbox').removeClass('checked')
				$(this).parents('.form_control').find('.fake_radio').removeClass('checked')
			}
			toggleNextBtn ();
		}

		function toggleNextBtn () {
			r = false;
			c = false;
			t = false;
			i = false;
			let radios 				 = $('.change_block.active').find('input[type="radio"]');
			let checkboxes 		 = $('.change_block.active').find('input[type="checkbox"]');
			let textarea_block = $('.change_block.active').find('.textarea_block');
			let input_text 	   = $('.change_block.active').find('input[type="text"]');

			if ( radios.length > 0 ) {
				$.each(radios, function(index, val) {
					if ( $(radios[index]).prop('checked') ) {return r = true;}
				});
			}
			else{ r = true; }
			if ( checkboxes.length > 0 ) {
				$.each(checkboxes, function(index, val) {
					if ( $(checkboxes[index]).prop('checked') ) {return c = true;}
				});
			}
			else{ c = true }

			if ( 
					r && c
					|| 
					(
						textarea_block.length > 0 
						&& $(textarea_block).find('textarea').val().length > 1
					) 
				) 
			{
				$('.change_block.active .goNext').removeAttr('disabled');
			}
			else{
				$('.change_block.active .goNext').attr('disabled', 'disabled')
			}
		}

		function counterAnimate () {
			$('.progress_round').css({ 'opacity' : '1' })
			$('.progress_round').addClass('animate');

			if ( !$('.percentage').hasClass('showArrow') && anim ){
				anim = false
				console.log('else')
				console.log($('.percentage'))
				$('.percentage').each(function () {
				   $(this).prop('Counter',0).animate({
			        Counter: 100
			    	}, {
			        duration: 6e3,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(Math.ceil(now) + '%');
			        },
			        complete : function () {
			        	console.log('complete')
		        		$('.percentage').html(' <img src="assets/img/count_done.png"> ');
		        		$('.percentage').addClass('showArrow');
		        		$('#main .primernaya').animate({ 'opacity' : '1' }, 'normal');
			        },
			        start: function () { console.log('start') },
			        fail: function () { console.log('fail') },
			    });
			   	return false;
				});
			}
		}


		function toggleInputProp (e) {
			console.log(e.target)
			if ( 
				e.target.className !== 'loopa' 
				&& e.target.className !== 'slick-prev slick-arrow' 
				&& e.target.className !== 'slick-next slick-arrow'  
				&& e.target.className !== 'info_icon'  
			) {  
				$this = $(this);
				setTimeout(function(){
					if ( $($this).find('input').prop('checked') === true ) {
						$($this).find('input').prop('checked', false);
					}
					else{
						$($this).find('input').prop('checked', true);
						$($this).parents('.change_block').find('.fake_radio').removeClass('checked');
					}
					toggleNextBtn ();
					let $radios = $($this).parents('.change_block').find('[type="radio"]');
					if ( $radios.length > 0 ) {
						$('.change_block.active').find('.goNext').removeAttr('disabled');
						setTimeout(function(){
							$('.change_block.active').find('.goNext').click();
						}, 100)
						//$('.change_block.active').find('.goNext').click();
						//return;
					}
				}, 100)
			} // if 
		}

		jQuery(function($){
	 		$.mask.definitions['q'] = '[1, 2, 3, 4, 5, 6, 9]';
		  $('input[type="tel"]').mask("+7(q99) 999-99-99");
		});

		var lastAnimateTime = 0;
		function nextStepProgressBar () {
			let $current_step = $('.change_block.nextInQueue').data('step');
			$('.progressBar #current_step').html( $current_step + '');

			if ( Date.now() - lastAnimateTime > 1000 ) {
				let $bar_width = $('.bar').width();
				$('.bar').animate({
					'width' : $bar_width + step + 'px'
				}, 500)
				lastAnimateTime = Date.now();
			}
		}

		function prevStepProgressBar () {
			let $current_step = $('.change_block.active').prev('.change_block').data('step');
			$('.progressBar #current_step').html( $current_step + '');

			if ( Date.now() - lastAnimateTime > 2000 ) {
				let $bar_width = $('.bar').width();
				$('.bar').animate({
					'width' : $bar_width + step + 'px'
				}, 500)
				lastAnimateTime = Date.now();
			}
		}



		function goNext () {
			console.log('goNext'); console.log( $(this) );

			if ( $(this).attr('disabled') === 'disabled' ) {
				if ( $(this).hasClass('goNext') ) {$(this).append('<span class="error">Пожалуйста, выберите вариант ответа<span>');}
				if ( $(this).hasClass('getResultBtn') ) {$(this).parents('.buttons.phoneImg').prepend('<span class="error">Чтобы получить результат, введите телефон<span>');}
				
				$('.goNext .error, .buttons.phoneImg .error').fadeIn();
				setTimeout(function(){ $('.goNext .error, .buttons.phoneImg .error').fadeOut().remove(); }, 3e3)
				return false;
			}

			$this = $(this);
			var destination = $('#anchor').offset().top;
	    $("html:not(:animated),body:not(:animated)").animate({  scrollTop: destination+120 }, 500);

			if ( $(this).hasClass('getResultBtn') ) { 
				$(this).parents('.wrap').css(
					{
						'overflow' : 'visible', 
						'z-index' : '999',
						'padding-bottom' : '0px'
					}
				)

				$(this).parents('.change_block').next('.change_block').addClass('openLock');
				let $phone = $('.top_phone').val();
				$('.top_phone').remove();
				$('.bottom_phone').val( $phone );
				
				$.ajax({
		        type: "POST",
		        url: 'spasibo.php',
		        data: $(this).parents('form').serialize()
		    }).done(function() {} );
			}

			nextStepProgressBar ();

			$('.change_block.active').animate({ 'opacity' : '0' }, 2e3,)

			$(".change_block.nextInQueue").animate({ 
					'top' : '20px', 
					'opacity' : '1'
			}, 2e3);
			setTimeout(function(){
				$($this).parents('.change_block.active').removeClass('active').next('.change_block.nextInQueue').addClass('active').removeClass('nextInQueue').next('.change_block').addClass('nextInQueue');
				//$('.change_block.nextInQueue').addClass('active').removeClass('nextInQueue');
				$('.change_block.active').next('.change_block').addClass('nextInQueue');

				if ( $('.change_block.active.white_block').length > 0 ) {
					$('.bg_video').css({'width' : '5000px'})
				}

				if ( $('.change_block.active .slider').length > 0 ) { initQuizSlider() }
				if ( $('.change_block.active .progress_round').length > 0 ) {

					if ( $(".progress_round:in-viewport").length > 0 && !$('.percentage').hasClass('showArrow') ) { counterAnimate (); }
					$(window).scroll(function() {
						setTimeout(function(){
							if ( $(".progress_round:in-viewport").length > 0 && !$('.percentage').hasClass('showArrow') ) { counterAnimate (); }
						}, 1000)
					});
				}
			}, 2.1e3)

			if ( document.documentElement.clientWidth < 800 ) {
		    var destination = $('#main').offset().top;
		    $("html:not(:animated),body:not(:animated)").animate({  scrollTop: destination }, 500);
			}
		}
		// goNext

		$('.inform_block, .info_icon').hover(function(){
			$(".scroll").getNiceScroll().resize();
		}, function(){})

		function goBack () {
			if ( $(this).attr('disabled') === 'disabled' ) {return false;}

			var destination = $('#anchor').offset().top;
	    $("html:not(:animated),body:not(:animated)").animate({  scrollTop: destination }, 500);

    	prevStepProgressBar ();

			$('.change_block.active').animate({ 'opacity' : '0' }, 1e3,)
			$('.change_block.nextInQueue').removeClass('nextInQueue');
			$('.change_block.active').prev('.change_block').addClass('nextInQueue');

			$('.nextInQueue').animate({
				'top' : '20px', 'opacity' : '1'
			}, 1e3, function(){
				$('.change_block.active').removeClass('active');
				$('.change_block.nextInQueue').addClass('active').removeClass('nextInQueue');
				$('.change_block.active').next('.change_block').addClass('nextInQueue');

				$('.nextInQueue').attr('style', function(i, style){
				    return style && style.replace(/top[^;]+;?/g, '').replace(/opacity[^;]+;?/g, '');
				});

				if ( $('.change_block.active .slider').length > 0 ) { initQuizSlider() }
				if ( $('.change_block.active .progress_round').length > 0 ) {
					counterAnimate ();
				}
			})

			initStick();

			//if ( document.documentElement.clientWidth < 800 ) {
		    //var destination = $('#anchor').offset().top;
		    //$("html:not(:animated),body:not(:animated)").animate({  scrollTop: destination }, 500);
			//}
		}

		function switchPresent () {
			console.log('switchPresent')
			$this = $(this);

			setTimeout(function(){
				let radio = $('.switchPresent input[type="radio"]:checked');
				let src = $(radio).parents('.form_control').find('.img img').attr('src');
				let name = $(radio).parents('.form_control').find('label').text();
				console.log('src')
				console.log(src)
				console.log(name)
				$('.presentBlock img').attr('src', src);
				$('.present_name').html( name );

			}, 100)
		}


		function checkPhone() {
			console.log( $(this).val().includes('_') )
			if ( $(this).val().length > 1 && !$(this).val().includes('_')  ) {
				$('.getResultBtn').removeAttr('disabled');
			}
			else{
				$('.getResultBtn').attr('disabled', 'disabled');
			}
		}


jQuery("a.scrollto").click(function() {
    var elementClick = jQuery(this).attr("href")
    var destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
    }, 500);
    return false;
});

jQuery("body:not(.home) a.scroll_to_anchor").click(function() {
    var elementClick = jQuery(this).data("href")
    var destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
    }, 500);
    return false;
});


window.onload = function(){
  document.getElementById('popup-bg').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}
}
function popup(nm) {
    popupElm = document.getElementById("popup-bg");
    if (nm == -1) {
        popupElm.classList.remove('visible');
        document.querySelector('body').style.overflow = 'auto';
    } else {
        elm = popupElm.getElementsByClassName('popup');
        if (typeof nm != 'undefined')
            for (var i = elm.length - 1; i >= 0; i--) {
                if (elm[i].id == 'popup' + nm) {
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


$(document).ready(function() {  
  $("#quiz").submit(function() {
    $.ajax({
        type: "POST",
        url: 'spasibo.php',
        data: $(this).serialize()
    }).done(function() { popup(1) });
    return false;
  });

  $("#popup_form").submit(function() {
    $.ajax({
        type: "POST",
        url: 'spasibo.php',
        data: $(this).serialize()
    }).done(function() { popup(3) });
    return false;
  });
});

$('#submit').on('click', function(){
	$(this).parents('.content').find('.hidden').removeClass('hidden')
	$(this).remove();
})


			$('.home_slider').slick({
				infinite: true,
				draggable: false,
				dots: false,
				responsive: [
			    {
			      breakpoint: 800,
			      settings: {
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        //slidesToShow: 2,
			        //slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			      	dots: true
			        //slidesToShow: 1,
			        //slidesToScroll: 1
			      }
			    }
			  ]
			});

			$('.sertificates').slick({
				infinite: true,
				dots: false,
				slidesToShow: 4,
				 responsive: [
			    {
			      breakpoint: 810,
			      settings: {
			        slidesToShow: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
			})


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


$(window).on('resize', function() {
    if ( document.documentElement.clientWidth > 480 ) {
    	setTimeout(function(){
    		$(".home_slider.pc .twentytwenty-container").twentytwenty();
    	}, 1e3)
    }
});

// ДО/ПОСЛЕ + БАННЕР
if ( document.documentElement.clientWidth > 480 ) {
	jQuery(document).ready(function($) {
		$(".home_slider.pc .twentytwenty-container").twentytwenty();
	});

	$(window).on('scroll', function(){
		if ( !$('body').hasClass('home') ) {return false;}
    var fromTop = $(document).scrollTop();
    var fourth_sect = $('#showBanner').offset().top
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


$('.sizeInput').on('input blur change focus keyup keydown', function(){
	if ( $(this).val().length > 0 ) {
		$(this).addClass('filled');
		let inputs = $(this).parents('.column').find('.sizeInput');
		let input_counter = 0;
		$.each(inputs, function(index, val) {
			 if ( $(inputs[index]).val().length < 1 ) {
			 	$(inputs[index]).addClass('filled');
			 	return false;
			 }
			 else{
			 	++input_counter;
			 	if ( input_counter >= inputs.length) {
			 		$(this).parents('.change_block').find('.goNext').removeAttr('disabled');
			 	}
			 }
		});
	}
	else{
		$(this).removeClass('filled')
	}
})




function initStick () {
	// /******************               STICKY MENU                 **************************/


	// // Create a clone of the menu, right next to original.
	// $('#main .change_block.active .question').addClass('original').clone().insertAfter('#main .change_block.active .question').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

	// scrollIntervalID = setInterval(stickIt, 10);


	// function stickIt() {

	//   var orgElementPos = $('.original').offset();
	//   orgElementTop = orgElementPos.top;               

	//   if ($(window).scrollTop() >= (orgElementTop)) {
	//     // scrolled past the original position; now only show the cloned, sticky element.

	//     // Cloned element should always have same left position and width as original element.     
	//     orgElement = $('.original');
	//     coordsOrgElement = orgElement.offset();
	//     leftOrgElement = coordsOrgElement.left;  
	//     widthOrgElement = orgElement.css('width');
	//     $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
	//     $('.original').css('visibility','hidden');
	//   } else {
	//     // not scrolled past the menu; only show the original menu.
	//     $('.cloned').hide();
	//     $('.original').css('visibility','visible');
	//   }
	// }
	// /******************               STICKY MENU                 **************************/
}
initStick()


// Loads the YouTube IFrame API JavaScript code.
// var tag = document.createElement('script');
// tag.src = "https://www.youtube.com/iframe_api";
// // Inserts YouTube JS code into the page.
// var firstScriptTag = document.getElementsByTagName('script')[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// var player;

// // onYouTubeIframeAPIReady() is called when the IFrame API is ready to go.
// function onYouTubeIframeAPIReady() {
//   	player = new YT.Player('player', {
//     	height: '200%',
//       width: '200%',
//       videoId: 'qwz88S1P0os',
//       playerVars: 
//       	{ 
//       		'autoplay': 1, 
//       		'controls': 0, 
//       		'showinfo': 0, 
//       		'rel': 0, 
//       		'enablejsapi':1, 
//       		'wmode' : 'transparent'
//       	},
//       events : {
//      	 	'onReady' : pkOnPlayerReady,
//         'onStateChange' : pkOnPlayerStateChange
//       }
//   	});
// }

// function pkOnPlayerStateChange(e) {
//   	var frm = $(e.target.getIframe());
//   	if (e.data === YT.PlayerState.ENDED) {
//       if ('player' === frm.attr('id')) {
//           player.playVideo();
//       }
//   	}
//   	if (e.data === YT.PlayerState.BUFFERING) {
//       if ('player' === frm.attr('id')) {
//          e.target.setPlaybackQuality('hd720');
// 		}
//   	}
// }
// function pkOnPlayerReady(e) {
// 	player.mute();
//  	e.target.setPlaybackQuality('hd720');
// }

// //Load a youtube pixel
// var pkEnableYoutube = function() {
//      var deferred = jQuery.Deferred();
//      var img = new Image();
//      img.onload = function() { return deferred.resolve(); };
//      img.onerror = function() { return deferred.reject(); };
//      img.src = "https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif?"+ new Date().getTime();
//      return deferred.promise();
// };



	</script>
<style type="text/css">
	#main .question{background: #111f3f;}
</style>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(30233479, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/30233479" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php endif; ?>
</body>
</html>