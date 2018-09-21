<?php
$con=mysqli_connect('localhost','root','','data');

session_start();
if(isset($_SESSION['username']))
{
$sql="SELECT * FROM deletion";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
    $id=$row['id'];
    $stid=$row['stid'];
    $comment=$row['comment'];
    ?>
   <form method="POST" action="adminpanel.php"> STUDENT ID: 
   	<input type="box" name="box" value="<?php echo $stid;?>" readonly="readonly">
   	Reason:<input type="box" name="box" value="<?php echo $comment;?>" readonly="readonly"> 

   <input type="submit" name="delete" value="DELETE"><?php
   if(isset($_POST['delete']))
   {
   	$dquery="DELETE FROM `deletion` WHERE id='$id'";
   	$del=mysqli_query($con,$dquery);
   }?></form><?php
}
}
else{
    echo "hjuhu";
}
?>
