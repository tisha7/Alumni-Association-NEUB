<?php
require_once("functions/function.php");
get_header();

//including the database connection file
include("dbconnect.php");
//getting id of the data from url
if(isset($_GET['approve'])) {
	$id = $_GET['approve'];
	//deleting the row from table
	$result = mysqli_query($con, "INSERT INTO reg_members(name,username,email,password,regist_no,session,image) SELECT name,username,email,password,regist_no,session,image FROM members WHERE id=$id");
	$sql=mysqli_query($con, "DELETE FROM members WHERE id=$id");
		$_SESSION['message']="Members data has been approved!";
		$_SESSION['msg_type']="success";
		header("location: approvemember.php");
}

//redirecting to the display page (index.php in our case)
?>
