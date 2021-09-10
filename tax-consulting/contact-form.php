<?php

$to = 'IKGapirov@gmail.com'; // адрес получателя
$message = "Имя: {$_POST['name']}\r\n"; // добавляем имя в текст
$headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n"; // установливаем кодировку
$headers .= 'From: mail@site.com' . "\r\n"; // добавляем отправителя
 
if( mail($to, $subject, $message, $headers) ){
 echo '<p style="color: green;">Ваше сообщение отправлено</p>';
}else{
 echo '<p style="color: red;">Ошибка!</p>';
}
?>