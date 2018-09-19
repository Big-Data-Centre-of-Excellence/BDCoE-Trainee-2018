
<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
{

$to_id = 'poolgamebuy@gmail.com';

$subject =  'mail check';

$message = 'bahuch gyil??';


$mail = new PHPMailer(true);


$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;


$mail->Username = 'techiehere08@gmail.com';

$mail->Password = '76683594457';

$mail->SMTPSecure = 'tls';  

$mail->Port = 587;


$mail->setFrom('techiehere08@gmail.com', 'Anand');

$mail->addAddress($to_id);

$mail->Subject = $subject;

$mail->Body = $message;


if(!$mail->send())

{

$error = "Mailer Error: " .$mail->ErrorInfo;

echo "<div class=display> '.$error.'  </div>";

}

else
{

echo " <div class=display> Message Sent </div>";

}


}


?>