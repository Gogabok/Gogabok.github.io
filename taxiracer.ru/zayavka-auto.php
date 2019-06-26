
<?php


if (empty($_POST["name"]) or empty($_POST["tel"]) or empty($_POST["auto"]))
	{
	$text = "Вы не заполнили
	обязательные поля!";
	$text2 = "Попробуйте еще раз!";
	}
else {

		$text = $_POST["name"].", благодарим Вас за проявленный интерес к нашей компании, напоминаем, что наш специалист свяжется с вами в течении 30 минут."; $text2 = "У Вас еще остались вопросы?";

		$mail_to = "info@taxiracer.ru";
		$Subject = "Заявка проверить автомобиль с сайта TaxiRacer.Ru";

		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: Письмо с сайта TaxiRacer.Ru <robot@taxiracer.ru>\r\n"; // от кого письмо

		$Body = "";
		$Body .= "Заявка проверить автомобиль с сайта TaxiRacer.Ru";
		$Body .= "<br/>";
		$Body .= "<strong>Имя: </strong>";
		$Body .= $_POST["name"];
		$Body .= "<br/>";
		$Body .= "<strong>Тел: </strong>";
		$Body .= $_POST["tel"];
		$Body .= "<br/>";
		$Body .= "<strong>Автомобиль </strong>";
		$Body .= $_POST["auto"];

		$success = mail($mail_to, $Subject, $Body, $headers);

	 }

?>

<!doctype html>
<html lang="ru-RU">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Спасибо за проявленный интерес!</title>

	<link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style940.css" media="screen and (max-width: 1220px)">
	<link rel="stylesheet" href="style768.css" media="screen and (max-width: 1020px)">
	<link rel="stylesheet" href="style320.css" media="screen and (max-width: 768px)">


 	<script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
	<script type="text/javascript">
        ymaps.ready(init);
       function init () {
                var myMap = new ymaps.Map('map', { center: [59.938000,30.388000], zoom: 16, behaviors: ['default', 'scrollZoom'] } );

				var myPlacemark = new ymaps.Placemark( [59.937661, 30.388548] , {  hintContent: '<strong>Такси «Рейсер»</strong><br/>+7 (962) 695-66-77<br/>+7 (906) 242-59-97' },
				{iconImageHref: 'images/point.png', iconImageSize: [120, 120], iconImageOffset: [-105, -120]});

				myMap.controls.add("zoomControl");
				myMap.controls.add("trafficControl");

				myMap.geoObjects.add(myPlacemark);


        }
	</script>
</head>
<body>
<br/><br/>


<div class="wrap">

    <div class="text_one_fon">
    <div class="text_one_fon_text">
		<?php print $text;?>
    </div>
    </div>

    <div class="text_one_zag"><span><?php print $text2;?></span></div>

    <div class="text_one_r"><a href="/">на главную</a></div>

<div class="clear"></div>
</div>

<footer>
<div class="wrap">
	<div class="fadres">
    	<span>Наш адрес: </span>
        Санкт-Петербург, <br>
        ул. Моисеенко, 22 «Б», офис 12
    </div>
	<div class="fsoc">
		<ul>
        	<li><a href="#"><img src="images/soc1.png"  title="" alt="" ></a></li>
        	<li><a href="#"><img src="images/soc2.png"  title="" alt="" ></a></li>
        	<li><a href="#"><img src="images/soc3.png"  title="" alt="" ></a></li>
        	<li><a href="#"><img src="images/soc4.png"  title="" alt="" ></a></li>
		</ul>
	<div class="clear"></div>
    </div>
	<div class="f_tel"><a href="tel:+79626956677">+7 (962) 695-66-77</a></div>
	<div class="f_tel"><a href="tel:+79062425997">+7 (906) 242-59-97</a></div>
	<div class="f_mail"><a href="mailto:info@taxiracer.org">info@taxiracer.org</a></div>
<div class="clear"></div>
</div>
</footer>

<div id="map"></div>

<div style="height:34px;"></div>

	<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->

	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47283654 = new Ya.Metrika({
                    id:47283654,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47283654" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>

</html>