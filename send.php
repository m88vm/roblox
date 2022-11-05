<?php


$to = "mail@yandex.ru"; // Тут указываем свою почту
$subject = "e-mail тест"; // Тема письма
// Сообщение
$message = "Это тестовое сообщение.\n
Если ты можешь его прочитать, значит все ОК?\n
Конец сообщения.";
// Перенос строк
$message = wordwrap($message, 70);
// возратит TRUE, если письмо успешно передано
// почтовой программе например exim
if (mail($to, $subject, $message)) {
	echo("Почта была отправлена … вроде бы");
} else { 
	echo("Увы, но почта не отправлена!");
}



if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")
    &&(isset($_POST['question'])&&$_POST['question']!="")){
        $to = 'testmail@gmail.com';
        $subject = 'Лид';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $question = $_POST['question'];
        $message='
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Имя: '.$name.'</p>
                    <p>email: '.$email.'</p>
                    <p>Письмо: '.$question.'</p>
                </body>
            </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: testmail@gmail.com\r\n";
        mail($to, $subject, $message, $headers);
?>
