<?php
session_start();
include("dbconnect.php");
?>
<?php
if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  if(!empty($username) && !empty($password)){
    $sql1 = "SELECT * FROM reg_members where username='$username' AND password='$password'";
    $sql11=$con->query($sql1);
    if($sql11->num_rows>0){
      echo "login successful!";
      $_SESSION['username']=$username;
      header('location:index.php');
    }
    else{
      echo "Login Failed!";
      header('location: login.php');
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/favicon.jpg" type="image/png">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="login-box">
        <h1 class="text-center form-group">Login</h1>
        <form action="#" method="POST">
          <div class="textbox">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="Enter your Username" class="form-control form-group" required>
          </div>
          <div class="textbox">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Enter your Password" class="form-control form-group" required>
          </div>

          <div class="checkbox">
            <label for="remember"><input type="checkbox" name="remember" id="remember">Remember me</label>
          </div>
          <input type="submit" name="login" class="btn btn-block" value="Sign In">
          <a class="link" href="register.php" style="color:#0269fd ;">Don't have any account? Register Now!</a>
          <a href="index.php">Go Home</a>
        </form>
        <br>
        <p class="text-danger"></p>
      </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>
</body>
</html>
