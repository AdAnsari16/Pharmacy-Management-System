<!DOCTYPE html>
    <html>
	<head>
		<title>Check medicine details</title>
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
	<style>
	input{
	width: 40%;
	height: 5%;
	border: 1px;
	border-radius: 05px;
	padding: 8px 15px 8px 15px;
	margin:10px 0px 10px 0px;
	box-shadow:1px 1px 2px 1px grey;

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
		<h1 style="color: white"> Generate Bill </h1>
            <form action="gb.php" method="POST">
                <input type="text" name="date" placeholder="YYYY-MM-DD"  title="Enter a date in this format YYYY-MM-DD"/> <br>
                <input type="number" name="amount" placeholder="Enter Amount"/> <br>
                <input type="text" name="pid" placeholder="Enter patient id"/> <br>
                <input type="number" name="phmid" placeholder="Enter pharmacist id"/> <br>
                <input type="text" name="medlist" placeholder="Enter the medicine list"/> <br>
                <input type="submit" name="search" value="Generate "> 

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
 	 $date=$_POST['date'];
	 $amount=$_POST['amount'];
	 $name=$_POST['pid'];
	 $phmid=$_POST['phmid'];
	 $medlist=$_POST['medlist'];

	 if($_POST['date']==NULL || $_POST['amount']==NULL || $_POST['pid']==NULL || $_POST['phmid']==NULL || $_POST['medlist']==NULL  )

		{
		header("Location:gb.php");	
		exit();
		}
	else
	{

	 
	

	$var1="INSERT INTO `bill` (`bill_date`,`amount`,`pid`,`Phm_id`) VALUES ('$date','$amount','$name','$phmid')";
	
	$res = mysqli_query($conn,$var1);

	$billno = mysqli_insert_id($conn);
   
   $var2="INSERT INTO `medicine_list` (`med_list`) VALUES ('$medlist')";

	$var3 = mysqli_query($conn,$var2);

	if($var3)
    {
   
    	$var4= "SELECT bill.bill_no,bill.bill_date,bill.amount,medicine_list.med_list FROM bill INNER JOIN medicine_list ON bill.bill_no = medicine_list.bill_no WHERE bill.bill_no='$billno'";

    	$res2= mysqli_query($conn,$var4);

    	while($row1 = mysqli_fetch_array($res2))
      {
            ?><br>
            <h1 style="color: white;">BILL</h1><br><br>
		    <form action="" method="POST" style="color: white;">
			  Bill No: <input type="text" name="billno" value="<?php echo $row1['bill_no']?>" />
			  Bill Date:  <input type="text" name="billdate" value="<?php echo $row1['bill_date']?>" /><br>
			  Amount:   <input type="text" name="amount"value="<?php echo $row1['amount']?>"  />
			   Medicines:<input type="text" name="medlist"value="<?php echo $row1['med_list']?>"  />
			</form>  

 		  <?php
	  }


    }
    else{
        echo '<script> alert("Bill Not Generated") </script>';
    }
}

}

unset($_SESSION["search"]);

?>

</body>
</html>