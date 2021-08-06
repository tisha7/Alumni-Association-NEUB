<?php
include("dbconnect.php");
require_once("functions/function.php");
get_header();
$result = mysqli_query($con, "SELECT * FROM committee ORDER BY id asc");
?>
<!--navigation>-->
<div class="topnav"  id="myTopnav" >
  <div class="logo">
    <a href="index.php"><img src="img/logo3.jpg" alt="NEUBAA" height="100" width="400"></a>
  </div>
  <div class="navi">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="gallery.php">Gallery</a>
    <a href="committee.php" class="active">Committee</a>
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
  <div class="committee">
    <a target="_blank">
      <img src="admin/<?php echo $row["image"]; ?>" alt="photo" width="600" height="400">
    </a>
    <div class="sc"><h4><?php echo $row["name"]; ?></h4></div>
    <div class="sc"><?php echo $row["position"]; ?></div>
    <div class="sc"><?php echo $row["phone"]; ?></div>
    <div class="sc"><?php echo $row["email"]; ?></div>
    <div class="sc"><?php echo $row["session"]; ?></div>

  </div>
  <?php
}
?>

<?php
get_footer();
?>
