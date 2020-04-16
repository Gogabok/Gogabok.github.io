<?php

if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) ) { 
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <from@example.com>\r\n";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $result = "Имя: " . $name . "\nТелефон: " . $phone . "\nПочта " . $email;
    mail("biznesgeneracia@gmail.com", "Заявка с сайта", $result, $headers);
}

?>