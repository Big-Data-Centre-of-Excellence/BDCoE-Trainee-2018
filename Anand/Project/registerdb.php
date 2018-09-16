<?php
$con=mysqli_connect('localhost','root','','data');
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$stid=$_POST['stid'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$date1=$_POST['day'];
$month=$_POST['month'];
$year1=$_POST['year1'];
$date=$year1."-".$month."-".$date1;
echo $date;

$query="INSERT INTO user (name, email, number, stid, year,gender,date) VALUES ('$name','$email',
		'$number','$stid','$year','$gender','$date')";

$run=mysqli_query($con,$query);


?>
