<!DOCTYPE html>
<html>
	<head>
		<title>Check Stock</title>
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
        <center>
		<h1 > Check Stock </h1>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Enter stock name"/> <br>
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
	 $name=$_POST['name'];

	 $query= " SELECT * FROM stock where sname='$name'"; 
	 $result = mysqli_query($conn,$query);

	 if($row = mysqli_fetch_array($result))
      {
            ?>
		    <form action="" method="POST">
			   <input type="hidden" name="stock_id" value="<?php echo $row['stock_id']?>" /><br>
			  Stock name &nbsp<input type="text" name="sname" value="<?php echo $row['sname']?>" /><br>
			  Category  &nbsp&nbsp&nbsp&nbsp &nbsp<input type="text" name="category"value="<?php echo $row['category']?>"  /><br>
			  Description &nbsp&nbsp <input type="text" name="description"value="<?php echo $row['description']?>"  /><br>
			  Quantity  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="text" name="stock_no" value="<?php echo $row['stock_no']?>" /><br>
			   
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

