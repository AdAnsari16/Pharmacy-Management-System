 <?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style> 
    h1 {
  color: white;

}
    textarea{
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
        	<h2 style="color: white;">Feedback Form</h2><br>
        	<form action="feedback.php" method="POST">
        		<table border="1" bgcolor="gray">
        			<tr>
                        <td align="center">Name</td>
        				<td colspan="2" align="center">
			        		
			        		<input type="text" id="name" name="name">
			        	</td>
        			</tr>
        			
                    <tr>
                        <td align="center">Select age</td>
                        <td align="center">
                            <select name="age">
                                <option value="">Select Any one</option>
                                <option value="10-20">10 to 20</option>
                                <option value="20-30">20 to 30</option>
                                <option value="30-40">30 to 40</option>
                                <option value="40-">40 and above</option>
                            </select>
                        </td>
                    </tr>

        			
			        <tr>
        				<td align="center" colspan="3">
			        		 What was your first impression when you entered the website?<br><br>
			        		<textarea name="paragraph_text1" cols="70" rows="4"> </textarea>
			        		
			        	</td>
			        </tr>
			        <tr>
        				<td align="center" colspan="3">
			        		 How did you first hear about us?<br><br>
			        		<textarea name="paragraph_text2" cols="70" rows="4"> </textarea>
			        		
			        	</td>
			        </tr>
			        <tr>
        				<td align="center" colspan="3">
			        		 Is there anything missing on this page?<br><br>
			        		<textarea name="paragraph_text3" cols="70" rows="4"> </textarea>
			        		
			        	</td>
			        </tr>
			        <tr>
        				<td align="center" colspan="3">
			        		 How likely are you to recommend us to a friend or colleague?<br><br>
			        		<textarea name="paragraph_text4" cols="70" rows="4"> </textarea>
			        		
			        	</td>
			        </tr>
			        <tr>
                        <td colspan="3" align="center">
                
                            Overall rating for website:<br><br>
                            <input type="radio" name="un" value="Unsatisfactory">Unsatisfactory
                            <input type="radio" name="un" value="satisfactory">Satisfactory
                            <input type="radio" name="un"  value="good">Good
                            <input type="radio" name="un"  value="excellent">Excellent
                        </td>
                    </tr>
        			<tr>
        				<td colspan="3" align="center">
			        		<input type="submit" name="submit" value="Submit">			        	</td>
			        </tr>
			    </table>
			</form>
	        </center>

	
    <?php
  
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="pharmacy";
    $tbl_name="feedback";
    //create connection
    $conn=mysqli_connect($servername,$username,$password);
    //Check connection
    if(!$conn)
    {
        die("Connection failed:".mysqli_connect_error());
        }
    
    $conn -> select_db($db_name);

     if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $paragraph_text1=$_POST['paragraph_text1'];
    $paragraph_text2=$_POST['paragraph_text2'];
    $paragraph_text3=$_POST['paragraph_text3'];
    $paragraph_text4=$_POST['paragraph_text4'];
    $un=$_POST['un'];

    $query ="INSERT INTO `feedback` (`name`,`age`,`text1`,`text2`,`text3`,`text4`,`feedback`) VALUES ('$name','$age','$paragraph_text1','$paragraph_text2','$paragraph_text3','$paragraph_text4','$un')";

    $query_run = mysqli_query($conn,$query);
    echo "string";
    if($query_run)
      {
          echo '<script> alert("Thank You For Your Feedback!") </script>';
      }
      else{
          echo '<script> alert("Error submitting Feedback") </script>';
      }
  }

    ?>
    </body>
    </html>