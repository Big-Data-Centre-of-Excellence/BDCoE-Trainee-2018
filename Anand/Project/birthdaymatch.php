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
    $num=$row['number'];
    $month = date('m', strtotime($date));
    $day=date('j',strtotime($date));

        if($bmonth==$month && $bdate==$day)
        { 
        //mail to the users
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
            if(!$mail->send()) 
            {
              echo 'Email is not sent to'.$name.'<br>';
              echo 'Email error: ' . $mail->ErrorInfo;
            } 
            else 
              echo 'Email has been sent to '.$name.'<br>';
          }
                    {
                    //sms
                          
                // Account details
                $apiKey = urlencode('8EDXM/HRXX8-6SOZiEONiAwm6ixJtEBlP7Wglnc79h');
                
                // Message details
                $numbers = array($num);
                $sender = urlencode('TXTLCL');
                $message = rawurlencode('HAPPY BIRTHDAY');
               
                $numbers = implode(',', $numbers);
               
                // Prepare data for POST request
                $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
               
                // Send the POST request with cURL
                $ch = curl_init('https://api.textlocal.in/send/');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                // Process your response here
                echo $response;
                echo "SmS is sent to". $name;
  
          }
        }
      }
 ?>
