<?php
require_once("functions/function.php");
include("dbconnect.php");
get_header();
get_sidebar();
get_bread();
$result = mysqli_query($con, "SELECT * FROM career ORDER BY id asc");
?>


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


<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="white icon-info-sign"></i><span class="break"></span>Career Blog Manage Table</h2>
  </div>
  <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Title</th>
          <th>Description</th>
          <th>Image</th>
          <th>Author</th>
          <th>Tags</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>


      <?php
      $id=1;
      while($row = $result->fetch_assoc()):

        ?>
        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["body"]; ?></td>
        <td><img src="<?php echo $row["image"]; ?>" alt="photo" width="100" height="80"></td>
        <td><?php echo $row["author"]; ?></td>
        <td><?php echo $row["tags"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
        <td> <a href="careerupdate.php?update=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php 

          $id++;
          endwhile; 

        ?>


    </table>
  </div>
</div><!--/span-->
<?php
get_footer();
?>
