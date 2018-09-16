<?php 
$con=mysqli_connect('localhost','root','','data');
$stid=$_POST['stid'];
$comment=$_POST['comment'];
$query="INSERT INTO `deletion`(`stid`, `comment`) VALUES ($stid,$comment)";
$run=mysqli_query($con,$query);

?>