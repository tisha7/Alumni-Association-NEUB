<?php
include("dbconnect.php");
require_once("functions/function.php");
get_header();
$result = mysqli_query($con, "SELECT * FROM event ORDER BY id asc");
?>
<div class="topnav"  id="myTopnav" >
  <div class="logo">
    <a href="index.php"><img src="img/logo3.jpg" alt="NEUBAA" height="100" width="400"></a>
  </div>
  <div class="navi">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="gallery.php">Gallery</a>
    <a href="committee.php">Committee</a>
    <a href="members.php">Memberlist</a>
    <a href="career.php">Career</a>
    <a href="job.php">Job Corner</a>
    <a href="Events.php" class="active">Events</a>
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
<!--blog-->
<?php
while($row = mysqli_fetch_array($result)){
  ?>
  <div class="#">
    <div class="leftcolumn">
      <div class="card">
        <h2 style="text-align:center;"><?php echo $row["event_title"]; ?></h2>
        <h4>Published By: <?php echo $row["received"]; ?><br><?php echo $row["date"]; ?></h4>
        <div class="fakeimg" style="height:350px;"><img src="admin/<?php echo $row["image"]; ?>" alt="NEUBAA"></div>
        <p><?php echo $row["description"]; ?></p>
        <div style="background-color: green;
        color: white;
        border: 2px solid #4CAF50;
        border-radius:2px;
        text-align:center;
        font-size: 22px;
         padding:15px;
         margin:20px 250px;
         border-radius:50px;">
          Join Now
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php
get_footer();
?>
