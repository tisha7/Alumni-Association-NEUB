<?php
    require_once("functions1/function.php");
    get_header();
?>
    <!--navigation>-->

  <!--end navigation-->
	<div class="container">
		<div class="innerwrap">
			<section class="section0 clearfix">
				<div class="col2 column0 last">
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">Create Job Circular</h3>
						<form class="form-horizontal" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
							<div class="clearfix">
								<input class="col2 first" type="text" name="title" placeholder="Title">
                <input class="col2 last" type="text" name="company" placeholder="Company">
							</div>
              <div class="clearfix">
                <label>Image</label>
                <input class="col2 first" type="file" name="image" placeholder="Image">
              </div>
              <div class="clearfix">
                <textarea name="body" id="body" cols="30" rows="7" placeholder="description"></textarea>
              </div>
              <div class="clearfix">
                <input class="col2 first" type="text" name="author" placeholder="Author">
                <input class="col2 last" type="text" name="username"  placeholder="Username">
              </div>
							<div class="clearfix">
                <input class="col2 first" type="text" name="location" placeholder="Location">
                <input class="col2 last" type="text" name="link"  placeholder="Link">
              </div>
              <div class="clearfix">
                <input class="col2 first" type="text" name="position" placeholder="Position">
              </div>
							<div class="clearfix"><input type="submit" value="Create" name="create"></div>
						</form>

            <?php
            include 'dbconnect.php';
            $_SESSION['message']='';
            if($_SERVER['REQUEST_METHOD']=='POST'){
              $title=$_POST['title'];
              $company=$_POST['company'];
              $avatar='image/'.$_FILES['image']['name'];
              $write=$_POST['body'];
              $author=$_POST['author'];
              $username=$_POST['username'];
              $location=$_POST['location'];
              $link=$_POST['link'];
              $position=$_POST['position'];

              $title=mysqli_real_escape_string($con,$title);
              $company=mysqli_real_escape_string($con,$company);
              $avatar=mysqli_real_escape_string($con,$avatar);
              $write=mysqli_real_escape_string($con,$write);
              $author=mysqli_real_escape_string($con,$author);
              $username=mysqli_real_escape_string($con,$username);
              $location=mysqli_real_escape_string($con,$location);
              $link=mysqli_real_escape_string($con,$link);
              $position=mysqli_real_escape_string($con,$position);

              if(preg_match("!image!",$_FILES['image']['type'])){
                if(copy($_FILES['image']['tmp_name'],$avatar)){
                  $_SESSION['image']=$avatar;
                  $sql="INSERT INTO job(title,company,position,description,link,image,location,author,username)
                  VALUES('$title','$company','$position','$write','$link','$avatar','$location','$author','$username')";

                  if(mysqli_query($con,$sql)){
                    echo "
                    <script>
                    alert ('Your Post is Successfully created!');
                    window.location.href='createjob.php';
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
 