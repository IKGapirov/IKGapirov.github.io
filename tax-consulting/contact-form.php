<?php
$name = trim($_POST['name']);
$mail = trim($_POST['mail']);
$message = trim($_POST['message']);

// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
$fromMail = 'admin@yousite.ru';
$fromName = 'yousite.ru Форма';

// Сюда введите Ваш email
$emailTo = 'IKGapirov@gmail.com';
$subject = 'Hyperspace by HTML5 UP';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// тело письма
$body = "Получено письмо с сайта testsite.ru \n Имя: $name\nE-mail: $mail\nСообщение: $message";
?>