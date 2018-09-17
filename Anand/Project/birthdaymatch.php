<?php
$con=mysqli_connect('localhost','root','','data');
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
$bdate=date('d');
$bmonth=date('m');
$sql="SELECT * FROM `user` ";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
    $id=$row['id'];
    $stid=$row['stid'];
    $date=$row['date'];
    $email=$row['email'];
    $name=$row['name'];
    $month = date('m', strtotime($date));
    $day=date('j',strtotime($date));

        if($bmonth==$month && $bdate==$day)
    { 
        {

$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress($email);
$mail->Subject = 'Message sent';
$mail->Body = 'Hello '. $name.' Wish you a very HAPPY BIRTHDAY';
$mail->addAttachment('employees.json');
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'techiehere08@gmail.com';
$mail->Password = '76683594457';
if(!$mail->send()) {
  echo 'Email is not sent to'.$name.'<br>';
  echo 'Email error: ' . $mail->ErrorInfo;
} else 
  echo 'Email has been sent to '.$name.'<br>';
}
   }
 }


 ?>
