<!DOCTYPE html>
<html>
	<head>
		<title>Successfully registered</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
<body>

<?php

session_start();

if($_SESSION["register"]!="ok")
{
	header("location:register.php");
	exit();
}


unset($_SESSION["register"]);

?>

<div id="thankyou" style="color: white;">Thank You.</div>
						  <div id="successreg"style="color: white;">Registration of Pharmacy successfull. Click here to </div>
						  <a href="signin.php" id="loginlink">login</a>
</body>
</html>