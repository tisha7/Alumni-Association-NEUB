<?php
include("dbconnect.php");
require_once("functions/function.php");
get_header();
$result = mysqli_query($con, "SELECT * FROM job ORDER BY id asc");
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
      \<a href="members.php">Memberlist</a>
      <a href="career.php">Career</a>
      <a href="job.php" class="active">Job Corner</a>
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
  <!--header end-->
  <?php
  while($row = mysqli_fetch_array($result)){
    ?>
    <div class="leftcolumnj">
      <div class="cardj">
        <h2 style="text-align:center;"><?php echo $row["title"]; ?></h2>
        <div class="fakeimgj"><img src="admin/<?php echo $row["image"]; ?>" alt="NEUBAA"></div>
        <h4>Company name: <?php echo $row["company"]; ?></h4>
        <h5><?php echo $row["date"]; ?></h5>
        <p><?php echo $row["description"]; ?></p>
        <div style="background-color: yellow;
        color: white;
        border: 2px solid #4CAF50;
        border-radius:2px;
        text-align:center;
        font-size: 22px;
        padding:15px;
        margin:20px 250px;
        border-radius:50px;">
        <a style="text-decoration:none;" href="<?php echo $row["link"]; ?>" class="active">Link Here</a>
        </div>
      </div>
    </div>
    <?php
  }

   ?>
<!--footer-->

  <?php
  get_footer();
  ?>
