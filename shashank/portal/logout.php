<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portal";


$conn = mysqli_connect($servername, $username, $password);
$con= mysqli_select_db($conn,'portal');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$Username=$_SESSION['Username'];
echo $Username;
$s= "SELECT 'Id' FROM 'h' WHERE Username='$Username'";
       $result= mysqli_query($conn,$s);
         

        
if($result){
    echo 'buf';
    echo $result;
}
       else {
    echo "Error updating record: " . mysqli_error($conn);
}

if(isset($_SESSION['Username'])){
   echo"fhgkb";
    
$t = date('Y-m-d H:i:s');

$sql = "UPDATE h SET TimeOut=NOW() WHERE Username='$Username'";
$query = mysqli_query($conn,$sql);

if($query){
    
echo "Date and Time are added";
}
    else {
    echo "Error updating record: " . mysqli_error($conn);
}
}




?>