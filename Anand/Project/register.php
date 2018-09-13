<html>
<head>
	<link rel="stylesheet" type="text/css" href="formclass.css">
	<title></title>
</head>
<body >
	<div class="moveform">
		<form>
				<h2>REGISTER</h2>
			<input type="text" name="name" placeholder="Your Name"></br>
			<input type="email" name="email" placeholder="Email ID"></br>
			<input type="text" name="number" placeholder="Mobile Number"></br>
			<input type="text" name="stid" placeholder="Student ID"></br>
			<input type="number" name="year" placeholder="Year"></br>
			<select>
					<option> DAY </option>
					<?php for($i=1;$i<32;$i++) {?>
					
					 <option value="<?php echo $i;?>"> <?php echo $i;?></option> 
					<?php }?>
				</option>
			</select>
			<select>
					<option> MONTH </option>
					<?php for($i="1";$i<"13";$i++) {?>
					
					 <option value="<?php echo $i;?>"> <?php echo $i;?></option> 
					<?php }?>
				</option>
			</select> 
			<select>
					<option> YEAR </option>
					<?php for($i=2018;$i>1990;$i--) {?>
					
					 <option value="<?php echo $i;?>"> <?php echo $i;?></option> 
					<?php }?>
				</option>
			</select></br>
			<input type= "radio" name="gender" value="gender" >Male
			<input type= "radio" name="gender" value="gender" >Female </br>
			<input type= "submit" name="submit" value="SUBMIT">		
		</form>
	</div>
</body>
</html>