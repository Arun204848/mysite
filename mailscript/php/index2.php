 <?php
include('connection.php');
?>

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
//require("mailscript/class.phpmailer.php");

require("../class.phpmailer.php");


if(isset($_GET['submit']))
{
 $name = $_GET['name'];
$mobile = $_GET['mobile'];
$address = $_GET['address'];
$loan = $_GET['loan'];
$loantype = $_GET['loantype'];


if($name!="" && $mobile!=""   && $address!=""  && $loan!="" && $loantype!=""){
    //echo  $name. $mobile. $address.  $loan .$loantype. $pay;

// Configuring SMTP server settings

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;

$mail->Username = "info@navbharatfinances.online";
$mail->Password = "Arun@999";
$mail->From = "info@navbharatfinances.online";
$mail->FromName = "Nav Bharat Finance";
$mail->AddAddress("navbharatfinance36@gmail.com");
//$mail->AddAddress("vik.sharma309@gmail.com");


$mail->Subject = 'Nav Bharat Finance';
$mail->IsHTML(true);
$mail->Body="<h3 style='color:red; font-size:15px;'Customer Name--".$name."<br> Contact Number----".$mobile."<br>Address--".$address."<br>Loan Amount--".$loan."<br>Loan Type--".$loantype."<h3>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";


// Success or Failure
if (!$mail->send()) {
    echo "error";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} else {
    echo 'Our Agent Will Contact You Soon'
    ;
    
$sql = "INSERT INTO simple_one (name,mobile,address,loan_type,loan_amount,username)
VALUES ('$name','$mobile','$address','$loantype','$loan','amit22')";
if ($db->query($sql) === TRUE) {
    echo "we will call you as soon as possible";
    header("Location:https://navbharatfinaces.site//mailscript/php/check_status/checkstatus/index.php");

 
}else {
    echo "please insert it";

}

}

}
}
 else{
echo 'Please enter valid data</p>';
}


?>
</body>
    </html>
