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
            <h1 style="color:white;"> Add New Patient  </h1>
          <form style="color:white;"  method="post">    
		Phone no:<br>
		<input type="text" name="phone">
		<br>
		DOB:<br>
		<input type="text" name="dob" placeholder="YYYY-MM-DD"  title="Enter a date in this format YYYY-MM-DD"/>
		<br>
		Doctor name:<br>
		<input type="text" name="doctor_name">
		<br>
		Name:<br>
		<input type="text" name="pname">
        <br>
        Address: <br>
		<input type="text" name="paddress">
		<br><br>
		<input type="submit" name="save" value="Add patient">
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
  
  
  if(isset($_POST['save']))
  {
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $doctor_name=$_POST['doctor_name'];
    $pname=$_POST['pname'];
    $paddress=$_POST['paddress'];

    $query="INSERT INTO `patient` (phone,dob,doctor_name,pname,paddress) VALUES ('$phone','$dob','$doctor_name','$pname','$paddress')";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
      {
          echo '<script> alert("Patient Added successfully") </script>';
      }
      else{
          echo '<script> alert("Error adding patient") </script>';
      }
   }
  
  ?>
</body>
  </html>