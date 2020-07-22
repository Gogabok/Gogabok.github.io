<?php

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $arr = $_POST["arr"];
    $result = "Имя: " . $name . "\nТелефон: " . $phone . "\nДанные: " . $arr;
    mail("gogabok123@gmail.com", "Заявка с сайта", $result);


?>