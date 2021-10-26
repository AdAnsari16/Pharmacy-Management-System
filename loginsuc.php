<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Successfully logged in</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
<body>

<?php

session_start();


if($_SESSION["signin"]!="ok")
{
header("Location:signin.php");
exit();
}
?>

<div id="thankyou" style="color: white;">Logged in.</div>
						  <div id="successreg"style="color: white;">Click here to login into your pharmacist account </div>
						  <a href="signin2.php" id="loginlink">Continue</a>
</body>
</html>
