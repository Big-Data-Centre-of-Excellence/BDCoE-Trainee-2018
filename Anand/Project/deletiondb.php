<?php 
$con=mysqli_connect('localhost','root','','register');
$stid=$_POST['stid'];
$comment=$_POST['comment'];
$query="INSERT INTO `deletion`(`stid`, `comment`) VALUES ($stid,$comment)";
$run=mysqli_query($con,$query);
if($run==TRUE)
	echo "yes";
else
	echo "NO";
?>