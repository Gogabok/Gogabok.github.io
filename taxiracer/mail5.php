<?php

$recepient = "director.alternativa@yandex.ru";
$siteName = "Taxiracer";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Заявка с формы 'Смены по 8, 10, 12 часов' \nИмя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>