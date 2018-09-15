<?php 
$con=mysqli_connect('localhost','root','','register');
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$stid=$_POST['stid'];
$year=$_POST['year'];
$gender=$_POST['gender'];

$query="INSERT INTO `register`(`name`, `email`, `number`, `stid`, `year`) VALUES ('$name','$email',
		'$number','$stid','$year')";

$run=mysqli_query($con,$query);

?>