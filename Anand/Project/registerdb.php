<?php
$con=mysqli_connect('localhost','root','','database');
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
$date=$year1."-".$month."-".$date1;if(!is_numeric($num)||$num<0)
	echo "Invalid number";
elseif(!is_numeric($stid)) 
	echo "Invalid Student ID";
elseif($year>4||$year<2)
	echo "Incorrect year"; 
	
$query="INSERT INTO `user`(`id`, `name`, `email`, `stid`, `date`, `gender`, `year`, `number`) VALUES ('','$name','$email','$stid','$date','$gender','$year','$num')";

$run=mysqli_query($con,$query);
if($run){

}
}
?>
