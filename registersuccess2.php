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
	header("location:register2.php");
	exit();
}

unset($_SESSION["register"]);

?>

<div id="thankyou" style="color: white;">Thank You.</div>
						  <div id="successreg"style="color: white;"> Pharmacist registered successfully. Click here to </div>
						  <a href="signin2.php" id="loginlink">login</a>
</body>
</html>