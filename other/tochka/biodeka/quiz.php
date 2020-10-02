<?php require_once 'header.php' ?>
<body class=" ">
<!-- Start Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNM26W7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="cutter">
	<?php require_once 'top_section.php' ?>

	<?php $dev = '<div class="dev">
							<a href="Politika_konfidentsialnosti.pdf" target="_blank" class="upper">Политика конфиденциальности. </a>
							<a href="//quiz24.ru" target="_blank" class="tar">Разработано в Quiz24.ru</a>
						</div>'; ?>
						
	<?php $buttons = '<div class="buttons">
							<a href="#x" class="goBack">Назад</a>
							<a href="#x" class="goNext" disabled="disabled">Следующий шаг > </a>
						</div>'; ?>




	<main id="main">
			<div class="header">
				<p class="header_title">Подберите септик и закрепите скидку 80% на установку</small></p>
				<div class="progressBar">
					<div class="steps"><span id="current_step">1 </span> из 6</div>
					<div class="bar"></div>
				</div>
				<hr class="hr">
			</div>
			<!-- /.header -->
		<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
		<div class="wrap">
			<form  action="spasibo.php" method="post" class="quiz" id="quiz">
				<div class="change_block active" data-step="1">
					<p class="question">
						<span class="img"><img src="assets/img/1.png"></span>
						<span class="text">
							<strong>Сколько человек будет проживать и пользоваться <br> канализацией?</strong>
							По количеству проживающих определяем суточный объём стоков.
						</span>
					</p>
					<!-- question -->
					<div class="questions_block">
						<div class="col_left">
						
							<div class="form_control inline_control">
								<div class="answer_block makeSort">
									<input type="radio" name="people_amount" class="people_amount" id="people_amount_1" value="От 1 до 3 человек" data-min="1" data-people="3">
									<label for="people_amount_1">От 1 до 3 человек</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control">
								<div class="answer_block makeSort">
									<input type="radio" name="people_amount" class="people_amount" id="people_amount_2" value="4 - 6 человек" data-min="4" data-people="6">
									<label for="people_amount_2">4 - 6 человек</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control">
								<div class="answer_block makeSort">
									<input type="radio" name="people_amount" class="people_amount" id="people_amount_3" value="7 - 11 человек" data-min="7" data-people="11">
									<label for="people_amount_3">7 - 11 человек</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control">
								<div class="answer_block makeSort">
									<input type="radio" name="people_amount" class="people_amount" id="people_amount_4" value="Больше 12 человек" data-min="12" data-people="12">
									<label for="people_amount_4">Больше 12 человек</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->
							
						</div>
						<!-- /.col_left -->
						<div class="col_center switch_image blue_image">
							<div class="image_container">
								<img src="assets/img/step1.png">
								<p>Начните отвечать, чтобы  <br> система начала  <br> подбор септика</p>
							</div>
							<!-- /.image_container -->
						</div>
						<!-- /.col_center -->
						<div class="col_right">
							<div class="present_block">
								<p>До результата теста  <br> и получения подарка <br> осталось:  <strong>6 вопросов</strong></p>
								<img src="assets/img/present.png">
							</div>
						</div>
						<!-- /.col_right -->
					</div>

						<div class="buttons">
							<!-- <a href="#x" class="goBack">Назад</a> -->
							<a onclick="ym(60459085, 'reachGoal', 'step2');" href="#x" class="goNext" disabled="disabled">Следующий шаг > </a>
						</div>
					<!-- /.buttons -->
					<?php echo $dev ?>
					<!-- dev -->
				</div>
				<!-- /.change_block -->
				<div class="change_block nextInQueue" data-step="2">
					<p class="question">
						<span class="img"><img src="assets/img/2.png"></span>
						<span class="text">
							<strong>Укажите количество сантехнических точек </strong>
							Определяем залповый сброс для вашей станции
						</span>
					</p>
					<!-- question -->
					<div class="questions_block">
						<div class="col_left">
							<div class="column mt15">
								<p class="label">Ванна,  (шт.)</p>
								<div class="calc_block">
									<span class="plus">+</span>
									<span class="minus">-</span>
									<input type="text" name="vanna" class="filled sizeInput santeh makeSort" data-norma="200">
								</div>
								
								<p class="label">Душ, (шт.)</p>
								<div class="calc_block">
									<span class="plus">+</span>
									<span class="minus">-</span>
									<input type="text" name="dush" class="sizeInput santeh makeSort" data-norma="80">
								</div>
								

								<p class="label">Унитаз, (шт.)</p>
								<div class="calc_block">
									<span class="plus">+</span>
									<span class="minus">-</span>
									<input type="text" name="unitaz" class="sizeInput santeh makeSort" data-norma="20">
								</div>
								

								<p class="label">Раковина / мойка (шт.)</p>
								<div class="calc_block">
									<span class="plus">+</span>
									<span class="minus">-</span>
									<input type="text" name="rakovina" class="sizeInput santeh makeSort" data-norma="30">
								</div>
								

								<p class="label">Стиральная / посудомоечная  <br> машина (шт.)</p>
								<div class="calc_block">
									<span class="plus">+</span>
									<span class="minus">-</span>
									<input type="text" name="stiralka" class="sizeInput santeh makeSort" data-norma="30">
								</div>
								

								<div class="form_control inline_control">
									<div class="answer_block noImg makeSort">
										<input type="radio" name="sanTeh" id="sanTeh_1" value="Ещё не знаю">
										<label for="sanTeh_1">Ещё не знаю</label>
									</div>
									<!-- answer_block -->
								</div>
							</div>
							<!-- /.column -->
						</div>
						<!-- /.col_left -->
						<div class="col_center switch_image shadow_img">
							<div class="image_header">
								<p class="res">Промежуточный результат:</p>
								<p class="podhodit">
									Вам подходит станция BioDeka-3 
									П-600 <strong>и ещё <span>126</span> станций</strong>
								</p>
								<p class="continue">Продолжайте отвечать на вопросы!</p>
							</div>
							<!-- /.image_header -->
							<div class="image_container ">
								<span class="product_satus_helper"></span>
								<img src="assets/img/qi.png">
							</div>
							<!-- /.image_container -->
						</div>
						<!-- /.col_center -->
						<div class="col_right">
							<div class="present_block">
								<p>До результата теста  <br> и получения подарка <br> осталось:  <strong>5 вопросов</strong></p>
								<img src="assets/img/present.png">
							</div>
						</div>
						<!-- /.col_right -->
					</div>
					<!-- /.questions_block -->

						<div class="buttons">
							<a href="#x" class="goBack">Назад</a>
							<a href="#x" class="goNext" onclick="ym(60459085, 'reachGoal', 'step3');" disabled="disabled">Следующий шаг > </a>
						</div>
					<!-- /.buttons -->
					<?php echo $dev ?>
					<!-- dev -->
				</div>
				<!-- /.change_block -->
				<div class="change_block " data-step="3">
					<p class="question">
						<span class="img three"><img src="assets/img/3_1.png"></span>
						<span class="text">
							<strong>Какой уровень грунтовых вод на вашем участке?</strong>
							Определяем риск выдавливания станции из почвы.
						</span>
					</p>
					<!-- question -->
					<div class="questions_block">
						<div class="col_left">
							<div class="form_control inline_control">
								<div class="info_parent">
									<span class="info_icon">i</span>
									<div class="inform_block" style="height: 70px !important;">
										<div class="scroll">
											<p>- При низком уровне грунтовых вод, подбирается стандартная станция.</p>
										</div>
									</div>
								</div>
								<!-- inform_block -->
								<div class="answer_block noImg startPodbor randomGood">
									<input class="hideImg" type="radio" name="uroven" id="uroven_1" value="Низкий. Ниже 1,5 метра">
									<label class="hideImg" for="uroven_1">Низкий. Ниже 1,5 метра</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- form_control -->
							<div class="form_control inline_control">
								<div class="info_parent">
									<span class="info_icon">i</span>
									<div class="inform_block" style="height: 185px;">
										<div class="scroll">
											<p>- Для участков с высоким уровнем грунтовых вод идеально подходят станции с большей площадью якорения.</p>
											<p>Расширенная площадь дна удерживает станцию на месте и не даёт грунтовым водам выдавить станцию из почвы.</p>
										</div>
									</div>
								</div>
								<!-- inform_block -->
								<div class="answer_block noImg startPodbor randomGood">
									<input type="radio" name="uroven" id="uroven_2" value="Высокий. Выше 1,5 метра" class="tall">
									<label class="tall" for="uroven_2">Высокий. Выше 1,5 метра</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- form_control -->
							<div class="form_control inline_control">
								<div class="answer_block noImg">
									<input class="hideImg" type="radio" name="uroven" id="uroven_3" value="Не знаю">
									<label class="hideImg" for="uroven_3">Не знаю</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- form_control -->
						</div>
						<!-- col_left -->
						<div class="col_center switch_image shadow_img">
							<div class="image_header">
								<p class="res">Промежуточный результат:</p>
								<p class="podhodit">
									Вам подходит станция BioDeka-3 
									П-600 <strong>и ещё <span>126</span> станций</strong>
								</p>
								<p class="continue">Продолжайте отвечать на вопросы!</p>
							</div>
							<!-- /.image_header -->
							<div class="image_container ">
								<span class="product_satus_helper"></span>
								<img src="assets/img/qi.png">
							</div>
							<!-- /.image_container -->
						</div>
						<!-- /.col_center -->
						<div class="col_right">
							<div class="present_block">
								<p>До результата теста  <br> и получения подарка <br> осталось:  <strong>4 вопроса</strong></p>
								<img src="assets/img/present.png">
							</div>
						</div>
						<!-- /.col_right -->
					</div>
					
						<div class="buttons">
							<a href="#x" class="goBack">Назад</a>
							<a onclick="ym(60459085, 'reachGoal', 'step4');" href="#x" class="goNext" disabled="disabled">Следующий шаг > </a>
						</div>
					<!-- /.buttons -->
					<?php echo $dev ?>
					<!-- dev -->
				</div>
				<!-- /.change_block -->
				<div class="change_block " data-step="4">
					<p class="question">
						<span class="img four"><img src="assets/img/4.png"></span>
						<span class="text">
							<strong>Планируете использовать канализацию круглогодично?</strong>
							Выясняем потребуется ли консервация станции на зиму
						</span>
					</p>
					<!-- question -->
					<div class="questions_block">
						<div class="col_left">
							<div class="form_control inline_control">
								<div class="answer_block startPodbor randomGood">
									<input class="hideImg_2" type="radio" name="ispolzovanie" id="ispolzovanie_1" value="Проживаю круглый год">
									<label class="hideImg_2" for="ispolzovanie_1">Проживаю круглый год</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->
							
							<div class="form_control inline_control">
								<div class="answer_block startPodbor randomGood">
									<input type="radio" class="sezon" name="ispolzovanie" id="ispolzovanie_2" value="Проживаю только летом. Зимой не пользуюсь канализацией">
									<label class="sezon" for="ispolzovanie_2">Проживаю только летом. <br> Зимой не пользуюсь канализацией</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control">
								<div class="answer_block startPodbor randomGood">
									<input class="hideImg_2" type="radio" name="ispolzovanie" id="ispolzovanie_3" value="Проживаю летом. Зимой пользуюсь канализацией  один раз в 2 недели или чаще">
									<label class="hideImg_2" for="ispolzovanie_3">Проживаю летом.  <br> Зимой пользуюсь канализацией один раз в 2 недели или чаще</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control">
								<div class="answer_block">
									<input class="hideImg_2" type="radio" name="ispolzovanie" id="ispolzovanie_4" value="Пока не решил">
									<label class="hideImg_2" for="ispolzovanie_4">Пока не решил</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->
						</div>

						<div class="col_center switch_image shadow_img">
							<div class="image_header">
								<p class="res">Промежуточный результат:</p>
								<p class="podhodit">
									Вам подходит станция BioDeka-3 
									П-600 <strong>и ещё <span>126</span> станций</strong>
								</p>
								<p class="continue">Продолжайте отвечать на вопросы!</p>
							</div>
							<!-- /.image_header -->
							<div class="image_container ">
								<span class="product_satus_helper"></span>
								<img src="assets/img/qi.png">
							</div>
							<!-- /.image_container -->
						</div>
						<!-- /.col_center -->

						<div class="col_right">
							<div class="present_block">
								<p>До результата теста  <br> и получения подарка <br> осталось:  <strong>3 вопроса</strong></p>
								<img src="assets/img/present.png">
							</div>
						</div>
						<!-- /.col_right -->
					</div>
					
						<div class="buttons">
							<a href="#x" class="goBack">Назад</a>
							<a onclick="ym(60459085, 'reachGoal', 'step5');" href="#x" class="goNext" disabled="disabled">Следующий шаг > </a>
						</div>
					<!-- /.buttons -->
					<?php echo $dev ?>
					<!-- dev -->
				</div>
				<!-- /.change_block -->
				<div class="change_block " data-step="5">
					<p class="question">
						<span class="img five"><img src="assets/img/5.png"></span>
						<span class="text">
							<strong>Куда будем отводить  переработанные стоки?</strong>
							Уточняем, какой необходим отвод стоков - принудительный  или самотёчный
						</span>
					</p>
					<!-- question -->
					<div class="questions_block">
						<div class="col_left">
							<div class="form_control inline_control dib_control ">
								<div class="info_parent">
									<span class="info_icon">i</span>
									<div class="inform_block" style="height: 90px">
										<div class="scroll">
											<p>- Стоки отводятся на поверхность грунта. </p>
											<p>Необходима модель с принудительным сбросом</p>
										</div>
									</div>
								</div>
								<!-- inform_block -->
								<div class="answer_block startPodbor noImg randomGood">
									<input class="sortSbros" type="radio" name="otvod" id="otvod_1" value="На грунт">
									<label class="sortSbros" for="otvod_1">На грунт</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control dib_control ">
								<div class="info_parent">
									<span class="info_icon">i</span>
									<div class="inform_block" style="height: 90px;">
										<div class="scroll">
											<p>- Стоки отводятся в ливневую канализацию.</p>
											<p>Необходима модель с принудительным сбросом.</p>
										</div>
									</div>
								</div>
								<!-- inform_block -->
								<div class="answer_block startPodbor noImg randomGood">
									<input class="sortSbros" type="radio" name="otvod" id="otvod_2" value="Ливневая канава">
									<label class="sortSbros" for="otvod_2">Ливневая канава</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control dib_control ">
								<div class="info_parent">
									<span class="info_icon">i</span>
									<div class="inform_block">
										<div class="scroll">
											<p>- Стоки отводятся в дренажный колодец.</p>
											<p>Необходимость принудительного сброса зависит от уровня грунтовых вод.</p>
										</div>
									</div>
								</div>
								<!-- inform_block -->
								<div class="answer_block startPodbor noImg randomGood">
									<input class="sortSbros" type="radio" name="otvod" id="otvod_3" value="Дренажный колодец">
									<label class="sortSbros" for="otvod_3">Дренажный колодец</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control dib_control ">
								<div class="info_parent">
									<span class="info_icon">i</span>
									<div class="inform_block" style="height: 75px;">
										<div class="scroll">
											<p>- Стоки отводятся в овраг.</p>
											<p>Подходят станции без принудительного сброса.</p>
										</div>
									</div>
								</div>
								<!-- inform_block -->
								<div class="answer_block startPodbor noImg randomGood">
									<input type="radio" name="otvod" id="otvod_4" value="Овраг">
									<label for="otvod_4">Овраг</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->

							<div class="form_control inline_control">
								<div class="answer_block">
									<input type="radio" name="otvod" id="otvod_5" value="Не определился">
									<label for="otvod_5">Не определился</label>
								</div>
								<!-- answer_block -->
							</div>
							<!-- /.form_control -->
						
						</div>

						<div class="col_center switch_image shadow_img">
							<div class="image_header">
								<p class="res">Промежуточный результат:</p>
								<p class="podhodit">
									Вам подходит станция BioDeka-3 
									П-600 <strong>и ещё <span>126</span> станций</strong>
								</p>
								<p class="continue">Продолжайте отвечать на вопросы!</p>
							</div>
							<!-- /.image_header -->
							<div class="image_container ">
								<span class="product_satus_helper"></span>
								<img src="assets/img/qi.png">
							</div>
							<!-- /.image_container -->
						</div>
						<!-- /.col_center -->
						<!--col_left -->
						<div class="col_right">
							<div class="present_block">
								<p>До результата теста  <br> и получения подарка <br> осталось:  <strong>2 вопроса</strong></p>
								<img src="assets/img/present.png">
							</div>
						</div>
						<!-- /.col_right -->
					</div>
					<!-- questions_block-->

						<div class="buttons">
							<a href="#x" class="goBack">Назад</a>
							<a onclick="ym(60459085, 'reachGoal', 'step6');" href="#x" class="goNext" disabled="disabled">Следующий шаг > </a>
						</div>
					<!-- /.buttons -->
					<?php echo $dev ?>
					<!-- dev -->
				</div>
				<!-- /.change_block -->

				<div class="change_block " data-step="6">
					<p class="question">
						<span class="img six"><img src="assets/img/6.png"></span>
						<span class="text">
							<strong>Выберите себе подарок за прохождение теста</strong>
							Выберите подарок, который вы получите, если решите заказать установку септика у нас.
						</span>
					</p>
					<!-- question -->
					<div class="questions_block">
						<div class="col_left presents">
							<div class="form_control switchPresent">
								<div class="info_parent">
									<span class="info_icon">i</span>
									<div class="inform_block" style="height: 210px;">
										<div class="scroll">
											<p>Компания “Точка решений” шефствует над содержанием енотов в Московском зоопарке. </p>
											<p>Вы можете принять участие и пожертвовать на корм животным.</p>
											<p>Если вы закажете установку септика в нашей компании, мы переведём эту сумму от вашего имени.</p>
										</div>
									</div>
								</div>
								<!-- inform_block -->
								<div class="img " >
									<img src="assets/img/p1.png">
								</div>
								<div class="answer_block ">
									<input type="radio" name="present" id="present_1" value="Пожертвовать на 
									содержание енота">
									<label for="present_1">Пожертвовать на 
									содержание енота 
									в Московском
									Зоопарке</label>
								</div>
								<!-- answer_block -->
								<div class="footer">
									<table>
										<tr>
											<td>Стоимость:</td>
											<td>700 р.</td>
										</tr>
									</table>
								</div>
								<p class="present_desc">
									Смотри описание в подсказке <br> на фото
								</p>
							</div>
							<!-- /.form_control -->

							<div class="form_control switchPresent">
								<div class="img " >
									<img src="assets/img/p2.png">
								</div>
								<div class="answer_block ">
									<input type="radio" name="present" id="present_2" value="Шланг поливочный MARKETHOT   с распылителем">
									<label for="present_2">Шланг поливочный MARKETHOT   с распылителем</label>
								</div>
								<!-- answer_block -->
								<div class="footer">
									<table>
										<tr>
											<td>Стоимость:</td>
											<td>700 р.</td>
										</tr>
									</table>
								</div>
							</div>
							<!-- /.form_control -->

							<div class="form_control presentBlock">
								<div class="present_header">Ваш подарок</div>
								<div class="img "  >
									<img src="">
								</div>
								<div class="present_name"></div>

								<div class="one_step">
									До результата теста: <strong>1 ШАГ</strong>
								</div>
							</div>
							<!-- /.form_control -->

						</div>
						<!-- col_left -->

					</div>
					<!-- questions_block -->

						<div class="buttons">
							<a href="#x" class="goBack">Назад</a>
							<a onclick="ym(60459085, 'reachGoal', 'step7');" href="#x" class="goNext" disabled="disabled">Следующий шаг > </a>
						</div>
					<!-- /.buttons -->
					<?php echo $dev ?>
					<!-- dev -->

				</div>
				<!-- /.change_block -->

				<div class="change_block  " data-step="6">
					<p class="weAreStarted">
						<span style="color:#000">Система сформировала каталог станций, которые вам подходят. </span>
						<small>Зарегистрируйтесь по номеру телефона, чтобы увидеть результат. </small>
					</p>
					<div class="quiz_line"></div>
					<p class="zakrep">
						Подарок и Скидка 80% на монтаж <br> будет закреплена за вашим номером 
					</p>
					<div class="startedFlex">
						<div class="started_col">
							<p class="started_title">Как вам удобнее  <br> получить результат?</p>
							<ul class="radio_list">
								<li>
									<input type="radio" name="messenger" id="messenger_1" value="Пришлите  на WhatsApp">
									<label for="messenger_1">Пришлите  на <strong>WhatsApp</strong></label>
								</li>
								<li>
									<input type="radio" name="messenger" id="messenger_2" value="Пришлите  в Viber" checked="">
									<label for="messenger_2">Пришлите  в <strong>Viber</strong></label>
								</li>
								<li>
									<input type="radio" name="messenger" id="messenger_3" value="Пришлите  в Telegram">
									<label for="messenger_3">Пришлите  в <strong>Telegram</strong></label>
								</li>
								<li>
									<input type="radio" name="messenger" id="messenger_4" value="Пришлите  SMS с промокодом">
									<label for="messenger_4">Пришлите  <strong>SMS</strong> с промокодом</label>
								</li>
								<li>
									<input type="radio" name="messenger" id="messenger_5" value="Перезвоните мне, у меня остались вопросы">
									<label for="messenger_5">Перезвоните мне, у меня остались вопросы</label>
								</li>
							</ul>
						</div>
						<!-- started_col -->
						<div class="started_col">
							<div class="form_control presentBlock">
								<div class="present_header">Ваш подарок</div>
								<div class="img "  >
									<img src="">
								</div>
								<div class="present_name"></div>

								<div class="one_step">
									<nobr>подарок будет забронирован <br> за вашим номером</nobr>
								</div>
							</div>
						</div>
						<!-- started_col -->
					</div>
					<!-- startedFlex -->

					<div class="buttons phoneImg">
						<input type="tel" name="tel" class="top_phone" placeholder="_(___)___-__-__">
						<a href="#x" class="getResultBtn" disabled="disabled">Получить результат</a>
					</div>
					<!-- /.buttons -->

					<div class="spinner_block tac">
						<div class="blue"> <p class="percentage">0%</p> </div>
						<div class="progress_round">
					    <div class="bar_round" data-name="SVG Skill" data-percent="100%">
					        <svg viewBox="-10 -10 220 220" stroke-width="20">
					        <g fill="none" stroke-width="9" transform="translate(100,100)">
					        <path stroke-width="20" d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
					        <path stroke-width="20" d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
					        <path stroke-width="20" d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
					        <path stroke-width="20" d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
					        <path stroke-width="20" d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
					        <path stroke-width="20" d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
					        </g>
					        </svg>
					        <svg viewBox="-10 -10 220 220" stroke-width="20">
					          <path stroke-width="20" d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z"               stroke-dashoffset="629">
					          </path>
					        </svg>
					    </div>

							<!--  Defining Angle Gradient Colors  -->
							<svg width="0" height="0" stroke-width="20">
							<!-- <defs> -->
							<linearGradient id="cl1" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
							    <stop stop-color="#f48a3e"/>
							    <stop offset="100%" stop-color="#f69c3d"/>
							</linearGradient>
							<linearGradient id="cl2" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
							    <stop stop-color="#f48a3e"/>
							    <stop offset="100%" stop-color="#f69c3d"/>
							</linearGradient>
							<linearGradient id="cl2" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="0" y2="1">
							    <stop stop-color="#f7a43d"/>
							    <stop offset="100%" stop-color="#fbca3c"/>
							</linearGradient>
							<linearGradient id="cl3" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="0" y2="1">
							    <stop stop-color="#f7a43d"/>
							    <stop offset="100%" stop-color="#fbca3c"/>
							</linearGradient>
							<linearGradient id="cl4" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
							    <stop stop-color="#fac23c"/>
							    <stop offset="100%" stop-color="#fac23c"/>
							</linearGradient>
							<linearGradient id="cl5" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
							    <stop stop-color="#fac23c"/>
							    <stop offset="100%" stop-color="#feec3b"/>
							</linearGradient>
							<linearGradient id="cl6" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
							    <stop stop-color="#fdde3c"/>
							    <stop offset="100%" stop-color="#feec3b"/>
							</linearGradient>

						
						</div>
						<!-- progress_round -->
					</div>
					<!-- spinner_block -->

					<p class="primernaya tac">Каталог станций сформирован. <br> Он откроется сразу после регистрации <!-- <strong>Она откроется сразу после регистрации</strong> --> </p>

					<?php echo $dev ?>
					<!-- dev -->
				</div>
				<!-- /.change_block -->


				<div class="change_block white_block " data-step="6">
					<div class="tac">
						<p class="white_title">
							Каталог подходящих станций 
						</p>
					</div>
					<p class="system">Система подобрала станции, которые для Вас подойдут</p>
					<!-- <hr class="white_hr"> -->
					<ul class="tabs_list">
						<li data-id="1" class="active">Подходят идеально</li>
						<li data-id="2">Также подойдёт</li>
					</ul>

					<div class="tab_container">
						<div data-id="1" class="tab_content active">
							<div class="catalog_slider_2"></div>
							<!-- /.catalog_slider -->
							<div class="go_next_slide_2">
								<span>Смотреть ещё</span>
								<img src="assets/img/next_slide.png">
							</div>
							<div class="go_prev_slide_2">
								<span>Смотреть ещё</span>
								<img src="assets/img/next_slide.png">
							</div>
						</div>
						<!-- /.tab_content -->
						<div data-id="2" class="tab_content">
							
							<div class="catalog_slider"></div>
							<!-- /.catalog_slider -->
							<div class="go_next_slide">
								<span>Смотреть ещё</span>
								<img src="assets/img/next_slide.png">
							</div>
							<div class="go_prev_slide">
								<span>Смотреть ещё</span>
								<img src="assets/img/next_slide.png">
							</div>

						</div>
						<!-- /.tab_content -->
					</div>

					

					<p class="system">Система подобрала станции по 5 параметрам</p>

					<div class="flex_form">
						<div class="col">
							<p class="flex_form_title">Для более точного подбора нужно учесть такие  <br> факторы как:</p>
							<ul class="flex_form_list">
								<li>- глубина выхода канализационной трубы</li>
								<li>- расстояние от дома до места установки станции</li>
								<li>- естественный уклон участка</li>
								<li>- и другие</li>
							</ul>
							<p class="zamer">Замеры сможет сделать наш выездной инженер.</p>
							<p class="viezd_free">Выезд инженера БЕСПЛАТНЫЙ.</p>
							<div class="doc_block">
								<p class="doc_title">Вы получите: </p>
								<ul class="doc_list">
									<li>Cмету в максимально развёрнутом виде на 13-ти листах</li>
									<li>Фиксированную стоимость станции и установки</li>
								</ul>
							</div>
						</div>
						<!-- /.col -->
						<div class="forma">
							<p class="form_title">Заказать бесплатный  <br> выезд инженера</p>
							<p class="check_data">Проверьте номер телефона  <br> и укажите адрес и удобную дату</p>
							<input type="tel" name="tel" required="" class="bottom_phone" placeholder="7 (905) 111-22-33">
							<textarea name="time" placeholder="Укажите адрес и удобную дату для выезда инженера"></textarea>
							<button type="submit" class="submit">Заказать выезд инженера >> </button>
						</div>
						<!-- /.col -->
					</div>
					<!-- flex_form -->

					<div class="devider"></div>
					
					
					<p class="know_more">Узнайте больше информации о нашей компании <br> на основном сайте</p>

					<a href="https://tochkaresheny.ru/" class="goToMain" target="_blank">перейти на основной сайт</a>



					<?php echo $dev ?>
					<!-- dev -->

				</div>
			</form>
		</div>
	</main>

	<!-- nextInQueue -->

