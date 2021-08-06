<?php
session_start();
include 'dbconnect.php';
?>
<?php  
if(isset($_POST['submit']))
    { 
        $regist_No = mysqli_real_escape_string($con, $_POST['regist_No']);
        $transaction = mysqli_real_escape_string($con, $_POST['transaction']);
        $amount = mysqli_real_escape_string($con, $_POST['amount']);  
        
        // checking empty fields

        if(empty($regist_No) || empty($transaction) || empty($amount)) {  
            if(empty($regist_No)) {
                echo "<font color='red'>Registration Number field is empty.</font><br/>";
            }
            if(empty($transaction)) {
                echo "<font color='red'>Transaction Id field is empty.</font><br/>";
            }
            if(empty($amount)) {
                echo "<font color='red'>Amount field is empty.</font><br/>";
            }   
        } 
        else 
        { 
                  //updating the table
                  $result ="UPDATE members SET transaction='$transaction', amount='$amount' WHERE regist_no=$regist_No";
                  //redirectig to the display page. In our case, it is index.php
                  if(mysqli_query($con,$result)){
                    header("Location: thanks.php");
                    $_SESSION['message']="Successfully Updated";
                  }
                  else{
                    header("Location: thankyou.php");
                    $_SESSION['message']="User couldnot added to database. Registration failed!";
                  }
                  
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
			<h2>Thank you for submit your information!</h2>
				<br>
				<h3>Pay your registration fee on bkash to complete your registration</h3>
				<br>
				<h3>Bkash No: 01XXX-XXXXXX</h3>
				<br>
				<img src="img/bkash.jpg" alt="Bkash">
		</header>
		<form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="text" name="regist_No" class="inp" placeholder="Registration Number" required>
				<input type="text" name="transaction" class="inp" placeholder="Transaction Id" required>
				<input type="text" name="amount" class="inp" placeholder="Amount" required>
				<input type="submit" name="submit" value="REGISTER" class="sub-btn">
				<a href="index.php">Go Home</a>
			</form>

	</div>
</body>
