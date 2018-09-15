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
if(isset($_POST['Username']))
{ 
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    $s="select * from signup where Username='".$Username."'AND Password='".$Password."' limit 1";
    
    $result=mysqli_query($conn,$s);
    if(mysqli_num_rows($result)==1){
    $_SESSION['Username']=$Username;
        
        echo "login succesful";
        
        
        
    


if(isset($_SESSION['Username'])){
   
    
$t = date('Y-m-d H:i:s');
    $r=time();
    
$sql= "INSERT INTO h (Username,TimeIn) VALUES('$Username',NOW())";
$query = mysqli_query($conn,$sql);

if($query)
{
echo "Date and Time are added";
}
}

}
}
header('url:logout.php');
?>

   




