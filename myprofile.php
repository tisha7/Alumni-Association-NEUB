<?php
include 'dbconnect.php';
session_start();
if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = mysqli_query($con, "SELECT * FROM reg_members WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
}
       
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AANEUB</title>
  <link rel="icon" href="img/favicon.jpg" type="image/png">
  <link rel="stylesheet" href="css/profile.css" type="text/css">
  <!------ Include the above in your HEAD tag ---------->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <a href="memberimagechange.php?change=<?php echo $profile_data['id'];?>"><img src="<?php echo $profile_data['image'] ?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h1>MY PROFILE</h1>
                                    <h5>
                                        <?php echo $profile_data['name'] ?>
                                    </h5>
                                    <h6>
                                        <a href="index.php">Back To Home</a>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>My Options</p>
                            <a href="admin/createevent.php">Create Events</a><br/>
                            <a href="admin/manageeventuser.php?user=<?php echo $_SESSION['username']; ?>">Manage Events</a><br/>
                            <br>
                            <a href="admin/createjob.php">Create Job Post</a><br/>
                            <a href="admin/managejobuser.php?user=<?php echo $_SESSION['username']; ?>">Manage Job Post</a><br/>
                            <br>
                            <a href="admin/createblog.php">Create Blog Post</a><br/>
                            <a href="admin/managebloguser.php?user=<?php echo $_SESSION['username']; ?>">Manage Blog Post</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       <div class="row">
                                            <div class="col-md-12">
                                                <label>Your Bio</label><br/>
                                                <p>I am an energetic web developer, I have did various projects on marketplaces.</p>
                                            </div>
                                        </div>
                                        <br>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile_data['name'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile_data['username'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile_data['email'] ?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NEUB Registration No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile_data['regist_no'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Session</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $profile_data['session'] ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>5</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
      </body>

</html>