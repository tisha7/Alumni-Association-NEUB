<?php
require_once("functions/function.php");
include("dbconnect.php");
get_header();
?>
<?php  
if(isset($_POST['edit'])){ 
        $image='img/'.$_FILES['image']['name'];

        $id= mysqli_real_escape_string($con, $_POST['id']);
        $image = mysqli_real_escape_string($con,$image);

        // checking empty fields
          if(preg_match("!image!",$_FILES['image']['type'])){
                if(copy($_FILES['image']['tmp_name'],$image)){
                  $_SESSION['image']=$image;
                  //updating the table
                  $result = mysqli_query($con, "UPDATE reg_members SET image='$image' WHERE id=$id");
                  //redirectig to the display page. In our case, it is index.php
                  header("Location: memberimagechange.php");
                  $_SESSION['message']="Successfully Updated";
                }
                else{
                  $_SESSION['message']="File upload failed!";
                }
            }
            else{
              $_SESSION['message']="Please upload only JPG, PNG or GIF format image!";
            }
        }
    else{

    }
    
?>


<?php
    //getting id from url
    //selecting data associated with this particular id
    $id=$_GET['change'];
    $result = mysqli_query($con, "SELECT * FROM reg_members WHERE id=$id");
    while($res = mysqli_fetch_array($result))
    {
        $image=$res['image'];
    }
?>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white edit"></i><span class="break"></span>Member Image Update</h2>
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
              <label class="control-label" for="typeahead" >Image</label>
            <div class="controls">
              <img src="<?php echo $image; ?>" alt="photo" width="100" height="80">
            </div>
            </div>
            <div class="control-group">
             <label class="control-label" for="typeahead">Replace Image</label>
            <div class="controls">
                <input type="file" class="span6 typeahead" id="image" value="<?php echo $image;?>" name="image" />
              </div>
            </div>
    
                <input type="hidden" name="id" value="<?php echo $_GET['change'];?>">

                <div class="form-actions">
                  <button type="submit" class="btn btn-success" id="submit_btn" name="edit">Upload Photo</button>
                  <button type="reset" class="btn" name="cancel"><a href="memberimagechange.php">Cancel</a></button>
                </div>
              </fieldset>
            </form>
          </div>

        </div><!--/span-->