</div>
<!-- cutter -->
<?php endif; ?>


	<?php require_once 'footer.php' ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>

	<script type="text/javascript" src="goods.js"></script>
	<script type="text/javascript">

		$('.info_parent').on('click', function(){ return false; })
		let sorted_goods_array = [];
		let sorted_goods_array_final = [];


		//  sorted_goods_array_final = 
		// [
		//   {
		//     "productName": "BioDeka-8 C-800",
		//     "people": "8",
		//     "zalpSbros": "380 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/422/biodeka-8-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-8 П-800",
		//     "people": "8",
		//     "zalpSbros": "380 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/422/biodeka-8-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-8 С-1300",
		//     "people": "8",
		//     "zalpSbros": "380 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/422/biodeka-8-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-8 П-1300",
		//     "people": "8",
		//     "zalpSbros": "380 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/422/biodeka-8-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-8 С-1800",
		//     "people": "8",
		//     "zalpSbros": "380 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/422/biodeka-8-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-8 П-1800",
		//     "people": "8",
		//     "zalpSbros": "380 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/422/biodeka-8-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-10 C-800",
		//     "people": "10",
		//     "zalpSbros": "570 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/428/biodeka-10-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-10 П-800",
		//     "people": "10",
		//     "zalpSbros": "570 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/428/biodeka-10-800png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-10 С-1000",
		//     "people": "10",
		//     "zalpSbros": "570 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/428/biodeka-10-1000png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-10 П-1000",
		//     "people": "10",
		//     "zalpSbros": "570 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/428/biodeka-10-1000png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-10 С-1500",
		//     "people": "10",
		//     "zalpSbros": "570 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/428/biodeka-10-1000png-bg.png"
		//   },
		//   {
		//     "productName": "BioDeka-10 П-1500",
		//     "people": "10",
		//     "zalpSbros": "570 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/428/biodeka-10-1000png-bg.png"
		//   },
		//   {
		//     "productName": "Genesis 700",
		//     "people": "9",
		//     "zalpSbros": "700 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/636/Genesis-700-bg.png"
		//   },
		//   {
		//     "productName": "Genesis 700 PR",
		//     "people": "9",
		//     "zalpSbros": "700 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/636/Genesis-700-bg.png"
		//   },
		//   {
		//     "productName": "Genesis 700 L",
		//     "people": "9",
		//     "zalpSbros": "700 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/636/Genesis-700-bg.png"
		//   },
		//   {
		//     "productName": "Genesis 700 L PR",
		//     "people": "9",
		//     "zalpSbros": "700 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/636/Genesis-700-bg.png"
		//   },
		//   {
		//     "productName": "Genesis 1000",
		//     "people": "13",
		//     "zalpSbros": "1000 л",
		//     "PrinudSbros": "нет",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/637/Genesis-1000-bg.png"
		//   },
		//   {
		//     "productName": "Genesis 1000 PR",
		//     "people": "13",
		//     "zalpSbros": "1000 л",
		//     "PrinudSbros": "да",
		//     "status": [
		//       "Лидер по отзывам",
		//       "Для высоких грунтовых вод",
		//       "Для сезонного проживания"
		//     ],
		//     "img": "https://tochkaresheny.ru/img/upload/products/637/Genesis-1000-bg.png"
		//   },
		//   {
		//     "productName": "Евролос ЭКО 8",
		//     "people": "8",
		//     "zalpSbros": "640 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/532/eurolos-ekojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ЭКО 10",
		//     "people": "10",
		//     "zalpSbros": "670 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/533/eurolos-ekojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ЭКО 12",
		//     "people": "12",
		//     "zalpSbros": "930 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/535/eurolos-ekojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос БИО 8",
		//     "people": "8",
		//     "zalpSbros": "370 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/546/eurolos-biojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос БИО 8+",
		//     "people": "8",
		//     "zalpSbros": "370 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/546/eurolos-biojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос БИО 10+",
		//     "people": "10",
		//     "zalpSbros": "550 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/549/eurolos-biojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос БИО 10",
		//     "people": "10",
		//     "zalpSbros": "550 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/549/eurolos-biojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос БИО 12",
		//     "people": "12",
		//     "zalpSbros": "670 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/550/eurolos-biojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос БИО 12+",
		//     "people": "12",
		//     "zalpSbros": "670 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/550/eurolos-biojpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ПРО 8",
		//     "people": "8",
		//     "zalpSbros": "370 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/564/eurolos-projpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ПРО 8+",
		//     "people": "8",
		//     "zalpSbros": "370 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/565/eurolos-projpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ПРО 10+",
		//     "people": "10",
		//     "zalpSbros": "550 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/567/eurolos-projpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ПРО 10",
		//     "people": "10",
		//     "zalpSbros": "550 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/566/eurolos-projpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ПРО 12",
		//     "people": "12",
		//     "zalpSbros": "670 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/568/eurolos-projpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Евролос ПРО 12+",
		//     "people": "12",
		//     "zalpSbros": "670 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/568/eurolos-projpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 8",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/461/topas-8jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 8 пр",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/461/topas-8-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 8 long",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/461/topas-8-longjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 8 long пр",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/461/topas-8-long-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 8 long УС",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/461/topas-8-long-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 8 long УС пр",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/461/topas-8-long-us-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 9",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/467/topas-9jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 9 пр",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/467/topas-9-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 9 long",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/467/topas-9-longjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 9 long пр",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/467/topas-9-long-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 9 long УС",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/467/topas-8-long-usjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 9 long УС пр",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/467/topas-9-long-us-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 10",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/473/topas-10jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 10 пр",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/473/topas-10-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 10 long",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/473/topas-15-longjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 10 long пр",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/473/topas-10-long-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 10 long УС",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/473/topas-12-long-uspng-bg.png"
		//   },
		//   {
		//     "productName": "Топас-С 10 long УС пр",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/473/topas-10-long-us-prpng-bg.png"
		//   },
		//   {
		//     "productName": "Топас-С 12",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/479/topas-12jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 12 пр",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/479/topas-12-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас-С 12 long",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/479/topas-12-longpng-bg.png"
		//   },
		//   {
		//     "productName": "Топас-С 12 long пр",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/479/topas-12-long-prpng-bg.png"
		//   },
		//   {
		//     "productName": "Топас-С 12 long УС",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/479/topas-12-long-prpng-bg.png"
		//   },
		//   {
		//     "productName": "Топас-С 12 long УС пр",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/479/topas-12-long-us-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 8",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/262/topas-8jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 8 пр",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/262/topas-8-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 8 long",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/262/topas-8-longjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 8 long пр",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/262/topas-8-long-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 8 long УС",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/262/topas-8-long-usjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 8 long УС пр",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/262/topas-8-long-us-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 9",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/266/topas-9jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 9 пр",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/266/topas-9-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 9 long",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/266/topas-9-longjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 9 long пр",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/266/topas-9-long-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 9 long УС",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/266/topas-9-long-usjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 9 long УС пр",
		//     "people": "9",
		//     "zalpSbros": "510 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/266/topas-9-long-us-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 10",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/269/topas-10jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 10 пр",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/269/topas-10-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 10 long",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/269/topas-8-longjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 10 long пр",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/269/topas-10-long-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 10 long УС",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/269/topas-10-long-uspng-bg.png"
		//   },
		//   {
		//     "productName": "Топас 10 long УС пр",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/269/topas-10-long-us-prpng-bg.png"
		//   },
		//   {
		//     "productName": "Топас 12",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/270/topas-12jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 12 пр",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/270/topas-12-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Топас 12 long",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/270/topas-12-longpng-bg.png"
		//   },
		//   {
		//     "productName": "Топас 12 long пр",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/270/topas-12-long-prpng-bg.png"
		//   },
		//   {
		//     "productName": "Топас 12 long УС",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/270/topas-12-long-uspng-bg.png"
		//   },
		//   {
		//     "productName": "Топас 12 long УС",
		//     "people": "12",
		//     "zalpSbros": "830 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/270/topas-12-long-us-prjpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,2П",
		//     "people": "7",
		//     "zalpSbros": "420 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/396/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,2ПН",
		//     "people": "7",
		//     "zalpSbros": "420 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/396/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,2ПМ",
		//     "people": "7",
		//     "zalpSbros": "420 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/396/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,2ПНМ",
		//     "people": "7",
		//     "zalpSbros": "420 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/396/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5П",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5ПН",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5ПМ",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5ПНМ",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5НП",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5НПН",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5НПМ",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-1,5НПНМ",
		//     "people": "9",
		//     "zalpSbros": "500 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/400/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2П",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2ПН",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2ПМ",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2ПНМ",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2НП",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2НПН",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2НПМ",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Тверь-2НПНМ",
		//     "people": "12",
		//     "zalpSbros": "650 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/408/tverjpg-sm.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 7",
		//     "people": "7",
		//     "zalpSbros": "280 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/320/astra-3jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 7 Миди",
		//     "people": "7",
		//     "zalpSbros": "280 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/320/astra-3jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 7 Long",
		//     "people": "7",
		//     "zalpSbros": "280 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/320/astra-3jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 8",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/324/astra-8jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 8 Миди",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/324/astra-8jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 8 Long",
		//     "people": "8",
		//     "zalpSbros": "440 л",
		//     "PrinudSbros": "да",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/324/astra-8jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 9",
		//     "people": "9",
		//     "zalpSbros": "410 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/320/astra-3jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 9 Миди",
		//     "people": "9",
		//     "zalpSbros": "410 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/320/astra-3jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 9 Long",
		//     "people": "9",
		//     "zalpSbros": "410 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/320/astra-3jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 10",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/327/astr-10jpg-bg.jpg"
		//   },
		//   {
		//     "productName": "Юнилос Астра 10 Миди",
		//     "people": "10",
		//     "zalpSbros": "760 л",
		//     "PrinudSbros": "нет",
		//     "status": [],
		//     "img": "https://tochkaresheny.ru/img/upload/products/327/astr-10jpg-bg.jpg"
		//   }
		// ];



		anim = true;
		$clear_input 		= $('input');
		$clear_textarea = $('textarea');
		$clear_checkbox = $('[type="checkbox"]');
		$clear_radio 		= $('[type="radio"]');
		$('[type="tel"]').on('keyup', function(e){
			//console.log('keycode')
			//console.log(event.keyCode)
			if (event.keyCode==32) {return false;}
		})



		var banner_timer = '';
		const quizSteps = 6;
		let $progressBar_width = $('.progressBar').width();
		const step = $progressBar_width / quizSteps;

		$('.answer_block, .switchPresent').on('click', toggleInputProp);
		$('.change_block textarea, .change_block input[type="text"]').on('click input blur focus change', setTextAreaValue);
		$('.top_phone').on('click input blur focus change keyup keydown', checkPhone);
		$(document).on('click', '.goNext, .getResultBtn',  goNext);
		$('.goBack').on('click', goBack);
		//$('.presents .answer_block').on('click', switchPresent);
		$('.presents .switchPresent').on('click', switchPresent);
		$('.sizeInput').on('change keyup input', makeSort);
		$('.tabs_list li').on('click', switchTabs);

		$(".scroll").niceScroll();

		function switchTabs () {
			localStorage.removeItem('width');
			$(this).addClass('active').siblings('li').removeClass('active');
			let $id = $(this).data('id');
			$(this).parents('.change_block').find('.tab_content').removeClass('active');
			$(this).parents('.change_block').find('.tab_content[data-id="' + $id + '"]').addClass('active');

			if ( $id == '2' && !catalogSlider_created ) {
				catalogSlider();
			}

			if ( $id == '2' && document.documentElement.clientWidth < 1040 ) {
				$('.catalog_slider')[0].slick.refresh()
				//$('.catalog_slider').slick('unslick');
				//$('.catalog_slider').html('');
				//createSlider();
				//catalogSlider();
			}
			if ( $id == '1' && document.documentElement.clientWidth < 1040 ) {
				$('.catalog_slider_2')[0].slick.refresh()
				//$('.catalog_slider_2').slick('unslick');
				//$('.catalog_slider_2').html('');
				//createSlider();
				//catalogSlider_2();
			}
		}


		function makeSort (e) {
			//console.log('e')
			//console.log(e)
			//console.log('e.currentTarget')
			//console.log(e.currentTarget)
			if ( $(e).hasClass('people_amount') ) {
				sorted_goods_array = [];
				var peopleAmount = +$(e).data('people');
				peopleAmount_max = peopleAmount+3;
				if ( peopleAmount == 12 ) {peopleAmount_max = 99999}
				peopleAmount_min = +$(e).data('min');
				//console.log('peopleAmount_max')
				//console.log(peopleAmount_max)

				// сформиловали новый массив с подходящими товарами
				for (let key in goods) {
					if ( peopleAmount_max === 12 ) {
						if ( goods[key].people >= 12 ) {
							sorted_goods_array.push(goods[key])
						}
					}
					else{
						if ( (goods[key].people >=  peopleAmount_min) && (goods[key].people <= peopleAmount_max) ) {
							sorted_goods_array.push(goods[key])
						}
					}
				}
				// сформиловали новый массив с подходящими товарами
				setProduct (sorted_goods_array[0], sorted_goods_array);
			} // people_amount
			//
			let $input = e.currentTarget;
			if ( typeof $input == 'undefined' ) {$input = e;}
			if ( $($input).hasClass('santeh') ) {
				//console.log('soer in santeh')
				// norma
				$vanna_koef 	 = $('input[name="vanna"]').data('norma');
				$dush_koef 		 = $('input[name="dush"]').data('norma');
				$rakovina_koef = $('input[name="rakovina"]').data('norma');
				$stiralka_koef = $('input[name="stiralka"]').data('norma');
				$unitaz_koef 	 = $('input[name="unitaz"]').data('norma');

				$vanna 		= $('input[name="vanna"]').val();
				if ($vanna == '') {$vanna = 0;}

				$dush 		= $('input[name="dush"]').val();
				if ($dush == '') {$dush = 0;}

				$unitaz 		= $('input[name="unitaz"]').val();
				if ($unitaz == '') {$unitaz = 0;}

				$rakovina = $('input[name="rakovina"]').val();
				if ($rakovina == '') {$rakovina = 0;}

				$stiralka = $('input[name="stiralka"]').val();
				if ($stiralka == '') {$stiralka = 0;}

				$result = ($vanna*$vanna_koef) + ($dush*$dush_koef) + ($unitaz*$unitaz_koef) + ($rakovina*$rakovina_koef) + ($stiralka*$stiralka_koef);
				zalpSbros = $result*0.7;
				//console.log('zalpSbros')
				//console.log(zalpSbros)

				// zalpSbros 
				// сформиловали новый массив с подходящими товарами
				setTimeout (function(){
					sorted_goods_array_final = [];
					for (let key in sorted_goods_array) {
						//console.log(parseInt(sorted_goods_array[key].zalpSbros))

						//if ( parseInt(sorted_goods_array[key].zalpSbros) >=  (zalpSbros)  ) {
						if ( parseInt(sorted_goods_array[key].zalpSbros) >=  (zalpSbros-50) && parseInt(sorted_goods_array[key].zalpSbros) <=  (zalpSbros+100) ) {
							sorted_goods_array_final.push(sorted_goods_array[key])
						}
					}
					if ( sorted_goods_array_final.length & 1 ) {
					 	sorted_goods_array_final.pop();
					}
					setProduct (sorted_goods_array_final[0], sorted_goods_array_final);
				}, 1e3)
				// сформиловали новый массив с подходящими товарами
			}


			
		}

		function setProduct (product, arr) {
			//console.log('prodct')
			//console.log(product)
			if (typeof product !== 'undefined') {
				$('#main .shadow_img .image_container, #main .shadow_img .image_container span').removeClass('visokie_vodi lider grunt sezon');
				// заголовок
				$('.podhodit')
						.html(`Вам подходит станция ${product.productName}
									<strong>и ещё <span>${arr.length}</span> станций</strong>
								`)
					// изображение
					$('#main .shadow_img .image_container').find('img').attr('src', product.img);

					// статус
					if (product.status.length > 0) {
						for (var i = 0; i < product.status.length; i++) {
							if ( product.status[i] === 'Лидер по отзывам' ) {
								$('#main .shadow_img .image_container, #main .shadow_img .image_container span').addClass('lider');
							}
							if ( product.status[i] === 'Для высоких грунтовых вод' ) {
								$('#main .shadow_img .image_container, #main .shadow_img .image_container span').addClass('visokie_vodi');
							}
							if ( product.status[i] === 'Для сезонного проживания' ) {
								$('#main .shadow_img .image_container, #main .shadow_img .image_container span').addClass('sezon');
							}
						}
					}
					// статус
				}
		}

		function createSlider() {
			// $('.catalog_slider').html('');
			// $('.catalog_slider_2').html('');
			let goods_exclusive = [];
			let goods = sorted_goods_array_final;

			if (goods.length < 1){ goods = sorted_goods_array; } 
			
			if ( sort_sbros_set ) {
				let tmpArray = [];

				function itemCheck(item) {
				    if (tmpArray.indexOf(item.productName) === -1) {
				        tmpArray.push(item.productName);
				        return true
				    }
				    return false;
				}
				goods = sort_sbros.filter((item) => itemCheck(item));
			}

			if ( goods.length & 1 ) {
			 	goods.pop();
			}
			
			//console.log('goods')
			//console.log(goods)
			for (let key in goods) {
				var class_1 = '';
				var class_2 = '';
				var class_3 = '';

				if (goods[key].status.length > 0) {
					for (var i = 0; i < goods[key].status.length; i++) {
						if ( goods[key].status[i] === 'Лидер по отзывам' ) {
							class_1 = 'lider';
						}
						if ( goods[key].status[i] === 'Для высоких грунтовых вод' && $('.change_block:first-child').hasClass('show_status') ) {
							class_2 = 'visokie_vodi';
						}
						if ( goods[key].status[i] === 'Для сезонного проживания' && $('.change_block:first-child').hasClass('show_status_2') ) {
							class_3 = 'sezon';
						}
					}
				}

				let slide = `<div class="slick_slide">
								<div class="product_card">
									<p class="product_title">${goods[key].productName}</p>
									<div class="product_image ${class_1} ${class_2} ${class_3}">
										<span class="product_satus_helper ${class_1} ${class_2} ${class_3}"></span>
										<img src="${goods[key].img}">
									</div>
									<div class="product_footer">
										<ul>
											<li>Обслуживание: до ${goods[key].people} чел.</li>
											<li>Залповый сброс: ${goods[key].zalpSbros}</li>
											<li>Принудительный сброс: ${goods[key].PrinudSbros}</li>
										</ul>
									</div>
									<!-- product_footer -->
									<a href="#x" class="product_show_more" onclick="popup(4, this)"><span>Подробнее</span></a>
								</div>
								<!-- /.product_card -->
							</div>`;
				
				$('.catalog_slider').append(slide);

			}// end for

			//goods_exclusive = goods;


			if ( sort_sbros_set ) {
				//console.log('sort_sbros')
				//console.log(sort_sbros)
				goods = sort_sbros;
				//if (sorted_goods_array_final.length < 1){ sorted_goods_array_final = sorted_goods_array; } 

			}
			for (let title in goods) {
				goods[title].uniq_productName = goods[title].productName.split('-')[0].split(' ')[0];
				//console.log(goods[title])
			}
			uniq = [];
			//console.log('goods')
			//console.log(goods)
			goods_exclusive = goods.filter(function(obj) {
			    return obj.uniq_productName in uniq ? 0:(uniq[obj.uniq_productName]=1);
			});
			//console.log('filtered')
			//console.log(filtered)
			$('form input.exclusive').remove();
			

			for (let key in goods_exclusive) {
				var class_1 = '';
				var class_2 = '';
				var class_3 = '';

				if (goods_exclusive[key].status.length > 0) {
					for (var i = 0; i < goods_exclusive[key].status.length; i++) {
						if ( goods_exclusive[key].status[i] === 'Лидер по отзывам' ) {
							class_1 = 'lider';
						}
						if ( goods_exclusive[key].status[i] === 'Для высоких грунтовых вод' && $('.change_block:first-child').hasClass('show_status') ) {
							class_2 = 'visokie_vodi';
						}
						if ( goods_exclusive[key].status[i] === 'Для сезонного проживания' && $('.change_block:first-child').hasClass('show_status_2') ) {
							class_3 = 'sezon';
						}
					}
				}

				let slide_exclusive = `<div class="slick_slide">
					<div class="product_card">
						<p class="product_title">${goods_exclusive[key].productName}</p>
						<div class="product_image ${class_1} ${class_2} ${class_3}">
							<span class="product_satus_helper ${class_1} ${class_2} ${class_3}"></span>
							<img src="${goods_exclusive[key].img}">
						</div>
						<div class="product_footer">
							<ul>
								<li>Обслуживание: до ${goods_exclusive[key].people} чел.</li>
								<li>Залповый сброс: ${goods_exclusive[key].zalpSbros}</li>
								<li>Принудительный сброс: ${goods_exclusive[key].PrinudSbros}</li>
							</ul>
						</div>
						<!-- product_footer -->
						<a href="#x" class="product_show_more" onclick="popup(4, this)"><span>Подробнее</span></a>
					</div>
					<!-- /.product_card -->
				</div>`;
				
				$('.catalog_slider_2').append(slide_exclusive);
				$('form').append('<input type="hidden" class="exclusive" name="exclusive[]" value="'+ goods_exclusive[key].productName +'" >');

			}// end for

			//catalogSlider ();
		}
		//createSlider()
		//catalogSlider_2 ()

		function initQuizSlider () {
			$('.slider').slick({
				infinite: true,
			})
		}

		var catalogSlider_created = false;
		var catalogSlider_2_created = false;
		function catalogSlider () {
			//$('.catalog_slider').html('');
			//$('.catalog_slider_2').html('');
			$rows_count = 2;
			if ( document.documentElement.clientWidth < 490 ) {
				$rows_count = 1;
			}
			$('.catalog_slider').slick({
				infinite: false,
				dots: false,
				slidesToShow: 3,
				slidesToScroll: 3,
				rows: $rows_count,
				prevArrow: $('.go_prev_slide'),
				nextArrow: $('.go_next_slide'),
				responsive: [
		    {
		      breakpoint: 890,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: false,
		      }
		    },
		    {
		      breakpoint: 490,
		      settings: {
		        rows: $rows_count,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		         infinite: false,
		      }
		    },
		  ]
			})
			catalogSlider_created = true;
			return catalogSlider_created;
		}
		//catalogSlider ()
		function catalogSlider_2 () {
			//$('.catalog_slider').html('');
			//$('.catalog_slider_2').html('');
			$rows_count = 2;
			if ( document.documentElement.clientWidth < 490 ) {
				$rows_count = 1;
			}
			$('.catalog_slider_2').slick({
				infinite: false,
				dots: false,
				slidesToShow: 3,
				slidesToScroll: 3,
				rows: $rows_count,
				prevArrow: $('.go_prev_slide_2'),
				nextArrow: $('.go_next_slide_2'),
				responsive: [
		    {
		      breakpoint: 890,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: false,
		      }
		    },
		    {
		      breakpoint: 490,
		      settings: {
		        rows: $rows_count,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		         infinite: false,
		      }
		    },
		  ]
			})
			catalogSlider_2_created = true;
			return catalogSlider_2_created;
		}
		//catalogSlider_2 ();

		localStorage.setItem('width', document.documentElement.clientWidth);

		$(window).on('resize', function(){
			$width = localStorage.getItem('width');
		
			if ( $width != document.documentElement.clientWidth ) {
					//alert($width);
					//alert(document.documentElement.clientWidth);

				localStorage.setItem('width', document.documentElement.clientWidth);
				setTimeout(function(){
					$('.catalog_slider, .catalog_slider_2').slick('unslick');
					setTimeout(catalogSlider, 500)
					setTimeout(catalogSlider_2, 500)
				}, 500)
			}
		})
		//catalogSlider_2 ();
	
	
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
			//console.log('toggle')
			r = false;
			c = false;
			t = false;
			i = false;
			let radios 				 = $('.change_block.active').find('input[type="radio"]');
			let checkboxes 		 = $('.change_block.active').find('input[type="checkbox"]');
			let textarea_block = $('.change_block.active').find('.textarea_block');
			let input_text 	   = $('.change_block.active').find('input[type="text"]');
			//let input_text 	   = 0;

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

				try{
					//console.log($(input_text).length);
					//console.log($(input_text).val().length);
				}
				catch(e){}
			if ( 
					r && c
					|| 
					(
						textarea_block.length > 0 
						&& $(textarea_block).find('textarea').val().length > 1
					) 
					|| 
					(
						$(input_text).length > 0 
						&& $(input_text).val().length > 1
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


		let sort_sbros = [];
		sort_sbros_set = false;
		function toggleInputProp (e) {

			//console.log(e.target)
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
							//console.log('target');
							//console.log(e.target);
							/* SORT */
							if ( $(e.target).parents('.answer_block').hasClass('makeSort') || $(e.target).hasClass('makeSort') ) {
								$input = $($this).find('input');
								makeSort($input);
							}
							/* SORT */

							if ( $(e.target).hasClass('randomGood') || $(e.target).parents('.answer_block').hasClass('randomGood') ) {
								let goods = sorted_goods_array_final;
								if (goods.length < 1){ goods = sorted_goods_array; } 
								//console.log(goods.length)
   							
   							// Выбираем для высокого уровня вод
   							//console.log('TARGET')
   							//console.log($(e.target))
   							if ( $(e.target).hasClass('hideImg') ) { $('.change_block').removeClass('show_status'); }
								if ( $(e.target).hasClass('tall') ) { 
									$('.change_block').addClass('show_status');
									g = goods;
									visokix_vod = [];
									for (let key in g) {
										if (g[key].status.length > 0) {
											for (var i = 0; i < g[key].status.length; i++) {
												if ( g[key].status[i] === 'Для высоких грунтовых вод' ) {
													visokix_vod.push(g[key]);
												}
											} // endfor
										}  // endif
									} // endfor
									rand = Math.floor(Math.random() * visokix_vod.length);
									setProduct (visokix_vod[rand], goods);
									return true;
								}
								// sezon
								if ( $(e.target).hasClass('hideImg_2') ) { $('.change_block').removeClass('show_status_2'); }
								if ( $(e.target).hasClass('sezon') ) { 
									$('.change_block').addClass('show_status_2');
									//console.log('sezon')
									g = goods;
									dlya_sezon = [];
									for (let key in g) {
										if (g[key].status.length > 0) {
											for (var i = 0; i < g[key].status.length; i++) {
												if ( g[key].status[i] === 'Для сезонного проживания' ) {
													dlya_sezon.push(g[key]);
												}
											} // endfor
										}  // endif
									} // endfor
									rand = Math.floor(Math.random() * dlya_sezon.length);
									setProduct (dlya_sezon[rand], goods);
									return true;
								}
								if ( $(e.target).hasClass('sortSbros') ) {
									sort_sbros = [];
									g = goods;
									//console.log('G')
									//console.log(g)
									for (let key in g) {
										if ( g[key].PrinudSbros === 'да' ) {
											sort_sbros.push(g[key]);
										}
									} // endfor
									rand = Math.floor(Math.random() * sort_sbros.length);
									console.log('SORT SBROS')
									console.log(sort_sbros)
									setProduct (sort_sbros[rand], sort_sbros);
									sort_sbros_set = true;


									return sort_sbros_set;
								}
								else{
									//console.log('ELSE')
									rand = Math.floor(Math.random() * goods.length);
									sort_sbros_set = false;
									setProduct (goods[rand], goods);
								}
							}

							if ( !$(e.target).parents('.answer_block').hasClass('startPodbor') && !$(e.target).hasClass('noImg') ) {
								$('.change_block.active').find('.goNext').click();
							}
							
						}, 100)
					}
				}, 100)
			} // if 
		}

		jQuery(function($){
	 		$.mask.definitions['q'] = '[1,2,3,4,5,6,9]';
		  $('input[type="tel"]').mask("+7(q99) 999-99-99");
		});

		var lastAnimateTime = 0;
		function nextStepProgressBar () {
			let $current_step = $('.change_block.nextInQueue').data('step');
			$('.progressBar #current_step').html( $current_step + '');

			if ( Date.now() - lastAnimateTime > 1000 ) {
				let $bar_width = $('.bar').width();
				$('.bar').animate({
					'width' : $bar_width + step*0.75 + 'px'
				}, 500)
				lastAnimateTime = Date.now();
			}
		}


		$('.sizeInput').on('change keydown keyup', function() {
		  var res = $(this).val()
		  //console.log(res.length);
		  if(res < 0) $(this).val(0);
		});

		function prevStepProgressBar () {
			let $current_step = $('.change_block.active').prev('.change_block').data('step');
			$('.progressBar #current_step').html( $current_step + '');

			if ( Date.now() - lastAnimateTime > 2000 ) {
				let $bar_width = $('.bar').width();
				$('.bar').animate({
					'width' : $bar_width - step*0.75 + 'px'
				}, 500)
				lastAnimateTime = Date.now();
			}
		}



		function goNext () {
		//	console.log('goNext'); console.log( $(this) );

			if ( $(this).attr('disabled') === 'disabled' ) {
				if ( $(this).hasClass('goNext') ) {$(this).append('<span class="error">Пожалуйста, выберите вариант ответа<span>');}
				if ( $(this).hasClass('getResultBtn') ) {$(this).parents('.buttons.phoneImg').prepend('<span class="error">Чтобы получить результат, введите телефон<span>');}
				
				$('.goNext .error, .buttons.phoneImg .error').fadeIn();
				setTimeout(function(){ $('.goNext .error, .buttons.phoneImg .error').fadeOut().remove(); }, 2.5e3)
				return false;
			}

			$this = $(this);
			var destination = $('#quiz').offset().top;
			var $head = $('#main .header').height();
	    $("html:not(:animated),body:not(:animated)").animate({  scrollTop: destination-$head-50 }, 500);

			if ( $(this).hasClass('getResultBtn') ) { 
					// if ( sort_sbros_set ) {
					// 	sorted_goods_array_final = sort_sbros;
					// 	if (sorted_goods_array_final.length < 1){ sorted_goods_array_final = sorted_goods_array; } 

					// 	setProduct (goods[rand], goods);
					// }
					
				createSlider();

				$('#quiz').addClass('lastStep');

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
				$('#popup4 [type="tel"]').val( $phone );


				$.ajax({
		        type: "POST",
		        url: 'spasibo.php',
		        data: $(this).parents('form').serialize()
		    }).done(function() {
		    	ym(60459085, 'reachGoal', 'form1');
		    } );
			}

			nextStepProgressBar ();

			$('.change_block.active').animate({ 'opacity' : '0' }, 2.5e3)

			$(".change_block.nextInQueue").animate({ 
					'top' : '20px', 
					'opacity' : '1'
			}, 2.5e3);
			setTimeout(function(){
				$($this).parents('.change_block.active').removeClass('active').next('.change_block.nextInQueue').addClass('active').removeClass('nextInQueue').next('.change_block').addClass('nextInQueue');
				//$('.change_block.nextInQueue').addClass('active').removeClass('nextInQueue');
				$('.change_block.active').next('.change_block').addClass('nextInQueue');

				if ( $('.change_block.active.white_block').length > 0 ) {
					$('.bg_video').css({'width' : '5000px'});
					$('#main .header').hide();


					catalogSlider_2();
					//catalogSlider ();
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
			}, 2.6e3)

			if ( document.documentElement.clientWidth < 800 ) {
		    var destination = $('#main').offset().top;
		    $("html:not(:animated),body:not(:animated)").animate({  scrollTop: destination  }, 500);
			}
		}
		// goNext

		$('.inform_block, .info_icon').hover(function(){
			$(".scroll").getNiceScroll().resize();
		}, function(){})

		function goBack () {
			if ( $(this).attr('disabled') === 'disabled' ) {return false;}

			var destination = $('#main').offset().top;
	    $("html:not(:animated),body:not(:animated)").animate({  scrollTop: destination }, 500);

    	prevStepProgressBar ();

			$('.change_block.active').animate({ 'opacity' : '0' }, 2e3, "linear")
			$('.change_block.nextInQueue').removeClass('nextInQueue');
			$('.change_block.active').prev('.change_block').addClass('nextInQueue');

			$('.nextInQueue').animate({
				'top' : '20px', 'opacity' : '1'
			}, 2.5e3, function(){
				$('.change_block.active').removeClass('active');
				$('.change_block.nextInQueue').addClass('active').removeClass('nextInQueue');
				$('.change_block.active').next('.change_block').addClass('nextInQueue');

				removePropChecked ();

				$('.nextInQueue').attr('style', function(i, style){
				    return style && style.replace(/top[^;]+;?/g, '').replace(/opacity[^;]+;?/g, '');
				});

				if ( $('.change_block.active .slider').length > 0 ) { initQuizSlider() }
				if ( $('.change_block.active .progress_round').length > 0 ) {
					counterAnimate ();
				}
			})
		}

		function removePropChecked () {
			let radios = $('.change_block.active').find('[type="radio"]');
			$.each(radios, function(index, val) {
				//console.log('value')
				//console.log(radios[index])
				if ( 
					$(radios[index]).val() == 'Не знаю' 
					|| $(radios[index]).val() == 'Пока не решил' 
					|| $(radios[index]).val() == 'Ещё не знаю' 
					|| $(radios[index]).val() == 'Не определился' 
				) {
				 $( radios[index] ).prop('checked', false);
				}
			});
			toggleNextBtn ();
		}

		function switchPresent () {
			$this = $(this);

			setTimeout(function(){
				let radio = $('.switchPresent input[type="radio"]:checked');
				let src = $(radio).parents('.form_control').find('.img img').attr('src');
				let name = $(radio).parents('.form_control').find('label').text();
				$('.presentBlock img').attr('src', src);
				$('.present_name').html( name );

			}, 100)
		}


		function checkPhone() {
			//console.log( $(this).val().includes('_') )
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








	// ДО/ПОСЛЕ + БАННЕР
	if ( document.documentElement.clientWidth > 480 ) {

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
	});


	$('.sizeInput').on('click input blur change focus keyup keydown', sizeInput)

	function sizeInput (e) {
		$this = $(this);
		//console.log('CHANGING SIZE')
		//console.log($this[0])
		//console.log('input count')
		if ( !$($this[0]).hasClass('sizeInput') ) {
			$this = e;
		}

		var testText =  $($this).val();
		if(testText*1 + 0  !=  $($this).val()){
		    $($this).val( testText.substring(0, testText.length - 1)  )
		}


		if ( $($this).val().length > -1 ) {
			$($this).addClass('filled');
			let inputs = $('.sizeInput');
			let input_counter = 0;
			//console.log('input count')
			$.each(inputs, function(index, val) {
				 if ( $(inputs[index]).val().length < 1 ) {
				 	$(inputs[index]).addClass('filled');
				 	//return false;
				 }
				 else{
				 	++input_counter;
				 	//if ( input_counter >= inputs.length) {
				 	if ( input_counter >= 1) {
				 		$($this).parents('.change_block').find('.goNext').removeAttr('disabled');
				 	}
				 }
			});
		}
		else{
			$($this).removeClass('filled')
		}
	}



// кнопки плюс/минус и инпут для ввода
function plusMinus () {
    let $input = $(this).parents('.calc_block').find('input');
    let $input_val = $($input).val();
    $($input).addClass('filled')
    $(this).parents('.calc_block').next('.calc_block').find('input').addClass('filled')

    if ( $(this).hasClass('plus') ) {
        $(this).parents('.calc_block').find('input').val( ++$input_val );
    }
    else{
        if ($input_val < 1) {$input_val = 1}
        $(this).parents('.calc_block').find('input').val( --$input_val );
    }

    if ( $input_val === 0 ) { $(this).parents('.calc_block').find('input').val( '' ); }

    makeSort($input[0]);
    sizeInput($input[0]);
    $($input).focus();
    //setTimeout(toggleNextBtn, 100)
}
$('.calc_block .plus, .calc_block .minus').on('click', plusMinus)

	</script>

	<?php endif; ?>