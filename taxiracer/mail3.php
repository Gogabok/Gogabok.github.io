<?php

$recepient = "gogabok123@gmail.com , kirill9613@bk.ru";
$siteName = "Taxiracer";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Заявка с формы 'Получить лицензию такси' \nИмя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>