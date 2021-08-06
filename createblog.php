<?php
    require_once("functions/function.php");
    get_header();
?>
    <!--navigation>-->

  <!--end navigation-->
	<div class="container">
		<div class="innerwrap">
			<section class="section0 clearfix">
				<div class="col2 column0 last">
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">Career Blog Create</h3>
						<form class="form-horizontal" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
							<div class="clearfix">
								<input class="col2 first" type="text" name="title" placeholder="Title">
                <input class="col2 last" type="text" name="tags" placeholder="Tags">
							</div>
              <div class="clearfix">
                <label>Image</label>
                <input class="col2 first" type="file" name="image" placeholder="Image">
              </div>
              <div class="clearfix">
                <textarea name="body" id="body" cols="30" rows="7" placeholder="Write your Blog here..."></textarea>
              </div>
              <div class="clearfix">
                <input class="col2 first" type="text" name="author" placeholder="Author">
                <input class="col2 last" type="text" name="username"  placeholder="Username">
              </div>
							
							<div class="clearfix"><input type="submit" value="Create" name="create"></div>
						</form>

            <?php
            include 'dbconnect.php';
            $_SESSION['message']='';
            if($_SERVER['REQUEST_METHOD']=='POST'){
              $title=$_POST['title'];
              $write=$_POST['body'];
              $avatar='image/'.$_FILES['image']['name'];
              $author=$_POST['author'];
              $username=$_POST['username'];
              $tags=$_POST['tags'];

              $title=mysqli_real_escape_string($con,$title);
              $write=mysqli_real_escape_string($con,$write);
              $avatar=mysqli_real_escape_string($con,$avatar);
              $author=mysqli_real_escape_string($con,$author);
              $username=mysqli_real_escape_string($con,$username);
              $tags=mysqli_real_escape_string($con,$tags);

              if(preg_match("!image!",$_FILES['image']['type'])){
                if(copy($_FILES['image']['tmp_name'],$avatar)){
                  $_SESSION['image']=$avatar;
                  $sql="INSERT INTO career(title,body,image,author,username,tags)
                  VALUES('$title','$write','$avatar','$author','$username','$tags')";

                  if(mysqli_query($con,$sql)){
                    echo "
                    <script>
                    alert ('Your Post is Successfully created!');
                    window.location.href='createblog.php';
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
				</div>
			</section>
		</div>
	</div>
 