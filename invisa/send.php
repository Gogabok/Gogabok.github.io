<?
# получаем данные и отсекаем пробельные символы в начале и конце:
$name = @ trim ($_POST['name']);
$contact = @ trim ($_POST['contact']);
$tel = @ trim ($_POST['tel']);
# проверка, переданы ли все данные
if (! $name or ! $contact or ! $tel) exit ('Вернитесь, вы не заполнили форму');
# отправка данных на мыло админу
mail ("in.visa@mail.ru",
      "Сообщение с сайта",
      "Имя: \n $name \n\n Телефон: \n $tel \n\n Почта: \n $contact");
header ("Location: /thanks.html");
?>