<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AANEUB</title>
  <link rel="icon" href="img/favicon.jpg" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/gallery.css" type="text/css">
  <link rel="stylesheet" href="css/contact.css" type="text/css">
  <link rel="stylesheet" href="css/career.css" type="text/css">
  <link rel="stylesheet" href="css/createpost.css" type="text/css">
  <link rel="stylesheet" href="css/about.css" type="text/css">
  <link rel="stylesheet" href="css/committee.css" type="text/css">
  <link rel="stylesheet" href="css/members.css" type="text/css">
  <link rel="stylesheet" href="css/job.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
  <!--navigation-->

  <div class="top" id="myTop">
    <div class="top-left">
      <span class="icon"><i class="fa fa-envelope-o"></i></span>
      <span class="text">neubaa@gmail.com</span>
    </div>
    <div class="top-center">
      <span class="icon"><i class="fa fa-phone"></i></span>
      <span class="text">+88017-61644976</span>
    </div>
    <div class="top-right">
      <?php if(isset($_SESSION['username'])&& !empty($_SESSION['username']))
      {
        ?>
        <a href="logout.php">logout</a>
        <a href="myprofile.php?user=<?php echo $_SESSION['username']; ?>">My Profile</a>
      <?php }else{ ?>
      <a href="register.php">Sign up</a>
      <a href="login.php">Login</a>
    <?php } ?>
    </div>
    <div class="top-welcome" style="margin:400px;">
      <p>Welcome !</p>
      <a href="logout.php">Logout</a>

    </div>
  </div>
