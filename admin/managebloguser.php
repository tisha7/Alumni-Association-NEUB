<?php
    require_once("functions1/function.php");
    get_header();
    include("dbconnect.php");
    if (isset($_GET['user']))
    {
    $user = $_GET['user'];
    $result = mysqli_query($con, "SELECT * FROM career WHERE username = '$user'");
    
           
    } 
?>
<!--new-->

    <!--navigation>-->

  <!--end navigation-->
  <div style="text-align: center;color:black;"><h2>Career Blog Table</h2></div>
 

	<table id="customers">
  <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Description</th>
      <th>Image</th>
      <th>Author</th>
      <th>Tags</th>
      <th>Date</th>
      <th>Action</th>
      <th>Action</th>
  </tr>
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
        <td><a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        <?php 
          $id++;
          endwhile; 
        ?>
 