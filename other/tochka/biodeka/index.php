<?php require_once 'header.php' ?>
<body class="home">
	<!-- Start Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNM26W7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php require_once 'top_section.php' ?>


	<section id="s02">
		<div class="wrap">
			<div class="white_form">
				<div class="img"><img src="assets/img/book2.png"></div>
				<!-- img -->
			<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
				<div class="content">
					<p class="take">Заберите инструкцию</p>
					<p class="title">Как выбрать идеальную канализацию  <br> для частного дома или дачи</p>
					<div class="line"></div>
					<p><strong>Из неё вы узнаете:</strong></p>
					<ul>
						<li>- Какую канализацию лучше ставить ?</li>
						<li>- На чём можно сэкономить ?</li>
						<li>- На чём экономить опасно ?</li>
						<li>- Какие параметры нужно обязательно <br>
						   учитывать при выборе септика. </li>
					</ul>
					<p><strong>Куда вам прислать инструкцию?</strong></p>
					<form action="spasibo.php" method="post">
						<div class="radios">
		      		<div class="form_control">
		      			<input type="radio" name="messenger" value="Whats app" id="mes_1" >
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
		      	<div class="hidden">
		      		<input type="tel" name="tel" placeholder="Введите ваш телефон" required="">
		      		<input type="hidden" name="comment" value="Забрать инструкцию">
		      		<button type="submit" class="submitBTN">
			      		<img src="assets/img/download.png">
			      		Забрать
			      	</button>
		      	</div>
					</form>
				</div>
				<!-- /.content -->
				<img src="assets/img/grass.png" class="grass">
				<img src="assets/img/septik_2.png" class="septik_2">
			</div>
			<!-- form -->
		</div>
	</section>


	<section id="s03">
		<div class="wrap" id="showBanner">
			<h2 class="h2">
				Подбираем станции из 678 моделей 
				<span>6 ведущих производителей</span>
			</h2>
			<div class="logos">
				<div class="logo"><img src="assets/img/l1.png" alt=""></div>
				<div class="logo"><img src="assets/img/l2.png" alt=""></div>
				<div class="logo"><img src="assets/img/l3.png" alt=""></div>
				<div class="logo"><img src="assets/img/l4.png" alt=""></div>
				<div class="logo"><img src="assets/img/l5.png" alt=""></div>
				<div class="logo"><img src="assets/img/l6.png" alt=""></div>
			</div>

			<h2 class="h2 enot">
				<img src="assets/img/enot.png">
				<strong>ООО “Точка решений” официальный дилер  <br> крупнейших произвоителей септиков</strong>
			</h2>
			<div class="sertificates">
				<div class="slick-slide">
					<a href="assets/img/s1big.jpg" data-fancybox="sert">
						<img src="assets/img/s1.png" alt="">
					</a>
				</div>
				<div class="slick-slide">
					<a href="assets/img/s2big.png" data-fancybox="sert">
						<img src="assets/img/s2.png" alt="">
					</a>
				</div>
				<div class="slick-slide">
					<a href="assets/img/s3big.jpg" data-fancybox="sert">
						<img src="assets/img/s3.png" alt="">
					</a>
				</div>
				<div class="slick-slide">
					<a href="assets/img/s1big.jpg" data-fancybox="sert">
						<img src="assets/img/s1.png" alt="">
					</a>
				</div>
				<div class="slick-slide">
					<a href="assets/img/s2big.png" data-fancybox="sert">
						<img src="assets/img/s2.png" alt="">
					</a>
				</div>
				<div class="slick-slide">
					<a href="assets/img/s3big.jpg" data-fancybox="sert">
						<img src="assets/img/s3.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>


	<section id="s04">
		<div class="wrap">
			<h2 class="h2">
				<img src="assets/img/warranty.png">
				<strong>
					Несем ответственность за монтаж и даем 5 лет гарантии 
					<span>на безотказную работу септика</span>
				</strong>
			</h2>
			<div class="masters">
				<div class="master">
					<div class="img"><img src="assets/img/master1.jpg" alt=""></div>
					<p class="text">Все монтажники проходят  <br> <strong>специальное обучение</strong></p>
				</div>
				<div class="master">
					<div class="img"><img src="assets/img/m2.jpg" alt=""></div>
					<p class="text"><strong>Двойной контроль</strong> за 
						<br> бригадой монтажников 
						<br> на каждом этапе установки
					</p>
				</div>
				<div class="master">
					<div class="img"><img src="assets/img/m3.jpg" alt=""></div>
					<p class="text">
						Делаем монтаж<strong> строго 
												<br> по нормативам </strong>
						<br> производителя
					</p>
				</div>
			</div>
		</div>
	</section>


	<section id="s05">
		<div class="wrap">
			<h2 class="h2">Читайте честные отзывы о нас <span>на «Яндекс Отзывы»</span></h2>

			<div class="reviews">
				<div class="review"><img src="assets/img/r1.png"></div>
				<div class="review"><img src="assets/img/r2.png"></div>
				<div class="review">
					<a href="https://yandex.ru/maps/org/tochka_resheniy/129926053492/?ll=37.559142%2C55.856059&source=wizbiz_new_text_single&z=15" target="_blank">
						Смотреть 
						<br> все отзывы
						<br><strong> на <span>Я</span>ндекс</strong>
					</a>
				</div>
			</div>
			<!-- reviews -->
			<div class="contact_block">
				<h2 class="h2 enot">Контакты <img src="assets/img/enot2.png"></h2>
				<div class="flexible">
					<div class="col col_left">
						<p class="data">
							ООО «Точка решений»
							<br> ОГРН: 1197746440055
							<br> ИНН: 7743307820
						</p>
						<ul class="list">
							<li>
								<div class="img"><img src="assets/img/location.png" alt=""></div>
								<span>Москва,  Дмитровское шоссе,  <br> д.71Б, офис 624</span>
							</li>
							<li>
								<div class="img"><img src="assets/img/email.png" alt=""></div>
								<span>
									Пишите: <a href="mailto:info@tochkaresheny.ru">info@tochkaresheny.ru</a>
								</span>
							</li>
							<li>
								<div class="img"><img src="assets/img/phone.png" alt=""></div>
								<span>
									Звоните: <a href="tel:+7 (495) 127-79-90">+7 (495) 127-79-90</a>
								</span>
							</li>
							<li>
								<div class="img"><img src="assets/img/calendar.png" alt=""></div>
								<span>
									Работаем: пн-пт с 09:00 до 19:00
								</span>
							</li>
						</ul>
					</div>
					<!-- /.col -->
					<div class="col col_map">
						<div class="map" id="map">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A86dcf55329377847be465634066cf40669700262841867bf93c443fbe02ed548&amp;width=100%25&amp;height=100%&amp;lang=ru_UA&amp;scroll=false"></script>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.flexible -->
			</div>
			<!-- /.contact_block -->
			<div id="dev">
				<p>©2020 г. ООО «Точка решений»</p>
				<a href="//quiz24.ru" target="_blank">Упаковка и разработка сайта: quiz24.ru</a>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php include_once "footer.php"; ?>