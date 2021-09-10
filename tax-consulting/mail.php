 <?php
$to = "IKGapirov@gmail.com"; // емайл получателя данных из формы
$tema = "Contact V17"; // тема полученного емайла
$message = "Tell us your name *".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "Enter your email *".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Enter phone number".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Message *".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>