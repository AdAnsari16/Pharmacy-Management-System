<meta charset="utf-8">
<?php


session_start();

$servername="localhost";
$username="root";
$password="";
$db_name="Pharmacy";
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
$mypharmname=$_POST['phmid'];
$mypharmusername=$_POST['Pharmuser'];
$mypharmpassword=$_POST['Password'];


if($_POST['phmid']==NULL || $_POST['Pharmuser']==NULL ||  $_POST['Password']==NULL )

{
header("Location:about.php");	
exit();
	

}


$mypharmusername = stripslashes($mypharmusername);
$mypharmpassword = stripslashes($mypharmpassword);
$mypharmusername = mysqli_real_escape_string($conn,$mypharmusername);
$mypharmpassword = mysqli_real_escape_string($conn,$mypharmpassword);
	

$sql="SELECT * FROM $tbl_name WHERE phm_username='$mypharmusername' and phm_pass='$mypharmpassword'";

$result=mysqli_query($conn,$sql);

// Mysqli_num_row is counting table row
$count=mysqli_num_rows($result);

mysqli_free_result($result);
if($count==1){
	

$_SESSION["signin"]="ok";
header("location:loginsuc2.php");

}
else {
	echo("Incorrect username or password");
}
?>