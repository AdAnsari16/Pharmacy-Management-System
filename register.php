<?php
session_start();

if(isset($_SESSION["login"]))
{
header("Location:signin2.php");
exit();
}



?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		<script type="text/javascript" src="register.js"></script>
	</head>

	<body>

		<div class="header">
  			<h1>Pharmacy Ace</h1>
		</div>

		<div class = "nav_menu"> 
            <a href = "about.html">About </a>
            <a href = "register.php">Register Your Pharmacy</a>
            <a href = "signin.php">Sign into your Pharmacy Account</a>
        </div>

        </div> 
        <form method="POST"  action="checkr.php"  autocomplete="off"> 
							
                        <div id="register">
                                <h3 >Register</h3> 
								
                             
                                 
                                 <input id="userinput" name="Pharmname" required="required" placeholder="Pharmacy name" type="text" title="Pharmacy name"><br>
                              
								
								
                                 <input id="pharmuser" name="Pharmuser" required="required" placeholder="Pharmacy Username" type="text" title="Pharmacy Username"><br>
						
                                
                                 <input id="passinput" name="Password" required="required" placeholder="Password" type="password" pattern=".{6,}" title="Password must contain atleast 6 characters"><br> 
                                
							
                                 <input id="confpassinput" name="ConfirmPassword" required="required" placeholder="Confirm Password" type="password"> <br> <br> <br>
								
								
								
                                <div> 
                                    <input id="submit" value="Submit" name="Submit" type="submit"> 
								</div> <br>
								
                                <div id="already">
									<h6>Already a Member? 
									<a href="signin.php"> Log In</a>
									</h6>
								</div>
							</div>
								
            </form>




</body>
</html>