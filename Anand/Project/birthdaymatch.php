<?php
$con=mysqli_connect('localhost','root','','data');
require_once ('facebookapp/vendor/autoload.php');
require_once ('gmail/vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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
    $year=$row['year'];
    $day=date('j',strtotime($date));
    if($year==2)
    	$suf='nd';
    else if($year==3)
    	$suf='rd';
    else
    	$suf='th';
    { 
	$messages = array(
		'Wishing you a day filled with happiness and a year filled with joy. Happy birthday! to '.$name.'of'. $year.$suf. ' year',
		'Sending you smiles for every moment of your special day…Have a wonderful time and a very happy birthday! to '.$name.' of '. $year.$suf. ' year',
		'Hope your special day brings you all that your heart desires! Here’s wishing you a day full of pleasant surprises! Happy birthday! to '.$name.' of '. $year. $suf.' year',
		'On your birthday we wish for you that whatever you want most in life it comes to you just the way you imagined it or better. Happy birthday! to '.$name.' of '. $year. $suf.' year',
	);

	}
        if($bmonth==$month && $bdate==$day)
			{ 
				        //mail to the users
				          {				         
				{
				$m=$messages[rand(0, count($messages) - 1)];
				$to_id = $email;
				$subject =  'Birthday Wish';
				$message = $m;
				$mail = new PHPMailer(true);
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'techiehere08@gmail.com';
				$mail->Password = '76683594457';
				$mail->SMTPSecure = 'tls';  
				$mail->Port = 587;
				$mail->setFrom('techiehere08@gmail.com', 'BDCOE');
				$mail->addAddress($to_id);
				$mail->Subject = $subject;
				$mail->Body = $message;
				if(!$mail->send())
				{
				$error = "Mailer Error: " .$mail->ErrorInfo;
				echo "<div class=display> '.$error.'  </div>";
				}
				else
				echo " <div class=display> Email Sent </div>";
				}
			    }//mail over
                  {
                //sms
                     
                // Account details
                $apiKey = urlencode('8EDXM/HRXX8-6SOZiEONiAwm6ixJtEBlP7Wglnc79h');
               
                // Message details
                $m=$messages[rand(0, count($messages) - 1)];
                $numbers = array($num);
                $sender = urlencode('TXTLCL');
                $message = rawurlencode($m);
               
                $numbers = implode(',', $numbers);
               
                
                $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
               
                $ch = curl_init('https://api.textlocal.in/send/');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                // Process your response here
                echo $response;
                echo "SmS is sent to". $name;
  
				      } //sms over*/
				      {//facebook
				      	$m=$messages[rand(0, count($messages) - 1)];
				      	$img='img/'.$stid.'.jpg';
						$fb = new Facebook\Facebook([
						'app_id' => '247169872653933',
						'app_secret' => '4f0795b718156df18e9614d8b0021b3e',
						'default_graph_version' => 'v3.1',
						]);
						$pageAccessToken = 'EAADgzLh1bm0BAKVy5VRkTXJPtsLWhyICz7NDRxkZACInbs5ufBPJJFhXP5WgZBdisPM9VxxJf17go4viCFFxsvYoAxL6RDEJrSBQCGdx5zMXIvqs8B2ZAAPYl6haBRIAwM1TVnBHUuXvZAtmrdb86rb5OrdYUItwrRo0mE6xrHICNllbQsUYjMSFhw1SduM3aSVia3DppwZDZD';
						$msg =[
						'message' => $m,
						'source' => $fb->fileToUpload($img),
						//'url' => 'https://happybirthdaywishesworld.com/wp-content/uploads/2017/12/Happy-birthday-images.jpg',
						];
						try
						{
						$response = $fb->post('/me/photos', $msg,$pageAccessToken);
						}
						catch(Facebook\Exceptions\FacebookResponseException $e)
						{
						echo 'Graph returned an error: '.$e->getMessage();
						exit;
						}
						catch(Facebook\Exceptions\FacebookSDKException $e)
						{
						echo 'Facebook SDK returned an Error: '.$e->getMessage();
						exit;
						}
						$graphNode = $response->getGraphNode();
						echo 'ID:'.$graphNode['id'];
						} //facebook over
	        }
}
 ?>