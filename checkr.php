<meta charset="utf-8">
<?php


session_start();

$servername="localhost";
$username="root";
$password="";
$db_name="Pharmacy";
$tbl_name="pharmacy";
//create connection
$conn=mysqli_connect($servername,$username,$password);
//Check connection
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
	}

$conn -> select_db($db_name);

// username and password sent from form
$mypharmname=$_POST['Pharmname'];
$mypharmusername=$_POST['Pharmuser'];
$mypharmpassword=$_POST['Password'];
$mypharmconfirmpassword=$_POST['ConfirmPassword'];

if($_POST['Pharmname']==NULL || $_POST['Pharmuser']==NULL ||  $_POST['Password']==NULL || $_POST['ConfirmPassword']==NULL )

{
header("Location:register.php");	
exit();
	
	
}
$sql="SELECT * FROM $tbl_name WHERE phrm_username='$mypharmusername'";

$result=mysqli_query($conn,$sql);
  // Return the number of rows in result set
$count=mysqli_num_rows($result);
 
mysqli_free_result($result);

if($count==1){

echo("Username already exists.");
}
else {
	
	
	
	
$var1="INSERT INTO `pharmacy`(`phrm_name`,`phrm_username`,`phrm_pass`) VALUES ('$mypharmname','$mypharmusername','$mypharmpassword')";
	
	mysqli_query($conn,$var1);
	
	$_SESSION["register"]="ok";
    header("location:registersuccess.php");

}
?>
