<?php
    require_once("functions1/function.php");
    get_header();
    include("dbconnect.php");
    if (isset($_GET['user']))
    {
    $user = $_GET['user'];
    $result = mysqli_query($con, "SELECT * FROM job WHERE username = '$user'");
    
           
    } 
?>
<!--new-->

    <!--navigation>-->

  <!--end navigation-->
  <div style="text-align: center;color:black;"><h2>Job manage Table</h2></div>
 

	<table id="customers">
  <tr>
    <th>No.</th>
    <th>Title</th>
    <th>Company</th>
    <th>Position</th>
    <th>Description</th>
    <th>Image</th>
    <th>Location</th>
    <th>Author</th>
    <th>Username</th>
    <th>Date</th>
    <th>Action</th>
    <th>Action</th>
  </tr>
</thead>
  <?php
    $id=1;
    while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $row["title"]; ?></td>
      <td><?php echo $row["company"]; ?></td>
      <td><?php echo $row["position"]; ?></td>
      <td><?php echo $row["description"]; ?></td>
      <td><img src="<?php echo $row["image"]; ?>" alt="photo" width="100" height="80"></td>
      <td><?php echo $row["location"]; ?></td>
      <td><?php echo $row["author"]; ?></td>
      <td><?php echo $row["username"]; ?></td>
      <td><?php echo $row["date"]; ?></td>
      <td> <a href="jobupdate.php?update=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
      <td><a href="process2.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
      </td>
      </tr>
      <?php
      $id++;
    }
  ?>
 