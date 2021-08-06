<?php
require_once("functions/function.php");
include("dbconnect.php");
get_header();
get_sidebar();
get_bread();
$result = mysqli_query($con, "SELECT * FROM reg_members ORDER BY id asc");
?>
<!--<?php require_once "process.php"; ?>-->
<?php 
if(isset($_SESSION['message'])):?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php 
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>

<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="white icon-info-sign"></i><span class="break"></span>User Info</h2>
  </div>
  <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Username</th>
          <th>Emali</th>
          <th>Reg. No.</th>
          <th>Session</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>

      <?php
      $id=1;
      while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["regist_no"]; ?></td>
        <td><?php echo $row["session"]; ?></td>
        <td><img src="../<?php echo $row["image"]; ?>" alt="photo" width="100" height="100"></td>
        <td> <a href="memberupdate.php?update=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>|
          <a href="process3.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
