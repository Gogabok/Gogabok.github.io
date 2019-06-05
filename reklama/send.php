<?
# получаем данные и отсекаем пробельные символы в начале и конце:
$name = @ trim ($_POST['name']);
$email = @ trim ($_POST['email']);
$want = @ trim ($_POST['want']);
# проверка, переданы ли все данные
if (! $name or ! $email or ! $want) exit ('come back');
# отправка данных на мыло админу
mail ("gogabok123@gmail.com",
      "Сообщение с сайта",
      "Имя: \n $name \n\n Пожелания: \n $want \n\n Почта: \n $email");
header ("Location: /index.html#thanks");
?>