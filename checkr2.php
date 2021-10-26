<meta charset="utf-8">
<?php


session_start();

$servername="localhost";
$username="root";
$password="";
$db_name="pharmacy";
$tbl_name="pharmacist";
//create connection
$conn=mysqli_connect($servername,$username,$password);
//Check connection
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
	}

$conn -> select_db($db_name);

// username and password sent from form
$myusername=$_POST['Username'];
$myemailid=$_POST['Emailid'];
$mypassword=$_POST['Password'];
$myconfirmpassword=$_POST['ConfirmPassword'];
$myphone=$_POST['Phone'];
$myname=$_POST['Name'];
$mypharmpassword=$_POST['PhrmPassword'];

if($_POST['Username']==NULL || $_POST['Emailid']==NULL || $_POST['Password']==NULL || $_POST['ConfirmPassword']==NULL || $_POST['Phone']==NULL || $_POST['Name']==NULL || $_POST['PhrmPassword']==NULL )

{
header("Location:register2.php");	
exit();
	
	
}
$sql="SELECT * FROM $tbl_name WHERE phm_username='$myusername'";

$result=mysqli_query($conn,$sql);
  // Return the number of rows in result set
$count=mysqli_num_rows($result);
 
mysqli_free_result($result);

if($count==1){

echo("Username already exists.");
}
else {
	
	
$var1= "INSERT INTO `pharmacist` (`phm_username`, `phm_pass`, `email`, `name`, `phone`,`phrm_pass`) VALUES ('$myusername','$mypassword','$myemailid', '$myname','$myphone','$mypharmpassword')";
	
	mysqli_query($conn,$var1);
	
	$_SESSION["register"]="ok";
    header("location:registersuccess2.php");

}
?>
