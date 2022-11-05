<?php
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
