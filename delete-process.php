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
$sql = "DELETE FROM `patient` WHERE pid='" . $_GET["pid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>