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

$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];
$Branch = $_POST['Branch'];
$Studentno = $_POST['Studentno'];
$Year = $_POST['Year'];
$_SESSION['Name']=$Name;
$_SESSION['Surname']=$Surname;
$_SESSION['Username']=$Username;

$sql = "INSERT INTO signup (Name, Surname, Username,Password,Confirmpassword,Branch,Studentno,Year)
VALUES ('$Name','$Surname','$Username','$Password','$Confirmpassword','$Branch','$Studentno','$Year')";





   if(!mysqli_query($conn,$sql)){
    echo "not inserted";
}
else{
    echo "inserted";
}


?>