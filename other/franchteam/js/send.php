<?
        $to = '9932202@mail.ru, info@franchteam.ru, quiz24-job@ yandex.ru, gogabok123@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайтаа FranchTeam. Контакты.'; //Загаловок сообщения
        $phone = $_POST['phone'];
        $connect = $_POST['way'];
        $q1 = $_POST['answer1'];
        $q2 = $_POST['answer2'];
        $q3 = $_POST['answer3'];
        $q4 = $_POST['answer4'];
        $q5 = $_POST['answer5'];
        $text .= "Телефон - {$phone} \r\n";
        $text .= "Способо связи - {$connect} \r\n";
        $text .= "{$q1} \r\n";
        $text .= "{$q2} \r\n";
        $text .= "{$q3} \r\n";
        $text .= "{$q4} \r\n";
        $text .= "{$q5} \r\n";
        $message = $text; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Квиз Франчтим <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>