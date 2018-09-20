<?php
$con=mysqli_connect('localhost','root','','data');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['number'];
$stid=$_POST['stid'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$date1=$_POST['day'];
$month=$_POST['month'];
$year1=$_POST['year1'];
$date=$year1."-".$month."-".$date1;
$query="INSERT INTO `user`(`id`, `name`, `email`, `stid`, `date`, `gender`, `year`, `number`) VALUES ('','$name','$email','$stid','$date','$gender','$year','$num')";

$run=mysqli_query($con,$query);
if($run){

	
    header('location:index.html');
	
}
}
?>
