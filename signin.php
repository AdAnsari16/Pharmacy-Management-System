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
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		
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
        <form method="POST"  action="checks.php"  autocomplete="off"> 
							
                        <div id="register">
                                <h3 >Sign into your Pharmacy</h3> 
								
                             
                                 
                                 <input id="userinput" name="name" required="required" placeholder="Pharmacy name" type="text" title="Pharmacy name"><br>
                              
								
								
                                 <input id="pharmuser" name="Pharmuser" required="required" placeholder="Pharmacy Username" type="text" title="Pharmacy Username"><br>
						
                                
                                 <input id="passinput" name="Password" required="required" placeholder="Password" type="password" pattern=".{6,}" title="Password must contain atleast 6 characters"><br> 
                                
								
								<br><br>
                                <div> 
                                    <input id="submit" value="Submit" name="Submit" type="submit"> 
								</div> <br><br>
								
                                <div id="already">
									<h6>Not a Member? 
									<a href="register.php"> Sign Up</a>
									</h6>
								</div>
							</div>
								
            </form>




</body>
</html>