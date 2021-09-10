<?php
if (isset($_POST['first-name'])) {$name = $_POST['first-name']; if ($name == '') {unset($name);}}
if (isset($_POST['last-name'])) {$name = $_POST['last-name']; if ($name == '') {unset($name);}}
if (isset($_POST['mail'])) {$mail = $_POST['mail']; if ($mail == '') {unset($mail);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['message'])) {$message = $_POST['message']; if ($message == '') {unset($message);}}
 
if (isset($name) && isset($mail) && isset($phone) && isset($message)){
 
$address = "IKGapirov@gmail.com";
$mes = "Имя: $name \nE-mail: email \nТема: $phone \nТекст: $message";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$mail");
if ($send == 'true')
{echo "Сообщение отправлено успешно. Перейдите на главную страницу блога <a href='https://bloggood.ru/'>BLOGGOOD.RU</a>,и вы сможете продолжить ваш просмотр";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Заполнили все поля!!!";
}
?>