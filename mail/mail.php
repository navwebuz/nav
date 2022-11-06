<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$title = $_POST['title'];
$email = $_POST['email'];
$content = $_POST['content'];

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mail.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'phpblog1700@mail.ru';                     //SMTP username
    $mail->Password   = 'TbtzBqXnijWEqarqweiS';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('phpblog1700@mail.ru', 'Заявка с сайта');
    $mail->addAddress('navruzusarov@gmail.com', 'Администратору сайта');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $title;
    $mail->Body    =    "<div style=\"background: yellow; min-height: 100vh;\">
    <h1 style=\"text-align: center; font-size: 30px;\">Тема письма: $title</h1>
    <h2 style=\"text-align: center; font-size: 25px;\">Адрес отправителя: $email</h2>
    <p style=\"border: 5px solid red; font-size: 20px;\">Содержание письма: <br> $content</p>
    <img src=\"https://i.pinimg.com/236x/8a/ba/12/8aba12738493c0b79ce69b688ce9bbff--ryan-dungey-red-bull.jpg\">
</div> ";
//     $mail->Body    =    "<div style=\"background: yellow; min-height: 100vh;\">
//     <h1 style=\"text-align: center; font-size: 30px;\">Тема письма: $title</h1>
//     <h2 style=\"text-align: center; font-size: 25px;\">Адрес отправителя: $email</h2>
//     <p style=\"border: 5px solid red; font-size: 20px;\">Содержание письма: <br> $content</p>
//     <img src=\"https://i.pinimg.com/236x/8a/ba/12/8aba12738493c0b79ce69b688ce9bbff--ryan-dungey-red-bull.jpg\">
// </div> ";

    $mail->send();
    echo('Message has been sent');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}