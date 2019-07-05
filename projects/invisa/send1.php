<?
# получаем данные и отсекаем пробельные символы в начале и конце:
$name = @ trim ($_POST['name']);
$contact = @ trim ($_POST['contact']);
$tel = @ trim ($_POST['tel']);
$message = @ trim ($_POST['message']);
# проверка, переданы ли все данные
if (! $name or ! $contact or ! $tel or ! $message) exit ('come back');
# отправка данных на мыло админу
mail ("in.visa@mail.ru",
      "Сообщение с сайта",
      "Имя: $name \n\n Телефон: \n $tel \n\n Почта: \n $contact \n\n Гражданство: \n $message");
header ("Location: /thanks.html");
?>