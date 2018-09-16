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
    echo "<h1>".$id.". student id---     ".$stid."           <br>comment-- ".$comment."<br></h1>" ;
}
}
else{
    echo "hjuhu";
}
?>
