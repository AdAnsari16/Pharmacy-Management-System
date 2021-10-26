<!DOCTYPE html>
<html>
	<head>
		<title>Check Patient details</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
	<style>
	input{
		width: 40%;
	height: 5%;
	border: 1px;
	border-radius: 05px;
	padding: 8px 15px 8px 15px;
	margin:10px 0px 10px 0px;
	box-shadow:1px 1px 2px 1px grey;
	background-color:white;
	font-family:comic sans ms;

}
	</style>	
	</head>

	<body style="color: white;text-align: center;">

		<div class="header">
  			<h1>Pharmacy Ace</h1>
		</div>

		<div class = "nav_menu"> 
			<a href = "about.html"><i class="fa fa-info"></i>About </a>
			<a href = "home.html"><i class="fa fa-home"></i>Home </a>
			<a href = "contact.html"><i class="fa fa-phone"></i>Contact Us </a>
			<a href = "feedback.php"><i class="fas fa-comment"></i> Feedback </a>
		</div> 
		<br>
        <center>
		<h1 > Check Patient Details </h1>
            <form action="" method="POST">
                <input type="text" name="pname" placeholder="Enter patient name"/> <br>
                <input type="submit" name="search" value="View details "> 

            </form>




<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$db_name="pharmacy";
$tbl_name="";
//create connection
$conn=mysqli_connect($servername,$username,$password);
//Check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
    }

$conn -> select_db($db_name);


if(isset($_POST['search']))
 {
	 $pname=$_POST['pname'];

	 $query= " SELECT * FROM `patient` where pname='$pname'"; 
	 $result = mysqli_query($conn,$query);

	 if($row = mysqli_fetch_array($result))
      {
            ?>
		    <form style="color:white;" action="" method="POST">
			   <input type="hidden" name="pid" value="<?php echo $row['pid']?>" /><br>
			  Patient name&nbsp <input type="text" name="pname" value="<?php echo $row['pname']?>" disabled/><br>
			  Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="phone"value="<?php echo $row['phone']?>"  disabled/><br>
			  Date Of Birth &nbsp <input type="text" name="dob"value="<?php echo $row['dob']?>"  disabled/><br>
			  Doctors Name  <input type="text" name="doctor_name" value="<?php echo $row['doctor_name']?>" disabled/><br>
			  Address  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="paddress"value="<?php echo $row['paddress']?>" disabled /><br>
			</form>  

 		  <?php
	  }
	  else
  {
    echo '<script> alert("No Such Patient") </script>';

  }
	
 } 
 ?>

        </center>    




	</body>
</html>

