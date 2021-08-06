<?php
require_once("functions/function.php");
include("dbconnect.php");
get_header();
get_sidebar();
get_bread();
$result = mysqli_query($con, "SELECT * FROM contact ORDER BY id asc");
?>
<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="white icon-info-sign"></i><span class="break"></span>Contact Information Table</h2>
  </div>
  <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Subject</th>
          <th>Message</th>
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
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["subject"]; ?></td>
        <td><?php echo $row["message"]; ?></td>
        <td>
          <a href="process4.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        <?php
        $id++;
      }
      ?>
    </table>
  </div>
</div>
<?php
get_footer();
?>
