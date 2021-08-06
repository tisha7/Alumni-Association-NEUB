<?php
include("dbconnect.php");
require_once("functions/function.php");
get_header();
$result = mysqli_query($con, "SELECT * FROM career");
$result1 = mysqli_query($con, "SELECT * FROM event");
$result2 = mysqli_query($con, "SELECT * FROM committee");
?>
<!--navigation>-->
<div class="topnav"  id="myTopnav" >
  <div class="logo">
    <img src="img/logo3.jpg" alt="NEUBAA" height="100" width="400">
  </div>
  <div class="navi">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="gallery.php" class="active">Gallery</a>
    <a href="committee.php">Committee</a>
    <a href="members.php">Memberlist</a>
    <a href="career.php">Career</a>
    <a href="job.php">Job Corner</a>
    <a href="Events.php">Events</a>
    <a href="contact.php">Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += "responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
</div>
<!--start gallery-->
<?php
while($row = mysqli_fetch_array($result)){
  ?>
  <div class="gallery">
    <a target="_blank">
      <img src="admin/<?php echo $row["image"]; ?>" alt="photo" width="600" height="400">
    </a>
    <div class="desc"><?php echo $row["title"]; ?></div>
  </div>
  <?php
}
?>
<?php
while($row = mysqli_fetch_array($result1)){
  ?>
  <div class="gallery">
    <a target="_blank">
      <img src="admin/<?php echo $row["image"]; ?>" alt="photo" width="600" height="400">
    </a>
    <div class="desc"><?php echo $row["event_title"]; ?></div>
  </div>
  <?php
}
?>
<?php
while($row = mysqli_fetch_array($result2)){
  ?>
  <div class="gallery">
    <a target="_blank">
      <img src="admin/<?php echo $row["image"]; ?>" alt="photo" width="600" height="400">
    </a>
    <div class="desc"><?php echo $row["name"]; ?></div>
  </div>
  <?php
}
?>

<?php
get_footer();
?>
