<?php
if(isset($_COOKIE['Amazon']))
{
$name="Amazon";
$visit= $_COOKIE['Amazon']+1;
$expiry= time() + (10);
setcookie($name,$visit,$expiry);
}
else
{
$name="Amazon";
$visit=1;
$expiry= time() + (60*60*24);
setcookie($name,$visit,$expiry);
}
?>
<!doctype html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<?php
echo "You are visiting here ".$_COOKIE['Amazon']. " times";
?>
</body>
</html>
