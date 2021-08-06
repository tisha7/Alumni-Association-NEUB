<!-- DELETE EVENTS -->
<?php
 include("dbconnect.php");

 if (isset($_GET['id'])) {
    $User_id = $_GET['id'];
    $delete_id = "DELETE FROM `members` WHERE `id`=$User_id";
    $result=$con->query($delete_id);
    if ($result == TRUE) {
        header("Location: wait_approve.php");

    } else {
        die($con->error);
    }
}
?>
