<?
# получаем данные и отсекаем пробельные символы в начале и конце:
$name = @ trim ($_POST['name']);
$email = @ trim ($_POST['email']);
$phone = @ trim ($_POST['phone']);
# проверка, переданы ли все данные
if (! $name or ! $email or ! $phone) exit ('come back');
# отправка данных на мыло админу
mail ("Save-svai@mail.ru",
      "Сообщение с сайта",
      "Имя: \n $name \n\n Телефон: \n $phone \n\n Почта: \n $email");
header ("Location: /thanks.html");
?>