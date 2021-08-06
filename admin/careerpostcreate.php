<?php
require_once("functions/function.php");
include("dbconnect.php");
get_header();
get_sidebar();
get_bread();

?>
<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white edit"></i><span class="break"></span>Career Post Create</h2>
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
              <input type="text" class="span6 typeahead" id="title" name="title" ></div>
            </div>
            <div class="control-group ">
              <label class="control-label" for="textarea2">Write</label>
              <div class="controls">
                <textarea class="#" id="write" name="write" rows="3" style="width: 420px; height: 164px;"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="typeahead">Image</label>
              <div class="controls">
                <input type="file" class="span6 typeahead" id="image" name="image">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="typeahead">Author</label>
              <div class="controls">
                <input type="text" class="span6 typeahead" id="author" name="author">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="typeahead">Tags</label>
              <div class="controls">
                <input type="tags" class="span6 typeahead" id="tags" name="tags">
              </div>
            </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary" id="submit_btn" name="submit">Submit</button>
                  <button type="reset" class="btn" name="cancel">Cancel</button>
                </div>
              </fieldset>
            </form>
            <?php

            include 'dbconnect.php';
            $_SESSION['message']='';
            if($_SERVER['REQUEST_METHOD']=='POST'){
            	$title=$_POST['title'];
            	$write=$_POST['write'];
            	$avatar='image/'.$_FILES['image']['name'];
            	$author=$_POST['author'];
              $tags=$_POST['tags'];


            	$title=mysqli_real_escape_string($con,$title);
            	$write=mysqli_real_escape_string($con,$write);
            	$avatar=mysqli_real_escape_string($con,$avatar);
            	$author=mysqli_real_escape_string($con,$author);
              $tags=mysqli_real_escape_string($con,$tags);

            	if(preg_match("!image!",$_FILES['image']['type'])){
            		if(copy($_FILES['image']['tmp_name'],$avatar)){
            			$_SESSION['image']=$avatar;
            			$sql="INSERT INTO career(title,body,image,author,tags)
            			VALUES('$title','$write','$avatar','$author','$tags')";

            			if(mysqli_query($con,$sql)){
                    echo "
                    <script>
                    alert ('Your Post is Successfully created!');
                    window.location.href='careerpostcreate.php';
                    </script>
                    ";
            			}
            			else{
            				$_SESSION['message']="User couldnot added to database. Registration failed!";
            			}
            		}
            		else{
            			$_SESSION['message']="File upload failed!";
            		}
            	}
            	else{
            		$_SESSION['message']="Please upload only JPG, PNG or GIF format image!";
            	}
            }
            ?>
          </div>

        </div><!--/span-->
        <?php
        get_footer();
        ?>
