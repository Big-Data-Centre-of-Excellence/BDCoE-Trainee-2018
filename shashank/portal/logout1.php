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
   ?>
    

        
            
     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="logout.php" method="post">
            <label for="">Logout</label><br>
            <button type="submit" value="Logout">Logout</button>
            
        </form>
    </body>
    </html>