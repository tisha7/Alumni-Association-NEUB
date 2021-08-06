<?php
require_once("functions/function.php");
include("dbconnect.php");
get_header();
get_sidebar1();
get_bread();

?>
<?php  
if(isset($_POST['edit']))
    { 
        $id= mysqli_real_escape_string($con, $_POST['id']);
        $title= mysqli_real_escape_string($con, $_POST['title']);
        $company= mysqli_real_escape_string($con, $_POST['company']);
        $position= mysqli_real_escape_string($con, $_POST['position']);
        $description = mysqli_real_escape_string($con, $_POST['description']);
        $location= mysqli_real_escape_string($con, $_POST['location']);
        $author = mysqli_real_escape_string($con, $_POST['author']);
        // checking empty fields

        if(empty($title) || empty($company) || empty($location)) {  
            if(empty($title)) {
                echo "<font color='red'>Title field is empty.</font><br/>";
            }
            if(empty($company)) {
                echo "<font color='red'>company field is empty.</font><br/>";
            }
            if(empty($location)) {
                echo "<font color='red'>location field is empty.</font><br/>";
            }   
        } 
        else 
        { 
          //updating the table
          $result = mysqli_query($con, "UPDATE job SET title='$title',company='$company', position='position',description='$description',location='$location',
            author='$author' WHERE id=$id");
          //redirectig to the display page. In our case, it is index.php
          header("Location: managejob.php");
          $_SESSION['message']="Successfully Updated";
        }
    }
    
?>


<?php
    //getting id from url
    //selecting data associated with this particular id
    $id=$_GET['update'];
    $result = mysqli_query($con, "SELECT * FROM job WHERE id=$id");
    while($res = mysqli_fetch_array($result))
    {
        $title = $res['title'];
        $company = $res['company'];
        $position = $res['position'];
        $description = $res['description'];
        $location = $res['location'];
        $author = $res['author'];
        $image=$res['image'];
    }
?>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white edit"></i><span class="break"></span>Event Blog Update</h2>
      <div class="box-icon">
        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <form class="form-horizontal" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="typeahead" >Title</label>
          <div class="controls">
            <input type="text" class="span6 typeahead" id="title" value="<?php echo $title;?>" name="title" ></div>
          </div>

          <div class="control-group">
            <label class="control-label" for="typeahead" >Company</label>
          <div class="controls">
             <input type="text" class="span6 typeahead" id="write" value="<?php echo $company;?>" name="company" ></div>
          </div>

          <div class="control-group">
            <label class="control-label" for="typeahead">Position</label>
          <div class="controls">
             <input type="text" class="span6 typeahead" id="write" value="<?php echo $position;?>" name="position" ></div>
          </div>

          <div class="control-group">
            <label class="control-label" for="typeahead" >Description</label>
          <div class="controls">
             <input type="text" class="span6 typeahead" id="write" value="<?php echo $description;?>" name="description" ></div>
          </div>

          <div class="control-group">
            <label class="control-label" for="typeahead" >Location</label>
          <div class="controls">
             <input type="text" class="span6 typeahead" id="write" value="<?php echo $location;?>" name="location"></div>
          </div>

          <div class="control-group">
            <label class="control-label" for="typeahead" >Image</label>
          <div class="controls">
            <img src="<?php echo $image; ?>" alt="photo" width="100" height="80">
          </div>
          <div class="controls">
            <a href="jobimage.php?change=<?php echo $id; ?>" class="btn btn-info">Replace Image</a>
          </div>
          </div>
  
          <div class="control-group">
            <label class="control-label" for="typeahead">Author</label>
            <div class="controls">
              <input type="text" class="span6 typeahead" id="author" value="<?php echo $author;?>" name="author">
            </div>
          </div>

        <input type="hidden" name="id" value="<?php echo $_GET['update'];?>">

        <div class="form-actions">
          <button type="submit" class="btn btn-success" id="submit_btn" name="edit">Update</button>
          <button type="reset" class="btn" name="cancel"><a href="manageevent.php">Cancel</a></button>
        </div>
      </fieldset>
    </form>
  </div>

</div><!--/span-->
<?php
get_footer();
?>
