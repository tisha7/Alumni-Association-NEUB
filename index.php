  <?php
      require_once("functions/function.php");
      get_header();
  ?>
    <div class="topnav"  id="myTopnav" >
      <div class="logo">
        <a href="index.php"><img src="img/logo3.jpg" alt="NEUBAA" height="100" width="400"></a>
      </div>
      <div class="navi">
        <a href="index.php" class="active">Home</a>
        <a href="about.php">About</a>
        <a href="gallery.php">Gallery</a>
        <a href="committee.php">Committee</a>
        <a href="members.php">Memberlist</a>
        <a href="career.php">Career</a>
        <a href="job.php">Job Corner</a>
        <a href="Events.php">Events</a>
        <a href="contact.php">Contact</a>
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

  <!--banner-->
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="1"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"></div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
      </div>
      <div class="item slides">
        <div class="slide-3"></div>
      </div>
    </div>
  </div>
  <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <!--end banner-->
  <div class="row">
    <div class="main">
      <h1>Alumni Interview</h1>
      <div class="fakeimg" style="">
        <div style="height:330px; width:637px; padding:10px 10px;"><img src="img/ayonalumni.jpg" alt="NEUBAA" ></div>
      </div>
    </div>

    <div class="side">
      <br>
      <br>
      <br>
      <br>
      <h3>Ayon Dey</h3>
      <br>
      <p style="font-size:20px;">The CSE alumni family is huge. They are spread out across the world, holding positions of eminence.
        The alumni events, networking get-togethers, on-campus activities, and sporting events, career advisory services,
        and social media resources available through the Alumni Association
        to help you be as successful as you can possibly be. After all, your success is our success.</p>
      <br>
    </div>
  </div>

  <?php
  get_footer();
  ?>
