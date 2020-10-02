<style type="text/css">
	.promo_logo{position: absolute; right: 80px; top: 150px; }
	@media all and (max-width:800px){
		.promo_logo{right: 10px;}
	}
	@media all and (max-width:680px){
		.promo_logo{top: 100px;}
	}
@media all and (max-width:650px){
	.promo_logo {position: relative; top: 0; margin-top: 10px; right: 0; }
	#s01 .rassrochka{top: 350px;}
}
@media all and (max-width:320px){
	.promo_logo {position: relative; top: 0; margin-top: 10px; right: 0; }
	/*#s01 .rassrochka{top: 350px;}*/
	#s01 .h1{font-size: 24px;}
}
</style>

	<section id="s01">
		<div id="nav">
			<div class="wrap flex aic">
				<div class="col logo_col">
					<div class="logo"><img src="assets/img/logo.png?v=1"></div>
					<p class="logo_text">Продажа и установка  <br> автономных канализаций <br> для частного дома и дачи</p>
				</div>
				<!-- /.col -->
				<div class="col tar">
					<a href="tel:+7 (495) 127-79-90" class="phone">+7 (495) 127-79-90</a>
					<span class="online">сейчас работаем</span>
				
				</div>
				<!-- /.col -->
			</div>
		</div>

		<div class="wrap tac">
			
			<div class="septiki"><img src="assets/img/septik_1.png?v=1"></div>
			<!-- septiki -->
				
			<a class="yandex" href="#x" target="_blank">
				<div class="inner">
					<p class="big">4.8</p>
					<p class="yandex_text">
						рейтинг компании
						<br> на <span>Я</span>ндекс Отзывы
					</p>
				</div>
			</a>
			<!-- yandex -->

			<h1 class="h1">
				<span>Подберите</span> подходящую <span>модель септика</span>
				<br style="display: block !important;"> по приемлемой цене <br class="mob"> у официального дилера
				<br> за 1 минуту
			</h1>
			<p class="subtitle">
				Воспользуйтесь шансом 
				<span id="date"></span>
			</p>

			<div class="promo_logo"><img src="assets/img/llooggoo.png"> </div>


			<div class="sale">
				<p>
					Акция
					<br><strong>80%</strong>
					<br>Скидка на 
					<br>установку
				</p>
			</div>
			<!-- /.sale -->
			<img src="assets/img/rass.png" alt="" class="rassrochka">
			<!-- rassrochka -->

			<div class="line"></div>
			<p class="button_text">
				Закрепите скидку и подберите септик 
				<br> из <span>678</span> <strong>моделей</strong> от <span>6</span> <strong>ведущих</strong> 
				<br> <strong>производителей</strong>  прямо сейчас
			</p>

			<div class="clearfix"></div>

			<div class="button_wrapper">
				<img src="assets/img/calc.png" class="calc">
				<a href="quiz.php#main" onclick="ym(60459085, 'reachGoal', 'main');" class="btn">
					ПОДОБРАТЬ СЕПТИК
					<br>ответив на 6 вопросов
				</a>
			</div>
			<div class="podbor">Подбор качественный и бесплатный <br> Данные защищены</div>
		</div>
	</section>

<script>
	let $date = document.querySelector('#date');
	//let today = new Date();
	var options = {
	  //era: 'long',
	  //year: 'numeric',
	  month: 'long',
	  day: 'numeric',
	  //weekday: 'long',
	  //timezone: 'UTC',
	  //hour: 'numeric',
	  //minute: 'numeric',
	  //second: 'numeric'
	};
	let addDays = 2;
	let date = new Date();
	date.setDate(date.getDate() + addDays);
	let m = date.getMonth()+1;
	let d = date.getDate();
	date = date.toLocaleString("ru", options)
	$date.innerHTML = 'До ' + date;
</script>