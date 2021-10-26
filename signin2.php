<?php
session_start();

if(isset($_SESSION["login"]))
{
header("Location:home.html");
exit();
}



?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign in </title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		
	</head>

	<body>

		<div class="header">
  			<h1>Pharmacy Ace</h1>
		</div>

		<div class = "nav_menu"> 
            <a href = "register2.php">Register pharmacist</a>
            <a href = "signin2.php">Sign into your Pharmacist Account</a>

        </div>

        </div> 
        <form method="POST"  action="checks2.php"  autocomplete="off"> 
							
                        <div id="register">
                                <h3 >Sign into your Pharmacist account</h3> 
								
                             
                                 
                                 <input id="userinput" name="phmid" required="required" placeholder="Pharmacist ID" type="text" title="Pharmacist ID"><br>
                              
								
								
                                 <input id="pharmuser" name="Pharmuser" required="required" placeholder="Pharmacist Username" type="text" title="Pharmacist Username"><br>
						
                                
                                 <input id="passinput" name="Password" required="required" placeholder="Password" type="password" pattern=".{6,}" title="Password must contain atleast 6 characters"><br> 
                                
								
								
                                <div> <br><br>
                                    <input id="submit" value="Submit" name="Submit" type="submit"> 
								</div> <br><br><br>
								
                                <div id="already">
									<h6>Not a Member? 
									<a href="register2.php"> Sign Up</a>
									</h6>
								</div>
							</div>
								
            </form>




</body>
</html>