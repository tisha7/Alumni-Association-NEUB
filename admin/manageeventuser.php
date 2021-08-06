<?php
    require_once("functions1/function.php");
    get_header();
    include("dbconnect.php");
    if (isset($_GET['user']))
    {
    $user = $_GET['user'];
    $result = mysqli_query($con, "SELECT * FROM event WHERE username = '$user'");
    
           
    } 
?>
<!--new-->

    <!--navigation>-->

  <!--end navigation-->
  <div style="text-align: center;color:black;"><h2>Event Table</h2></div>
 

	<table id="customers">
  <tr>
    <th>No.</th>
    <th>Event Title</th>
    <th>Description</th>
    <th>Image</th>
    <th>Received By</th>
    <th>Username</th>
    <th>Date</th>
    <th>Action</th>
    <th>Action</th>
  </tr>
  <?php
      $id=1;
      while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $row["event_title"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
        <td><img src="<?php echo $row["image"]; ?>" alt="photo" width="80px" height="80px"></td>
        <td><?php echo $row["received"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
        <td> <a href="eventupdate.php?update=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
        <td> <a href="process1.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php
        $id++;
      }
      ?>
 