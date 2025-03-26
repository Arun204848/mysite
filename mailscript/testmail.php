<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            body {
  background-color: lightblue;
}
        </style>
        
    </head>
    <body>




<?php

require("class.phpmailer.php");

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "info";
$mail->Password = "Gungun@123";
$mail->setFrom('info@', 'rahul');
$mail->addAddress('vik.sharma309@gmail.com', 'Receiver Name');
$mail->Subject = 'Testing PHPMailer';
$mail->Body = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo "error";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>

</body>
    </html>
