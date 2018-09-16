<html>
<head>
	<link rel="stylesheet" type="text/css" href="requestclass.css">
	<title></title>
</head>
<body >
	<div class="moveform" >
		<form action="request.php" method="POST">
				<h2>DELETION</h2>
			<input type="number" name="stid" placeholder="Student ID"></br>
			<input type="comment" name="comment" placeholder="Reason">
			<input type= "submit" name="submit" value="REQUEST">

		</form>
	</div>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','data');

session_start();
if(isset($_POST['submit']))
{
$stid=$_POST['stid'];
$comment=$_POST['comment'];
$query="INSERT INTO deletion (stid,comment) VALUES ('$stid','$comment')";

$run=mysqli_query($con,$query);
if($run)
{
	echo "<h1>Your request has been made.</h1>";
}
}
?>
