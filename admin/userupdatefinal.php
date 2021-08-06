<?php
    require_once("functions/function.php");
	include("includes/dbcon.php");
    get_header();
    //get_sidebar();
    //get_bread();
    if(isset($_POST['update']))
    {	
        $id= mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $email = mysqli_real_escape_string($con, $_POST['email']);	
        
        // checking empty fields
        if(empty($name) || empty($username) || empty($email)) {	 
            if(empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }
            if(empty($username)) {
                echo "<font color='red'>Age field is empty.</font><br/>";
            }
            if(empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }		
        } else {	
            //updating the table
            $result = mysqli_query($con, "UPDATE user SET user_name='$name',user_username='$username', user_password='$password',user_email='$email' WHERE user_id=$id");
            //redirectig to the display page. In our case, it is index.php
            header("Location: userchangefinal.php");
        }
    }
    
?>
<?php
    //getting id from url
    //selecting data associated with this particular id
    $id=$_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM user WHERE user_id=$id");
    while($res = mysqli_fetch_array($result))
    {
        
        $name = $res['user_name'];
        $username = $res['user_username'];
        $password = $res['user_password'];
        $email = $res['user_email'];
    }
?>	
        
            <section>
                <br>
                <br>
                <br>
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="white icon-info-sign"></i><span class="break"></span>User Info Update</h2>
					</div>
								<div class="box-content">
                                <form name="form-horizontal" method="POST" action="userupdatefinal.php">
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									<tr>
                                    <td></td><td></td><td></td><td></td><th>Name:</th>   
										<td><input type="text" name="name" value="<?php echo $name;?>"></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td></td><td></td><th>Username:</th>
                                        <td><input type="text" name="username" value="<?php echo $username; ?>"></td><td></td><td></td>
                                    </tr>
									<tr>
                                    <td></td><td></td><td></td><td></td><th>Password:</th>	
										<td><input type="text" name="password" value="<?php echo $password; ?>"></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td><td></td></td><th>Email:</th>
                                        <td><input type="text" name="email" value="<?php echo $email; ?>"></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                                    </tr>
                                    <tr>
                                    <div class="form-actions">
                                    <td></td><td></td><td></td><td></td><td></td><td><button type="submit" class="btn btn-primary" id="submit_btn" name="update">Submit</button></td><td></td><td></td>
							        </div>
                                    </tr>
					        </table> 
                        </form>
					</div>
				</div><!--/span-->
                </section>
<?php
    //get_footer();
?>	