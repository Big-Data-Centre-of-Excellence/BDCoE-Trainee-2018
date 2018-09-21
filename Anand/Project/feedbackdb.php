<?php 
$con=mysqli_connect('localhost','root','','data');
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$query= "INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
$run=mysqli_query($con,$query);
if(isset($_POST['click']))
{
	header('location:feedback.php');
	echo "Your feedback is being submitted";
}
?>