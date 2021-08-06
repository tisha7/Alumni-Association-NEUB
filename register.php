<?php
session_start();
include 'dbconnect.php';
$_SESSION['message']='';
if($_SERVER['REQUEST_METHOD']=='POST'){
	if($_POST['pass']==$_POST['repass']){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$pass_word=($_POST['pass']);
		$reg_num=$_POST['regist_No'];
		$session=$_POST['session'];
		$avatar='img/'.$_FILES['avatar']['name'];
		$status="Pending";

		$name=mysqli_real_escape_string($con,$name);
		$username=mysqli_real_escape_string($con,$username);
		$email=mysqli_real_escape_string($con,$email);
		$pass_word=mysqli_real_escape_string($con,$pass_word);
		$reg_num=mysqli_real_escape_string($con,$reg_num);
		$session=mysqli_real_escape_string($con,$session);
		$avatar=mysqli_real_escape_string($con,$avatar);
		$status=mysqli_real_escape_string($con,$status);

		if(preg_match("!image!",$_FILES['avatar']['type'])){
			if(copy($_FILES['avatar']['tmp_name'],$avatar)){
				$_SESSION['username']=$username;
				$_SESSION['avatar']=$avatar;
				$sql="INSERT INTO members(name,username,email,password,regist_no,session,image)
				VALUES('$name','$username','$email','$pass_word','$reg_num','$session','$avatar')";

				if(mysqli_query($con,$sql)){
					$_SESSION['msg_type']="Success";
					$_SESSION['message']="Registration Successful!";
					header("location: thankyou.php");


				}
				else{
					$_SESSION['msg_type']="danger";
					$_SESSION['message']="User couldnot added to database. Registration failed!";
				}
			}
			else{
				$_SESSION['msg_type']="danger";
				$_SESSION['message']="File upload failed!";
			}
		}
		else{
			$_SESSION['msg_type']="danger";
			$_SESSION['message']="Please upload only JPG, PNG or GIF format image!";
		}
	}
	else{
		$_SESSION['msg_type']="danger";
		$_SESSION['message']="Password didn't match!";
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
	<link rel="stylesheet" href="css/register.css" type="text/css">
</head>
<body>
<div class="main">
		<header>
			<h2>Alumnus Registration Form</h1>

			<?php 
			if(isset($_SESSION['message'])):?>
  			<div class="alert alert-<?=$_SESSION['msg_type']?>">
  			<h4>
    		<?php 
      			echo $_SESSION['message'];
      			unset($_SESSION['message']);
    		?>
    		</h4>
  			</div>
			<?php endif ?>

		</header>
		<form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
			<input type="text" name="name" class="inp" placeholder="Name" required>
				<input type="text" name="username" class="inp" placeholder="Username" required>
				<input type="email" name="email" class="inp" placeholder="Email" required>
				<input type="password" name="pass" class="inp" placeholder="Password" required>
				<input type="password" name="repass" class="inp" placeholder="Confirm Password">
				<input type="text" name="regist_No" class="inp" placeholder="Registration Number" required>
				<input type="text" name="session" class="inp" placeholder="Session" required>
				<input type="file" name="avatar" class="inp">
				<input type="submit" name="submit" value="REGISTER" class="sub-btn">
				<a href="index.php">Go Home</a>
			</form>
	</div>
</body>
