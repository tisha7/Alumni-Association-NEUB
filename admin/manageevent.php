<?php
require_once("functions/function.php");
include("dbconnect.php");
get_header();
get_sidebar();
get_bread();
$result = mysqli_query($con, "SELECT * FROM event ORDER BY id asc");
?>
<!--new-->
<?php require_once "process.php"; ?>
<?php 
if(isset($_SESSION['message'])):?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php 
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>
<!--end new-->

<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="white icon-info-sign"></i><span class="break"></span>Event Table</h2>
  </div>
  <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Event Title</th>
          <th>Description</th>
          <th>Image</th>
          <th>Received By</th>
          <th>Username</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
      $id=1;
      while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $row["event_title"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
        <td><img src="<?php echo $row["image"]; ?>" alt="photo" width="100" height="80"></td>
        <td><?php echo $row["received"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
        <td> <a href="eventupdate.php?update=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><a href="process1.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        <?php
        $id++;
      }
      ?>
    </table>
  </div>
</div><!--/span-->
<?php
get_footer();
?>
