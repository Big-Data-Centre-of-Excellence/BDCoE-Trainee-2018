<html>
<head>
	<link rel="stylesheet" type="text/css" href="registerclass.css">
	<title></title>
</head>
<body >
	<div class="moveform">
		<form method="POST" action="registerdb.php" >
				<h2>REGISTER</h2>
			<input type="text" name="name" placeholder="Your Name" required="required"></br>
			<input type="email" name="email" placeholder="Email ID" required="required" ></br>
			<input type="text" name="number" placeholder="Mobile Number" required="required" ></br>
			<input type="text" name="stid" placeholder="Student ID" required="required"></br>
			<input type="number" name="year" placeholder="Year" required="required"></br></br>
			<select required="required" name="day">
					<option value="hu"> DAY </option>
					<?php for($i=1;$i<32;$i++) {?>

					 <option value="<?php echo $i;?>"> <?php echo $i;?></option>
					<?php }?>
				</option>
			</select>
			<select required="required" name="month">
					<option> MONTH </option>
					<?php for($i="1";$i<"13";$i++) {?>

					 <option value="<?php echo $i;?>"> <?php echo $i;?></option>
					<?php }?>
				</option>
			</select>
			<select required="required" name="year1">
					<option> YEAR </option>
					<?php for($i=2018;$i>1990;$i--) {?>

					 <option value="<?php echo $i;?>"> <?php echo $i;?></option>
					<?php }?>
				</option>
			</select></br></br>
			<input type= "radio" name="gender" value="Male" required="required">Male
			<input type= "radio" name="gender" value="Female" required="required">Female </br>
			<input type= "file" name="image" accept="image/*">
			<a href=""><input type= "submit" name="submit" value="SUBMIT"></a>
		</form>
	</div>
	
</body>
</html>
