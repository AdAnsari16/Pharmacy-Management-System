<DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    <style> 
    h1 {
  color: white;
}
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
    table, th, td {  
    color:white;
    border: 3px solid white;
    padding: 20px;
}
table {
  border-spacing: 5px;
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
          <br>
          &nbsp
          <center>
          <h1>Delete Patient Details</h1>
          <table>
	<tr>
  <td>Pid</td>
  <td>Name</td>  
	<td>Phone No</td>
	<td>Dob</td>
	<td>Doctor's name</td>
 
    <td>Address</td>
    <td>Action</td>
	</tr>
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
    $result = mysqli_query($conn,"SELECT * FROM `patient`");
	$pid=10233;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr style="color:white;" class="<?php if(isset($classname)) echo $classname;?>">
  <td><?php echo $row["pid"]; ?></td>
  <td><?php echo $row["pname"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
	<td><?php echo $row["dob"]; ?></td>
	<td><?php echo $row["doctor_name"]; ?></td>
    
    <td><?php echo $row["paddress"]; ?></td>
	<td><a href="delete-process.php?pid=<?php echo $row["pid"]; ?>">Delete</a></td>
	</tr>
	<?php
	$pid++;
	}
	?>
</table>
</body>
</html