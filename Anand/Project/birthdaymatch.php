<?php
$con=mysqli_connect('localhost','root','','data');
$bdate=date('d');
$bmonth=date('m');
$sql="SELECT * FROM `user` ";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
    $id=$row['id'];
    $stid=$row['stid'];
    $date=$row['date'];
    $month = date('m', strtotime($date));
    $day=date('j',strtotime($date));
    if($bmonth==$month && $bdate==$day)
    {
        echo "hell";
    }
    else
        echo "lol";
}

 ?>
