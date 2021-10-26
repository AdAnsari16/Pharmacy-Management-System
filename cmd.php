<!DOCTYPE html>
<html>
	<head>
		<title>Check medicine details</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="style1.css">
  
  

  
  
	<style>
	input,textarea{
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
    
    
	
	

}
	</style>	
	</head>

	<body>

		<div class="header">
  			<h1>Pharmacy Ace</h1>
		</div>

		<div class = "nav_menu"> 
			<a href = "about.html"><i class="fa fa-info"></i>About </a>
			<a href = "home.html"><i class="fa fa-home"></i>Home </a>
			<a href = "contact.html"><i class="fa fa-phone"></i>Contact Us </a>
			<a href = "feedback.php"><i class="fas fa-comment"></i> Feedback </a>
        </div> 
        <center>
		<h1 style="color: white"> Check Medicine Details </h1>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Enter medicine name"/> <br>
                <input type="submit" name="search" value="View details "> 

            </form>




<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$db_name="Pharmacy";
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
	 $name=$_POST['name'];

	 $query= " SELECT * FROM medicine where Mname='$name'"; 
	 $result = mysqli_query($conn,$query);

	 if($row = mysqli_fetch_array($result))
	 {
		?>
		
		<form action="" method="POST">
		
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Mname" value=>Name: <?php echo $row['Mname']?> </textarea> &nbsp
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Mtype"value=>Type: <?php echo $row['Mtype']?> </textarea> 
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Manufacturer"value=>Manufacturer: <?php echo $row['Manufacturer']?>  </textarea>&nbsp
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Size" value=>Size: <?php echo $row['Size']?> </textarea>
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Mprice" value=>Price: <?php echo $row['Mprice']?> </textarea>&nbsp
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Composition" value=>Composition: <?php echo $row['Composition']?> </textarea>
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Description" value=>Description: <?php echo $row['Description']?> </textarea>&nbsp
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Dosage" value=>Dosage: <?php echo $row['Dosage']?> </textarea>
		<textarea disabled style="resize: none;" rows="4" cols="80" name="Symptoms" value=>Symptoms: <?php echo $row['Symptoms']?> </textarea>
		</form>  
		

	   <?php
  }
  else
  {
    echo '<script> alert("No such Medicine") </script>';

  }
	
 } 
 ?>

        </center>    
       







</body>

</html>



