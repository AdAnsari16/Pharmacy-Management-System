<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Successfully logged in</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
						  <div id="successreg"style="color: white;"> Click here to continue to your pharmacy  </div>
						  <a href="home.html" id="loginlink">Continue</a>
</body>
</html>
