<?php

$data = trim($_POST["value"]);
$pagetitle = "Заявка с сайта ";

mail('info@smart-loft.ru', $pagetitle, $data);
header ("Location: /thanks.html");

?>