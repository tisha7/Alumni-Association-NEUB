<?php
require_once("functions/function.php");
get_header();

//including the database connection file
include("dbconnect.php");
//getting id of the data from url
if(isset($_GET['delete'])) {
	$id = $_GET['delete'];
	//deleting the row from table
	$result = mysqli_query($con, "DELETE FROM job WHERE id=$id");
	$_SESSION['message']="Record Has been deleted!";
	$_SESSION['msg_type']="danger";
	header("location: managejob.php");
}

//redirecting to the display page (index.php in our case)
?>
