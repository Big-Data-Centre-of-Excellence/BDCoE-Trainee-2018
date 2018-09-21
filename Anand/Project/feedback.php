<html>
	<head>
		<title>FEEDBACK</title>
		<link rel="stylesheet" href="feedbackclass.css">
		<style type="text/css">
			body{
				background-image: url("img/feedback.jpg");
			}
		</style>
	</head>
	<body>
		<h1 align="center">Feedback</h1>
		<h2 align="center">We appreciate your feedback.</h2>
		<form action="feedbackdb.php" method="POST">
		<p>Name</p>
		<input type="text" name="name"><br>
		<p>Email*</p>
		<input  type="email" name="email" required><br>
		<p>Message*</p>
			<br>
		<textarea  name="message" placeholder="I am human please be nice!" required autofocus></textarea>
		<br>
		<button type="submit" name="click">Send Feedback</button>
		</form>
		</section>
	</body>
</html>