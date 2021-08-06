<?php
    require_once("functions/function.php");
    get_header();
?>
    <!--navigation>-->
    <div class="topnav"  id="myTopnav" >
      <div class="logo">
        <a href="index.php"><img src="img/logo3.jpg" alt="NEUBAA" height="100" width="400"></a>
      </div>
      <div class="navi">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="gallery.php">Gallery</a>
        <a href="committee.php">Committee</a>
        <a href="members.php">Memberlist</a>
        <a href="career.php">Career</a>
        <a href="job.php">Job Corner</a>
        <a href="Events.php">Events</a>
        <a href="contact.php" class="active">Contact</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
      </div>
      <script>
      function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += "responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
    </div>

  <!--end navigation-->
	<div class="container">
		<div class="innerwrap">
			<section class="section1 clearfix">
				<div class="textcenter">
					<span class="seperator"></span>
					<h1>Contact Us</h1>
				</div>
			</section>

			<section class="section2 clearfix">
				<div class="col2 column1 first">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.231162256931!2d91.85876681441205!3d24.890095484039865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aacd70cd7665%3A0xc8ae330ad72490dd!2sNorth%20East%20University%20Bangladesh!5e0!3m2!1sen!2sbd!4v1574622168116!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
          </iframe>
				</div>
				<div class="col2 column2 last">
					<div class="sec2innercont">
						<div class="sec2addr">
							<p>Ishrat Jahan Tisha</p>
							<p><span class="collig">Phone :</span> +880 1761644976</p>
							<p><span class="collig">Email :</span> ishratjahantisha370@gmail.com</p>
						</div>
					</div>
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
						<form action="#" method="post" id="contactForm" novalidate="novalidate">
							<div class="clearfix">
								<input class="col2 first" type="text" name="name" placeholder="Name">
								<input class="col2 last" type="Email" name="email" placeholder="Email">
							</div>
							<div class="clearfix">
								<input  class="col2 first" type="text" name="phone" placeholder="Contact Number">
								<input class="col2 last" type="text" name="subject" placeholder="Subject">
							</div>
							<div class="clearfix">
								<textarea name="message" id="message" cols="30" rows="7" placeholder="Your message here..."></textarea>
							</div>
							<div class="clearfix"><input type="submit" value="Send" name="send"></div>
						</form>
            <?php
            include 'dbconnect.php';
            if(isset($_POST['send'])){
              $name=$_POST['name'];
              $email=$_POST['email'];
              $phone=$_POST['phone'];
              $subject=$_POST['subject'];
              $message=$_POST['message'];
              $count;
              if(empty($name) || empty($email) ||empty($phone) || empty($subject)){
                    echo "<script>
                    alert ('Fields are empty');
                    window.location.href='contact.php';
                    </script>";
                }
                else{
                $insertion="insert into contact values('$count','$name','$email','$phone','$subject','$message')";
                $run=mysqli_query($con,$insertion);
                if($run){
                 echo "
                 <script>
                 alert ('Your message is send! Thank you!');
                 window.location.href='contact.php';
                 </script>
                 ";
                }
                else{
                    echo "
                    <script>
                    alert ('Not send any message!');
                    window.location.href='contact.php';
                    </script>
                    ";
                   }
                }
            }
            else{
            }
          ?>
					</div>

				</div>
			</section>

		</div>
	</div>
  <?php
  get_footer();
  ?>
