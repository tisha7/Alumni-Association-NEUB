<?php
require_once("functions/function.php");
get_header();

//including the database connection file
include("dbconnect.php");
//getting id of the data from url
if(isset($_GET['delete'])) {
	$id = $_GET['delete'];
	//deleting the row from table
	$result = mysqli_query($con, "DELETE FROM career WHERE id=$id");
	$_SESSION['message']="Record Has been deleted!";
	$_SESSION['msg_type']="danger";
	header("location: managecareer.php");
}

//update operation

if(isset($_GET['update'])){
	$id=$_GET['update'];
    $result = mysqli_query($con, "SELECT * FROM career WHERE id=$id");
    if(count($result)==1){
    	$row=$result->fetch_array();
    	$title = $row['title'];
        $write = $row['body'];
        $author = $row['author'];
        $tags = $row['tags'];

        header("location: careerupdate.php");
    }

}


//redirecting to the display page (index.php in our case)
?>
