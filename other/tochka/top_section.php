

	<section class="top-section">
		<div class="top-section-header">
			<div class="top-section-header-wrapper">
				<div class="top-section-header-logo">
					<img src="./assets/img/logo.png" ondragstart="return false" alt="">
					<span class="top-section-header-logo-desc">Продажа и установка автономных систем канализации для частного дома и даче на юге России</span>
				</div>
				<div class="top-section-header-info">
					<div class="top-section-header-info-main">
						<span class="top-section-header-info-main-adress">
							<img src="./assets/img/adress-icon.png" ondragstart="return false" alt="">
							Краснодар:
						</span>
						<a class="top-section-header-info-main-phone" href="tel:88612040994">
							+7 (861) 204-09-94
						</a>
					</div>
					<div class="top-section-header-info-extra">
						<span class="changeAdress">Изменить</span>
						<span class="workingNow">сейчас работаем</span>
					</div>
				</div>
			</div>
		</div>
		<div class="top-section-main">
			<h1 class="top-section-main-h1">Какой септик подойдёт именно вам?</h1>
			<h2 class="top-section-main-h2">Подберите подходящую модель очистного сооружения
			по приемлемой цене от официального дилера</h2>
			<div class="top-section-main-info">
				<div class="top-section-main-info-main">
					<span class="ages">14</span>
					<span class="amount">5437</span>
				</div>
				<div class="top-section-main-info-desc">
					<span class="top-section-main-info-desc-ages">лет устанавливаем автономные канализации</span>
					<span class="top-section-main-info-desc-amount">монтажей в Краснодарском крае</span>
				</div>
			</div>
			<h3 class="sale">Акция! В честь 14-ти летия компании</h3>
			<h4 class="sale-2">Скидка на монтаж 50% до 30 июля</h4>
			<h5 class="desc">Подберите септик из <span>789 моделей от 12 ведущих производителей</span> за 1 минуту</h5>
			<button class="quiz-action">
				Подобрать септик
				<br/>
				<span>ответив на 5 вопросов</span>
				<img ondragstart="return false" src="./assets/img/quiz-action-bg.png" alt="">
			</button>
			<img class="preview" ondragstart="return false" src="./assets/img/preview-image.png" alt="">
		</div>
		<img class="honest" ondragstart="return false" src="./assets/img/honest.png" alt="">
		<img class="bg-sec-1" ondragstart="return false" src="./assets/img/bg-sec-1.png" alt="">
	</section>


	<style>
		.top-section {
			padding: 0px 0px 90px 0px;
			background: #005c9e;
			position: relative;
		}
		.top-section-header {
			display: flex;
			align-items: center;
			justify-content: space-between;
			background: url("./assets/img/bg1.png") 50% 50% repeat no-repeat;
			background-size: cover;
		}
		.top-section-header-wrapper {
			max-width: 970px;
			margin: 0px auto;
			width: 100%;
			padding: 15px 23px 70px 23px;
			user-select: none;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.top-section-header-logo {
			display: flex;
			align-items: center;
		}
		.top-section-header-logo-desc {
			margin-left: 15px;
			font-family: 'HelveticaNeueCyr';
			color: #8c8c8c;
			font-size: 12px;
			max-width: 160px;
		}
		.top-section-header-info {
			border-radius: 2px;
			border: 1px dotted #367fb3;
			padding: 15px 15px 10px 25px;
			position: relative;
			max-width: 290px;
			width: 100%;
		}
		.top-section-header-info-main {
			background: #fff;
			padding: 0px 5px;
			position: absolute;
			top: 0px;
			left: 50%;
			transform: translate(-50%, -50%);
			color: #333;
			width: 100%;
			max-width: 270px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		.top-section-header-info-main-adress {
			font-size: 14px;
			font-family: 'HelveticaNeueCyr';
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		.top-section-header-info-main-adress img {
			margin-right: 5px;
		}
		.top-section-header-info-main-phone {
			font-size: 14px;
			font-family: 'Rubik', sans-serif;
			font-weight: 600;
		}
		.top-section-header-info-extra {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.top-section-header-info-extra .changeAdress {
			font-family: 'HelveticaNeueCyr';
			color: #8c8c8c;
			text-decoration: underline;
			font-size: 12px;
			cursor: pointer;
			margin-left: 5px;
		}
		.top-section-header-info-extra .workingNow {
			font-family: 'Rubik', sans-serif;
			color: #333333;
			font-size: 12px;
			position: relative;
		}
		.top-section-header-info-extra .workingNow:before {
			background: radial-gradient(#ffff00, #30bf13);
			content: '';
			width: 12px;
			height: 12px;
			border-radius: 50%;
			display: block;
			position: absolute;
			left: -15px;
			top: 50%;
			transform: translate(0, -50%);
		}
		.top-section-main {
			max-width: 970px;
			margin: 0px auto;
			width: 100%;
			padding: 25px 23px;
			position: relative;
		}
		.top-section-main * {
			text-align: left;
		}
		.top-section-main-h1 {
			font-family: "Rubik", sans-serif;
			font-weight: 600;
			color: #00ff4c;
			font-size: 35px;
			text-transform: uppercase;
		}
		.top-section-main-h2 {
			font-family: "Rubik", sans-serif;
			font-weight: 400;
			color: #fff;
			font-size: 30px;
			margin: 15px 0px 50px 0px;
		}
		.top-section-main-info {
			border: 1px dotted #fff;
			border-radius: 2px;
			position: relative;
			display: flex;
			max-width: 370px;
			width: 100%;
			padding: 25px 10px 15px 10px;
		}
		.top-section-main-info-main {
			display: flex;
			align-items: center;
			justify-content: space-between;
			/* background: #005c9e; */
			font-family: 'Rubik', sans-serif;
			font-weight: 300;
			color: #fff;
			padding: 0px 5px;
			position: absolute;
			top: 0;
			left: 50%;
			transform: translate(-50%, -50%);
			max-width: 310px;
			width: 100%;
			font-size: 45px;
		}
		.top-section-main-info-main * {
			max-width: 150px;
			width: 100%;
			background: #005c9e;
		}
		.top-section-main-info-main .ages {
			max-width: 50px;
			margin-left: 20px;
			text-align: right;
		}
		.top-section-main-info-main .amount {
			text-align: right;
			max-width: 300px;
		}
		.top-section-main-info-desc {
			display: flex;
			align-items: center;
			justify-content: space-between;
			font-family: 'HelveticaNeueCyr', sans-serif;
			text-align: center;
			width: 100%;
			margin: 0px auto;
			max-width: 350px;
		}
		.top-section-main-info-desc * {
			text-align: center;
			font-size: 12px;
			color: #fff;
			max-width: 150px;
			width: 100%;
		}
		.sale {
			font-family: 'HelveticaNeueCyr', sans-serif;
			font-weight: bold;
			color: #fff;
			font-size: 25px;
			margin-top: 50px;
		}
		.sale-2 {
			font-family: 'HelveticaNeueCyr', sans-serif;
			font-weight: bold;
			color: #ff7062;
			font-size: 25px;
		}
		.desc {
			font-family: 'HelveticaNeueCyr', sans-serif;
			color: #fff;
			font-size: 21px;
			margin-top: 30px;
			max-width: 350px;
		}
		.desc span {
			font-weight: bold;
		}
		.quiz-action {
			background: #ff7062;
			border-radius: 48px;
			border: none;
			color: #fff;
			font-weight: 600;
			font-family: 'HelveticaNeueCyr', sans-serif;
			font-size: 23px;
			padding: 20px 50px;
			text-align: center;
			line-height: 21px;
			text-transform: uppercase;
			margin-top: 30px;	
			position: relative;
			user-select: none;
		}
		.quiz-action span {
			font-size: 18px;
			font-weight: 500;
			text-transform: lowercase;
		}
		.quiz-action img {
			position: absolute;
			left: 30%;
			top: 0px;
			transform: translate(-50%, 0);
			transition-duration: .3s;
		}
		.quiz-action:after {
			content: '';
			width: 30px;
			height: 120px;
			background: url('./assets/img/arr.png') 50% 50% no-repeat;
			position: absolute;
			right: -50px;
			top: -70px;
			transition-duration: .3s;
			pointer-events: none;
		}
		.quiz-action:hover img {
			left: 80%;
		}
		.quiz-action:hover:after {
			right: -50px;
			top: -50px;
			transform: rotate(20deg);
		}
		.honest {
			position: absolute;
			bottom: 70px;
			left: calc(50% + 60px);
			transform: translate(-50%, 0);
		}
		.preview {
			right: 0px;
			top: calc(50% + 90px);
			transform: translate(0, -50%);
			position: absolute;
		}
		.bg-sec-1 {
			position: absolute;
			left: calc(50% + 100px);
			bottom: 0px;
			transform: translate(50%, 50%);
			width: 500px;
		}
	</style>




























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