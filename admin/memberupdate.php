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
        $name= mysqli_real_escape_string($con, $_POST['name']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $reg = mysqli_real_escape_string($con, $_POST['reg']);
        $session = mysqli_real_escape_string($con, $_POST['session']);  
        
        // checking empty fields

        if(empty($name) || empty($username) || empty($reg)) {  
            if(empty($name)) {
                echo "<font color='red'>name field is empty.</font><br/>";
            }
            if(empty($username)) {
                echo "<font color='red'>username field is empty.</font><br/>";
            }
            if(empty($reg)) {
                echo "<font color='red'>Registration field is empty.</font><br/>";
            }   
        } 
        else 
        { 
                  //updating the table
                  $result = mysqli_query($con, "UPDATE members SET name='$name',username='$username',email='$email',
                    password='$password',regist_no='$reg',
                    session='$session' WHERE id=$id");
                  //redirectig to the display page. In our case, it is index.php
                  header("Location: managemember.php");
                  $_SESSION['message']="Successfully Updated";
        }
    }
    
?>


<?php
    //getting id from url
    //selecting data associated with this particular id
    $id=$_GET['update'];
    $result = mysqli_query($con, "SELECT * FROM members WHERE id=$id");
    while($res = mysqli_fetch_array($result))
    {
        $name = $res['name'];
        $username = $res['username'];
        $email = $res['email'];
        $password= $res['password'];
        $reg = $res['regist_no'];
        $session = $res['session'];
        $image=$res['image'];
    }
?>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white edit"></i><span class="break"></span>Member Update</h2>
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
            <label class="control-label" for="typeahead" >Name</label>
            <div class="controls">
              <input type="text" class="span6 typeahead" id="name" value="<?php echo $name;?>" name="name" ></div>
            </div>

            <div class="control-group">
              <label class="control-label" for="typeahead" >Username</label>
            <div class="controls">
               <input type="text" class="span6 typeahead" id="username" value="<?php echo $username;?>" name="username" ></div>
            </div>

            <div class="control-group">
              <label class="control-label" for="typeahead" >Image</label>
            <div class="controls">
              <img src="../<?php echo $image; ?>" alt="photo" width="100" height="80">
            </div>
            </div>
    
            <div class="control-group">
              <label class="control-label" for="typeahead">Email</label>
              <div class="controls">
                <input type="text" class="span6 typeahead" id="author" value="<?php echo $email;?>" name="email">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="typeahead">Password</label>
              <div class="controls">
                <input type="text" class="span6 typeahead" id="author" value="<?php echo $password;?>" name="password">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="typeahead">Session</label>
              <div class="controls">
                <input type="tags" class="span6 typeahead" id="tags" value="<?php echo $session;?>" name="session">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="typeahead">Registration No</label>
              <div class="controls">
                <input type="tags" class="span6 typeahead" id="reg" value="<?php echo $reg;?>" name="reg">
              </div>
            </div>
                <input type="hidden" name="id" value="<?php echo $_GET['update'];?>">

                <div class="form-actions">
                  <button type="submit" class="btn btn-success" id="submit_btn" name="edit">Update</button>
                  <button type="reset" class="btn" name="cancel"><a href="managecareer.php">Cancel</a></button>
                </div>
              </fieldset>
            </form>
          </div>

        </div><!--/span-->
        <?php
        get_footer();
        ?>
